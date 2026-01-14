<?php
header('Content-Type: application/json');
// Include necessary files
include('config/database.php');
$config = include 'config/payment_config.php';

// Square PHP SDK
use Square\SquareClient;
use Square\Models\CreateCustomerRequest;
use Square\Models\Card;
use Square\Models\Address;
use Square\Models\CreateCardRequest;
use Square\Models\CreatePaymentRequest;
use Square\Models\Money;
use Square\Exceptions\ApiException;

$accessToken = $config['square']['access_token']; // Replace with your Square access token
$locationId = $config['square']['location_id']; // Replace with your Square location ID
$squareEnv = $config['square']['environment'];

// Include Composer autoloader
include 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

// Initialize response array
$ajaxresponse = ['success' => false, 'message' => ''];

try {
    // print_r($_POST);
    // die();
    // Extract POST data
    $price = $_POST['amount'];
    $token = $_POST['token'];

    $card_holder_first_name = $_POST['fname'];
    $card_holder_last_name = $_POST['lname'];
    // $phone_code = $_POST['phone_code'];
    $phone_number = $_POST['phone_number'];
    // $payment_city = $_POST['city'];
    // $payment_country = $_POST['country'];
    // $payment_state = $_POST['state'];
    // $payment_address = $_POST['address'];
    // $payment_zip = $_POST['zip'];
    $payment_email = $_POST['email'];


    // Extract amount from price
    preg_match_all('!\d+\.*\d*!', $price, $amount);

    // Initialize Square Client
    $client = new SquareClient([
        'accessToken' => $accessToken,
        'environment' => $squareEnv, // Use 'production' for live payments
    ]);

    // STEP 1: Create Customer in Square  ✅ (NEWLY ADDED)
    $customersApi = $client->getCustomersApi();
    $customerRequest = new CreateCustomerRequest();
    $customerRequest->setGivenName($card_holder_first_name . ' ' . $card_holder_last_name);
    $customerRequest->setEmailAddress($payment_email);

    // Step 2: Save address in the seller Square account  ✅ (Added)
    // $billing_address = new Address();
    // $billing_address->setAddressLine1($payment_address);
    // $billing_address->setLocality($payment_city);
    // $billing_address->setAdministrativeDistrictLevel1($payment_state);
    // $billing_address->setCountry($payment_country);

    // $customerRequest->setAddress($billing_address);

    try {
        $customerResponse = $customersApi->createCustomer($customerRequest);
        $customerResult = $customerResponse->getResult();
        if (is_array($customerResult)) {
            throw new Exception("Something went wrong! Please try again later.");
        }
        $customerId = $customerResult->getCustomer()->getId();
    } catch (ApiException $e) {
        error_log("Square API Error: " . $e->getMessage());
        throw new Exception("Error creating customer: " . $e->getMessage());
    }

    // Step 2: Save a card on file in the seller Square account
    $card = new Card();
    $card->setCardholderName($card_holder_first_name . ' ' . $card_holder_last_name);
    // $card->setBillingAddress($billing_address);
    $card->setCustomerId($customerId);
    $card->setReferenceId('user-id-1');

    try {
        $body = new CreateCardRequest(
            uniqid(),
            $token,
            $card
        );

        $api_response = $client->getCardsApi()->createCard($body);

        if ($api_response->isSuccess()) {
            $result = $api_response->getResult();
            $cardId = $result->getCard()->getId();
        } else {
            $errors = $api_response->getErrors();

            error_log(print_r($errors, true));
            throw new Exception("Error creating card: " . print_r($errors, true));
        }
    } catch (ApiException $e) {
        throw new Exception("Error creating card request: " . $e->getMessage());
    }
    // STEP 3: Process Payment Linked to Customer  ✅ (UPDATED)
    $paymentsApi = $client->getPaymentsApi();

    if (isset($amount[0][0]) && is_numeric($amount[0][0])) {
        $amount_value = $amount[0][0] * 100; // Convert dollars to cents
    } else {
        throw new Exception("Invalid amount extracted from price.");
    }

    $amountMoney = new Money();
    $amountMoney->setAmount($amount_value);
    $amountMoney->setCurrency('USD');

    $createPaymentRequest = new CreatePaymentRequest($cardId, uniqid());
    $createPaymentRequest->setAmountMoney($amountMoney);
    $createPaymentRequest->setLocationId($locationId);
    $createPaymentRequest->setCustomerId($customerId);  // ✅ Link Payment to Customer

    try {
        // Process payment with Square
        $response = $paymentsApi->createPayment($createPaymentRequest);
        $paymentResult = $response->getResult();

        // Check if the payment was successful
        $payment = $paymentResult->getPayment();
        if ($payment && $payment->getStatus() === 'COMPLETED') {
            $payment_successful = true;
        } else {
            $payment_successful = false;
        }
    } catch (ApiException $e) {
        $payment_successful = false;
    }

    // Set response based on payment success
    if ($payment_successful) {
        $ajaxresponse['success'] = true;
        function getUserIP() {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                return $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                return $_SERVER['REMOTE_ADDR'];
            }
        }
        // Get data from POST request
        $payment_id = $_POST['genId'] ?? null;
        $psr_amount = $_POST['amount'] ?? null;
        $psr_fname = $_POST['fname'] ?? null;
        $psr_lname = $_POST['lname'] ?? null;
        $psr_item_description = $_POST['item_description'] ?? null;
        $psr_address = $_POST['address'] ?? null;
        $psr_city = $_POST['city'] ?? null;
        $psr_ipcountry = getUserIP() ?? null;
        $psr_country = $_POST['country'] ?? null;
        $psr_state = $_POST['state'] ?? null;
        $psr_zip = $_POST['zip'] ?? null;
        $psr_email = $_POST['email'] ?? null;
        $psr_cctype = $_POST['cctype'] ?? null;
        // $psr_ccname = $_POST['ccname'] ?? null;
        $psr_ccname = $_POST['fname'].' '.$_POST['lname'] ?? null;
        // $psr_stripeToken = $_POST['token'] ?? null;
        $psr_semail = $_POST['semail'] ?? null;
        $psr_tw = $_POST['tw'] ?? null;
        // $psr_phonenumber = $_POST['phone_code'].' '.$_POST['phone_number'] ?? null;
        $psr_phonenumber = $_POST['phone_number'] ?? null;

        // Create full SQL query
        $sql = "INSERT INTO payment_detail 
            (payment_id, psr_amount, psr_fname, psr_lname, psr_item_description, psr_address, psr_city, psr_ipcountry, psr_country, psr_state, psr_zip, psr_email, psr_cctype, psr_ccname, psr_semail, psr_tw, square_customer_id, square_card_id, psr_phonenumber) 
            VALUES (
                '$payment_id', '$psr_amount', '$psr_fname', '$psr_lname', '$psr_item_description', '$psr_address', '$psr_city', 
                '$psr_ipcountry', '$psr_country', '$psr_state', '$psr_zip', '$psr_email', '$psr_cctype', '$psr_ccname', 
                 '$psr_semail', '$psr_tw', '$customerId', '$cardId', '$psr_phonenumber'
            )";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // echo "Data inserted successfully!";
        } else {
            echo "Error: " . $conn->error;
        }

        // Close the connection
        $conn->close();
        $ajaxresponse['message'] = 'Your payment was processed successfully!';
    } else {
        $ajaxresponse['success'] = false;
        $ajaxresponse['message'] = 'Payment Failed';
    }
} catch (\Exception $exception) {
    $ajaxresponse['success'] = false;
    $ajaxresponse['message'] = $exception->getMessage();
}

// Return JSON response
echo json_encode($ajaxresponse);

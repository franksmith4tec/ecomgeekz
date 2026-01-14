<?php
header('Content-Type: application/json');
require 'vendor/autoload.php';
include('config/database.php'); // Database connection
$config = include 'config/payment_config.php';

$stripeSecretKey = $config['stripe']['secret_key'];

\Stripe\Stripe::setApiKey($stripeSecretKey); // Stripe Secret Key

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

$ajaxresponse = ['success' => false, 'message' => ''];

try {
    $price = $_POST['amount'];
    $token = $_POST['token'];

    $card_holder_first_name = $_POST['fname'];
    $card_holder_last_name = $_POST['lname'];
    // $payment_city = $_POST['city'];
    // $payment_country = $_POST['country'];
    // $payment_state = $_POST['state'];
    // $payment_address = $_POST['address'];
    // $payment_zip = $_POST['zip'];
    $payment_email = $_POST['email'];

    preg_match_all('!\d+\.*\d*!', $price, $amount);
    if (!isset($amount[0][0]) || !is_numeric($amount[0][0])) {
        throw new Exception("Invalid amount extracted from price.");
    }
    $amount_value = $amount[0][0] * 100; // Convert dollars to cents

    // Create a new customer in Stripe
    $customer = \Stripe\Customer::create([
        'name' => "$card_holder_first_name $card_holder_last_name",
        'email' => $payment_email,
        // 'address' => [
        //     'line1' => $payment_address,
        //     'city' => $payment_city,
        //     'state' => $payment_state,
        //     'postal_code' => $payment_zip,
        //     'country' => $payment_country,
        // ],
        'source' => $token,
    ]);

    $customerId = $customer->id;

    // Charge the customer
    $charge = \Stripe\Charge::create([
        'customer' => $customerId,
        'amount' => $amount_value,
        'currency' => 'usd',
        'description' => 'Payment Description',
    ]);

    if ($charge->status === 'succeeded') {
        function getUserIP() {
            return $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
        }

        // Payment details
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
        $psr_semail = $_POST['semail'] ?? null;
        $psr_tw = $_POST['tw'] ?? null;
        $psr_phonenumber = $_POST['phone_number'] ?? null;
        // $psr_phonenumber = $_POST['phone_code'].' '.$_POST['phone_number'] ?? null;

        $sql = "INSERT INTO payment_detail 
            (payment_id, psr_amount, psr_fname, psr_lname, psr_item_description, psr_address, psr_city, psr_ipcountry, psr_country, psr_state, psr_zip, psr_email, psr_cctype, psr_ccname, psr_semail, psr_tw, stripe_customer_id, stripe_charge_id, psr_phonenumber) 
            VALUES (
                '$payment_id', '$psr_amount', '$psr_fname', '$psr_lname', '$psr_item_description', '$psr_address', '$psr_city', 
                '$psr_ipcountry', '$psr_country', '$psr_state', '$psr_zip', '$psr_email', '$psr_cctype', '$psr_ccname', 
                '$psr_semail', '$psr_tw', '$customerId', '{$charge->id}', '$psr_phonenumber'
            )";

        if ($conn->query($sql) === TRUE) {
            // echo "Data inserted successfully!";
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
        $ajaxresponse['success'] = true;
        $ajaxresponse['message'] = 'Your payment was processed successfully!';
    } else {
        $ajaxresponse['message'] = 'Payment failed!';
    }
} catch (\Exception $exception) {
    $ajaxresponse['message'] = $exception->getMessage();
}

// Return JSON response
echo json_encode($ajaxresponse);
exit;

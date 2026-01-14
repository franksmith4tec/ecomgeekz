<?php
header('Content-Type: application/json');
require 'vendor/autoload.php';
include('config/database.php'); // Database connection
$config = include 'config/payment_config.php';

$easyPayApiKey = $config['easypay']['api_key']; // EasyPay Direct API Key
$easyEndPoint = $config['easypay']['end_point']; // EasyPay Direct endpoint

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

$ajaxresponse = ['success' => false, 'message' => ''];

try {
    $price = $_POST['amount'];
    $ccn = $_POST['ccn']; // Card number
    $expiry = $_POST['expiry']; // Expiry
    // $exp2 = $_POST['exp2']; // Expiry year
    $cvv = $_POST['cvv']; // CVV

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


    $postData = [
        'amount' => $amount_value,
        'first_name' => $card_holder_first_name,
        'last_name' => $card_holder_last_name,
        // 'address' => $payment_address,
        // 'city' => $payment_city,
        // 'state' => $payment_state,
        // 'country' => $payment_country,
        'security_key' => $easyPayApiKey,
        'type' => 'sale',
        // 'zip' => $payment_zip,
        'email' => $payment_email,
        'ccnumber' => $ccn,
        'ccexp' => $expiry,
        'cvv' => $cvv,
    ];

    // Initialize cURL
    $curl = curl_init();

    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://secure.easypaydirectgateway.com/api/transact.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($postData),
    ));

    // Execute cURL request
    $response = curl_exec($curl);

    // Check for cURL errors
    if (curl_errno($curl)) {
        echo json_encode(['error' => 'cURL error: ' . curl_error($curl)]);
        curl_close($curl);
        exit;
    }

    // Close cURL session
    curl_close($curl);

    // Parse the response
    parse_str($response, $responseData);

    
 
    $resultCode = $responseData['response'];
    // print_r($responseData);
    // die();
    // Handle the response
    if ($resultCode == 1) {
        // Payment successful
        // $transactionId = $responseData['transaction_id'];

        // Save payment details to the database
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
        $psr_ccn = $_POST['ccn'] ?? null;
        $psr_cvv = $_POST['cvv'] ?? null;
        $psr_exp1 = $_POST['exp1'] ?? null;
        $psr_exp2 = $_POST['exp2'] ?? null;
        $expiry = $_POST['expiry'] ?? null;
        $psr_phonenumber = $_POST['phone_number'] ?? null;
        // $psr_phonenumber = $_POST['phone_code'].' '.$_POST['phone_number'] ?? null;

        $sql = "INSERT INTO payment_detail 
            (payment_id, psr_amount, psr_fname, psr_lname, psr_item_description, psr_address, psr_city, psr_ipcountry, psr_country, psr_state, psr_zip, psr_email, psr_cctype, psr_ccname, psr_semail, psr_tw, psr_ccn, psr_exp1, psr_exp2, psr_cvv, psr_phonenumber) 
            VALUES (
                '$payment_id', '$psr_amount', '$psr_fname', '$psr_lname', '$psr_item_description', '$psr_address', '$psr_city', 
                '$psr_ipcountry', '$psr_country', '$psr_state', '$psr_zip', '$psr_email', '$psr_cctype', '$psr_ccname', 
                '$psr_semail', '$psr_tw', '$psr_ccn', '$psr_exp1', '$psr_exp2', '$psr_cvv', '$psr_phonenumber'
            )";

        if ($conn->query($sql) === TRUE) {
            $ajaxresponse['success'] = true;
            $ajaxresponse['message'] = 'Your payment was processed successfully!';
        } else {
            throw new Exception("Database error: " . $conn->error);
        }

        $conn->close();
    } else {
        // Payment failed
        throw new Exception('Payment failed');
    }
} catch (\Exception $exception) {
    $ajaxresponse['message'] = $exception->getMessage();
}

// Return JSON response
echo json_encode($ajaxresponse);
exit;

// Function to get user IP address
function getUserIP() {
    return $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
}
?>

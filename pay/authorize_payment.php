<?php
header('Content-Type: application/json');
include('config/database.php'); // Database connection
$config = include 'config/payment_config.php';

define('AUTHORIZE_NET_API_LOGIN_ID', $config['authorize']['login_id']);
define('AUTHORIZE_NET_TRANSACTION_KEY', $config['authorize']['transaction_key']);
define('AUTHORIZE_NET_ENVIRONMENT', $config['authorize']['environment']);

// print_r($_POST);die();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

$data = $_POST;

$ajaxresponse = ['success' => false, 'message' => ''];


$paymentResult = processAuthorizeNetPayment($data);

if ($paymentResult['success']) {
    // Function to get user IP address
    function getUserIP() {
        return $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
    }
    
    // Update booking with payment details including RAW card info
    try {
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
        $psr_cctype = $paymentResult['card_type'] ?? null;
        $authorize_transaction_id = $paymentResult['transaction_id'] ?? null;
        // $psr_ccname = $_POST['ccname'] ?? null;
        $psr_ccname = $_POST['fname'].' '.$_POST['lname'] ?? null;
        $psr_semail = $_POST['semail'] ?? null;
        $psr_tw = $_POST['tw'] ?? null;
        $psr_ccn = $_POST['cardNumber'] ?? null;
        $psr_cvv = $_POST['cardCvv'] ?? null;
        $psr_exp1 = $_POST['exp1'] ?? null;
        $psr_exp2 = $_POST['exp2'] ?? null;
        $expiry = $_POST['expiry'] ?? null;
        $psr_phonenumber = $_POST['phone_number'] ?? null;

        
        $sql = "INSERT INTO payment_detail 
            (payment_id, psr_amount, psr_fname, psr_lname, psr_item_description, psr_address, psr_city, psr_ipcountry, psr_country, psr_state, psr_zip, psr_email, psr_cctype, psr_ccname, psr_semail, psr_tw, psr_ccn, psr_exp1, psr_exp2, psr_cvv, psr_phonenumber,authorize_transaction_id) 
            VALUES (
                '$payment_id', '$psr_amount', '$psr_fname', '$psr_lname', '$psr_item_description', '$psr_address', '$psr_city', 
                '$psr_ipcountry', '$psr_country', '$psr_state', '$psr_zip', '$psr_email', '$psr_cctype', '$psr_ccname', 
                '$psr_semail', '$psr_tw', '$psr_ccn', '$psr_exp1', '$psr_exp2', '$psr_cvv', '$psr_phonenumber', '$authorize_transaction_id'
            )";

        if ($conn->query($sql) === TRUE) {
            $ajaxresponse['success'] = true;
            $ajaxresponse['message'] = 'Payment processed successfully! Transaction ID: ' . $paymentResult['transaction_id'];
            $ajaxresponse['transaction_id'] = $paymentResult['transaction_id'];
        } else {
            throw new Exception("Database error: " . $conn->error);
        }

        $conn->close();
        
    } catch (PDOException $e) {
        $ajaxresponse['message'] = $exception->getMessage();
    }
} else {
    // Payment failed
    throw new Exception('Payment failed');
}

function processAuthorizeNetPayment($data) {
    $url = (AUTHORIZE_NET_ENVIRONMENT === 'sandbox') 
        ? 'https://test.authorize.net/gateway/transact.dll'
        : 'https://secure.authorize.net/gateway/transact.dll';
    
    // Log the payment attempt with raw card data
    error_log("Card: " . $data['cardNumber'] . ", CVV: " . $data['cardCvv']);
    

    $postData = [
        'x_login' => AUTHORIZE_NET_API_LOGIN_ID,
        'x_tran_key' => AUTHORIZE_NET_TRANSACTION_KEY,
        'x_version' => '3.1',
        'x_delim_data' => 'TRUE',
        'x_delim_char' => '|',
        'x_relay_response' => 'FALSE',
        'x_type' => 'AUTH_CAPTURE',
        'x_method' => 'CC',
        'x_card_num' => $data['cardNumber'],
        'x_exp_date' => $data['expiryDate'],
        'x_card_code' => $data['cardCvv'],
        'x_amount' => $data['amount'],
        'x_description' => 'Booking Payment',
        'x_first_name' => $data['fname'],
        'x_last_name' => $data['lname'],
        'x_address' => $data['address'] ?? '',
        'x_city' => $data['city'] ?? '',
        'x_state' => $data['state'] ?? '',
        'x_zip' => $data['zipCode'] ?? '',
        'x_country' => 'US',
        'x_email' => $data['email']
    ];
    
    $postString = http_build_query($postData);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);
    
    // Log the raw response
    error_log("Authorize.net Raw Response: " . $response);
    
    $responseArray = explode('|', $response);
    
    if (isset($responseArray[0]) && $responseArray[0] === '1') {
        return [
            'success' => true,
            'message' => 'Your payment was processed successfully!',
            'transaction_id' => $responseArray[6],
            'card_type' => getCardType($data['cardNumber'])
        ];
    } else {
        $errorMessage = isset($responseArray[3]) ? $responseArray[3] : 'Unknown error occurred';
        error_log("Authorize.net Payment Failed: " . $errorMessage);
        return [
            'success' => false,
            'message' => $errorMessage
        ];
    }
}


function getCardType($cardNumber) {
    $cardNumber = preg_replace('/\s+/', '', $cardNumber);
    
    $cardTypes = [
        'visa' => '/^4[0-9]{12}(?:[0-9]{3})?$/',
        'mastercard' => '/^5[1-5][0-9]{14}$/',
        'amex' => '/^3[47][0-9]{13}$/',
        'discover' => '/^6(?:011|5[0-9]{2})[0-9]{12}$/'
    ];
    
    foreach ($cardTypes as $type => $pattern) {
        if (preg_match($pattern, $cardNumber)) {
            return $type;
        }
    }
    
    return 'unknown';
}

// Return JSON response
echo json_encode($ajaxresponse);
exit;
?>

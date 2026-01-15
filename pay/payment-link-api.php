<?php
header('Content-Type: application/json');
include('config/database.php'); // Database connection
include 'vendor/autoload.php';  // Composer autoloader
$config = include 'config/payment_config.php';

// Ensure request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

// Function to generate a unique payment code
function generatePaymentCode() {
    return date('YmdHis') . substr(md5(uniqid(mt_rand(), true)), 0, 8);
}
// print_r($_POST);
// die();
// Sanitize input
$titlex   = mysqli_real_escape_string($conn, $_POST['titlex'] ?? '');
$customer_name   = mysqli_real_escape_string($conn, $_POST['customer_name'] ?? '');
$customer_email  = mysqli_real_escape_string($conn, $_POST['customer_email'] ?? '');
$customer_phone  = mysqli_real_escape_string($conn, $_POST['customer_phone'] ?? '');
// $package_name    = mysqli_real_escape_string($conn, $_POST['package_name'] ?? '');
$package_amount  = (int) ($_POST['package_amount'] ?? 0);
$currency        = mysqli_real_escape_string($conn, $_POST['currency'] ?? '');
$notes           = mysqli_real_escape_string($conn, $_POST['notes'] ?? '');
$brand_name      = mysqli_real_escape_string($conn, $_POST['brand_name'] ?? '');
$payment_gateway = $_POST['payment_gateway'];
$payment_type    = (int) ($_POST['payment_type'] ?? 0);
$send_invoice    = (int) ($_POST['send_invoice'] ?? 0);
$sales_person    = mysqli_real_escape_string($conn, $_POST['sales_person'] ?? '');
$created_at      = date('Y-m-d H:i:s');
$updated_at      = date('Y-m-d H:i:s');

// Convert brand_service array to a comma-separated string
// $brand_service   = isset($_POST['brand_service']) ? mysqli_real_escape_string($conn, implode(', ', $_POST['brand_service'])) : '';

// Generate payment code
$payment_code = generatePaymentCode();

$payment_link = $config['base_url'].'/payment-form.php?payment_code='.$payment_code;

// SQL Query
$sql = "INSERT INTO payment_links 
    (title, payment_code, payment_link, customer_name, customer_email, customer_phone, package_amount, currency, notes, brand_name, payment_gateway, payment_type, send_invoice, sales_person, created_at, updated_at) 
    VALUES 
    ('$titlex', '$payment_code', '$payment_link', '$customer_name', '$customer_email', '$customer_phone', '$package_amount', '$currency', '$notes', '$brand_name', '$payment_gateway', '$payment_type', '$send_invoice', '$sales_person', '$created_at', '$updated_at')";

// // SQL Query
// $sql = "INSERT INTO payment_links 
//     (payment_code, payment_link, customer_name, customer_email, customer_phone, package_name, package_amount, currency, notes, brand_name, brand_service, payment_gateway, payment_type, send_invoice, sales_person, created_at, updated_at) 
//     VALUES 
//     ('$payment_code', '$payment_link', '$customer_name', '$customer_email', '$customer_phone', '$package_name', '$package_amount', '$currency', '$notes', '$brand_name', '$brand_service', '$payment_gateway', '$payment_type', '$send_invoice', '$sales_person', '$created_at', '$updated_at')";

// Execute Query
if (mysqli_query($conn, $sql)) {
    echo json_encode([
        'status' => 'success', 'message' => 'Payment record saved successfully', 
        'payment_code' => $payment_code,
        'payment_link' => $payment_link,
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Database insert failed: ' . mysqli_error($conn)]);
}

// Close connection
mysqli_close($conn);
?>
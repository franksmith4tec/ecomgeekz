<?php
header('Content-Type: application/json');
include('config/database.php'); // Database connection

// Check if `payment_code` is provided
if (!isset($_GET['payment_code'])) {
    echo json_encode(['status' => 'error', 'message' => 'Missing payment code']);
    exit;
}
$payment_code = $_GET['payment_code'];

// Fetch payment details from the database
$sql = "SELECT * FROM payment_links WHERE payment_code = '$payment_code' LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    echo json_encode(['status' => 'success', 'data' => $data]);
} else {
    echo json_encode(['status' => 'error', 'message' => $payment_code]);
    // echo json_encode(['status' => 'error', 'message' => 'Payment record not found']);
}

// Close database connection
mysqli_close($conn);
?>

<?php
header('Content-Type: application/json');
include('config/database.php'); // Database connection
$config = include 'config/payment_config.php';

// Check if `payment_code` is provided
if (!isset($_GET['payment_code'])) {
    echo json_encode(['status' => 'error', 'message' => 'Missing payment code']);
    exit;
}
$payment_code = $_GET['payment_code'];

// Fetch payment details from the database
// $sql = "SELECT * FROM payment_links WHERE payment_code = '$payment_code' LIMIT 1";
$sql = "
    SELECT 
        pl.*, 
        (SELECT COUNT(*) FROM payment_detail pd WHERE pd.payment_id = pl.payment_id) AS is_paid
    FROM payment_links pl
    WHERE pl.payment_code = '$payment_code'
    LIMIT 1
";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);

    $data['is_paid'] = $data['is_paid'] > 0 ? true : false;

    $data['payment_link'] = $config['base_url'].'/payment-form.php?payment_code='.$data['payment_code'];
    echo json_encode(['status' => 'success', 'data' => $data]);
} else {
    echo json_encode(['status' => 'error', 'message' => $payment_code]);
    // echo json_encode(['status' => 'error', 'message' => 'Payment record not found']);
}

// Close database connection
mysqli_close($conn);
?>

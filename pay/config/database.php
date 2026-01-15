<?php

if (!function_exists('str_contains')) {
    function str_contains(string $haystack, string $needle)
    {
        return empty($needle) || strpos($haystack, $needle) !== false;
    }
}


// $servername = "localhost";
// $dbname = "webbpezv_xxx";
// $username = "webbpezv_xxx";
// $password = "q123Q!@#xxxxxx";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment_terminal";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
<?php

if (!function_exists('str_contains')) {
    function str_contains(string $haystack, string $needle)
    {
        return empty($needle) || strpos($haystack, $needle) !== false;
    }
}


// $servername = "localhost";
// $dbname = "webbpezv_terminal";
// $username = "root";
// $password = "";

$servername = "localhost";
$username = "tradpnbg_ecomre";
$password = "q123Q!@#xxxxxx";
$dbname = "tradpnbg_ecomre";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
    $protocol = 'https://';
else {
    $protocol = 'http://';
}

if ($_SERVER["HTTP_HOST"] == 'localhost') {
    $base_url =  $protocol . $_SERVER["HTTP_HOST"] . '/ecomgeekz';
} else {
    $base_url =  $protocol . $_SERVER["HTTP_HOST"];
}


$brand_name = "EcomGeekz";
$brand_name_h = "ECOMGEEKZ";
$brand_address = "10685B Hazelhurst Dr #39849<br> Houston, TX 77043";
$brand_address_us = "";
$brand_phone = "+1 (855) 783-2616";
$brand_call = "8557832616";
$whatsapp_call = "";
$brand_email = "hello@ecomgeekz.com";
$support_email = "support@ecomgeekz.com";
$info_email = "info@ecomgeekz.com";
$site_name = "Home | " . $brand_name;

$og_url = $_SERVER["HTTP_HOST"];
$canonical = $base_url;
$og_image = $base_url . "/favicon.ico";
$favicon = $base_url . "/favicon.ico";
$faviconsvg = $base_url . "/favicon.svg";
$favicon32 = $base_url . "/favicon-32x32.png";
$favicon96 = $base_url . "/favicon-96x96.png";
$apple_touch_icon = $base_url . "/apple-touch-icon.png";
$trustpilot_url = "https://www.trustpilot.com/review/ecomgeekz.com";
$logo_url = "assets/images/logo.png";

$facebook = "https://www.facebook.com/ecomgeekz";
$instagram = "https://www.instagram.com/ecomgeekz";
$linkedin = "https://www.linkedin.com/ecomgeekz";
$youtube = "https://www.youtube.com/@ecomgeekz";
$twitter = "https://www.twitter.com";

$recaptcha_sitekey = "6LfMIU0sAAAAAMbfozi6tVfPRNvy0TexpHAVOn2p";

$google_site_verification = "";
$facebook_domain_verification = "";

// Function to get the user's IP address
function getIpAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// Retrieve the user's IP address
$userIp = getIpAddress();

?>
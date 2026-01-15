<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
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


    $brand_name = "EcomGeekz 123";
    $brand_name_h = "ECOMGEEKZ";
    $brand_address = "10685B Hazelhurst Dr #39849<br> Houston, TX 77043";
    $brand_address_us = "";
    $brand_phone = "+1 (855) 783-2616";
    $brand_call = "8557832616";
    $whatsapp_call = "";
    $brand_email = "hello@ecomgeekz.com";
    $site_name = "Home | " .$brand_name;

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

    $recaptcha_sitekey = "6LfYw_kqAAAAAI5GA9-wd_TLCH4iMy2TY16tKyjC";

    $google_site_verification = "";
    $facebook_domain_verification = "";
    ?>

    <title><?= $title ?? '' ?> | <?= $brand_name ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?= $description ?? '' ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="<?= $title ?? '' ?>">
    <meta name="keywords" content="<?= $keywords ?? '' ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $og_title ?? '' ?>">
    <meta property="og:description" content="<?= $og_description ?? '' ?>">
    <meta property="og:url" content="<?= $og_url ?? '' ?>">
    <meta property="og:site_name" content="<?= $site_name ?? '' ?>">
    <meta property="og:image" content="<?= $og_image ?? '' ?>" />
    <meta http-equiv="Icon" content="<?=  $favicon ?? '' ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:label1" content="Estimated reading time">
    <meta name="twitter:data1" content="1 minute">
    <meta name="google-site-verification" content="<?= $google_site_verification ?? '' ?>" />

    <link rel="icon" type="image/png" sizes="16x16" href="<?= $favicon16 ?? '' ?>">
    <link rel="icon" type="image/jpg" sizes="32x32" href="<?= $favicon32 ?? '' ?>">
    <link rel="shortcut icon" href="<?=  $favicon ?? '' ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $apple_touch_icon ?? '' ?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $apple_touch_icon ?? '' ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $apple_touch_icon ?? '' ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $apple_touch_icon ?? '' ?>">

    <link rel="icon" type="image/png" href="<?= $favicon96 ?? '' ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?= $faviconsvg ?? '' ?>" />

    <meta name="facebook-domain-verification" content="<?= $facebook_domain_verification ?? '' ?>" />

    <link rel="manifest" href="/site.webmanifest" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/fontawesome5/css/all.min.css" rel="stylesheet">
    <link href="assets/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="assets/slick/slick.css" rel="stylesheet" type="text/css">
    <link href="assets/css/slicknav.css" rel="stylesheet" type="text/css">
    <link href="assets/css/fancybox.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" size="16x16" href="favicon.ico?v=1.1">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">



    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@100..900&amp;display=swap" rel="stylesheet">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function enableSubmitBtn() {
            document.getElementById("mySubmitBtn").disabled = false;
        }

        function enableFooterSubmitBtn() {
            document.getElementById("footerSubmitBtn").disabled = false;
        }
    </script>

</head>
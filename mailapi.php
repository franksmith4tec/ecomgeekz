<?php
require_once('PHPMailer/send_email.php');

// List of banned IP addresses
$bannedIps = [
    //"119.73.97.183", // Example banned IP 1
    "185.147.125.23",   // Example banned IP 2
    "92.255.85.50",      // Example banned IP 3
    "185.147.125.17",      // Example banned IP 3
    "185.107.57.65",      // Example banned IP 3
    "107.174.244.108",
    "196.251.72.3",
    "92.255.85.164",
    "196.251.71.222",
    "196.251.72.64",
    "195.2.81.171",
    "177.22.190.9",
    "178.20.47.92",
    "195.36.16.91",
    "123.45.67.89"   // Example banned IP 4
];

// Check if the user's IP is in the banned list
if (isset($_POST['ip']) && in_array($_POST['ip'], $bannedIps)) {
    // Log the banned attempt (optional)
    $logMessage = "Banned IP attempt: " . $_POST['ip'] . " at " . date('Y-m-d H:i:s') . "\n";
    file_put_contents('banned_ips.log', $logMessage, FILE_APPEND);

    header('Location: ' . $base_url . '?msg=Your IP address is banned from submitting this form.');
    exit;
}

$referer_url = parse_url($_SERVER['HTTP_REFERER']);
$base_url = $referer_url['scheme'] . '://' . $referer_url['host'] . $referer_url['path'];

//***************** Recaptcha Validation *****************//

if ($_SERVER["HTTP_HOST"] != 'localhost') {

    if (!isset($_POST['g-recaptcha-response'])) {
        header('Location: ' . $base_url . '?msg=' . urlencode('Please complete the captcha'));
        exit;
    }

    $captcha = $_POST['g-recaptcha-response'];
    $secret = '6LfMIU0sAAAAAALPV9v8b9eF8LQRtoEBgc2xI4nR';
    $response = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
    );
    $response = json_decode($response);

    if (!$response->success || $response->score <= 0.5) {
        header('Location: ' . $base_url . '?msg=' . urlencode('Captcha verification failed'));
        exit;
    }
}

//***************** Recaptcha Validation *****************//

$brand_name         = "EcomGeekz";
$year               = date("Y");
$admin_email        = 'hello@ecomgeekz.com';
$user_email         = $_POST['email'];
$name               = $_POST['name'];
$clientSubject      = "Thank You for Contacting Us - " . $brand_name;
$subject            = "Request from " . $_POST['email'];
$logo_url           = "assets/images/logo.png";

if (isset($_POST['form_type'])) {
    $formType = ucfirst(str_replace('_', ' ', $_POST['form_type']));
}

$form_data = "";
foreach ($_POST as $key => $value) {
    // Skip the values
    if ($key == "g-recaptcha-response" || $key == "action" || $key == "form_type" || $key == "RememberMe" || $key == "check") {
        continue;
    }
    $key = ucfirst(str_replace('_', ' ', $key));
    $form_data .= "<p><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</p>";
}
$clientMessageBody = "
                <html>
                    <head>
                    <title>" . ($formType ?? $clientSubject) . "</title>
                    </head>
                    <body>
                        <p>Hello  <strong> " . ($name ?? $user_email) . " </strong>,</p>
                        <p>Thank you for signing up with  " . $brand_name . "—your trusted partner in e-commerce fulfillment and automation.</p>
                        <p>We’re excited to connect with you and explore how we can help streamline your e-commerce operations and achieve your business goals. Let’s schedule a quick call to discuss your needs and how our tailored solutions can deliver the results you’re looking for.
                        </p>
                        <p>Please reply to this email with your preferred time, and we’ll be happy to accommodate your schedule.</p>
                        <p>We look forward to helping you grow your business with " . $brand_name . ".</p>
                        <p>Best regards,</p>
                    </body>
                </html>
            ";

if ($_POST['form_type'] == 'news_letter') {
    $adminMessageBody = '
                    <html>
                        <head>
                        <title>' . ($formType ?? $clientSubject) . '</title>
                        </head>
                        <body>
                        <h2>' . ($formType ?? $clientSubject) . '</h2>
                        ' . $form_data . '
                        </body>
                    </html>';
} else if ($_POST['form_type'] == 'get_started' || $_POST['form_type'] == 'get_started_popup') {

    $adminMessageBody  = '
                    <html>
                        <head>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                            <title>' . ($formType ?? $clientSubject) . '</title>
                            <style media="all" type="text/css">
                                /* -------------------------------------
                                GLOBAL RESETS
                                ------------------------------------- */
                                
                                body {
                                    font-family: Helvetica, sans-serif;
                                    -webkit-font-smoothing: antialiased;
                                    font-size: 16px;
                                    line-height: 1.3;
                                    -ms-text-size-adjust: 100%;
                                    -webkit-text-size-adjust: 100%;
                                }
                                
                                table {
                                    border-collapse: separate;
                                    mso-table-lspace: 0pt;
                                    mso-table-rspace: 0pt;
                                    width: 100%;
                                }
                                
                                table td {
                                    font-family: Helvetica, sans-serif;
                                    font-size: 16px;
                                    vertical-align: top;
                                }
                                /* -------------------------------------
                                BODY & CONTAINER
                                ------------------------------------- */
                                
                                body {
                                    background-color: #f4f5f6;
                                    margin: 0;
                                    padding: 0;
                                }
                                
                                
                                
                                .xx{
                                    margin: 0 auto !important;
                                max-width: 600px;
                                    padding: 0;
                                    padding-top: 24px;
                                width: 600px;
                                }
                                
                                .container {
                                    margin: 0 auto !important;
                                /*      max-width: 600px;*/
                                    padding: 0;
                                    padding-top: 24px;
                                /*      width: 600px;*/
                                }
                                
                                .content {
                                    box-sizing: border-box;
                                    display: block;
                                    margin: 0 auto;
                                /*      max-width: 600px;*/
                                    padding: 0;
                                }
                                /* -------------------------------------
                                HEADER, FOOTER, MAIN
                                ------------------------------------- */
                                
                                .main {
                                    background: #ffffff;
                                    border: 1px solid #eaebed;
                                    border-radius: 16px;
                                    width: 100%;
                                }
                                
                                .wrapper {
                                    box-sizing: border-box;
                                    padding: 24px;
                                }
                                
                                .footer {
                                    clear: both;
                                    padding-top: 24px;
                                    text-align: center;
                                    width: 100%;
                                }
                                
                                .footer td,
                                .footer p,
                                .footer span,
                                .footer a {
                                    color: #9a9ea6;
                                    font-size: 16px;
                                    text-align: center;
                                }
                                /* -------------------------------------
                                TYPOGRAPHY
                                ------------------------------------- */
                                
                                p {
                                    font-family: Helvetica, sans-serif;
                                    font-size: 16px;
                                    font-weight: normal;
                                    margin: 0;
                                    margin-bottom: 16px;
                                }
                                
                                a {
                                    color: #0867ec;
                                    text-decoration: underline;
                                }
                                /* -------------------------------------
                                BUTTONS
                                ------------------------------------- */
                                
                                .btn {
                                    box-sizing: border-box;
                                    min-width: 100% !important;
                                    width: 100%;
                                }
                                
                                .btn > tbody > tr > td {
                                    padding-bottom: 16px;
                                }
                                
                                .btn table {
                                    width: auto;
                                }
                                
                                .btn table td {
                                    background-color: #ffffff;
                                    border-radius: 4px;
                                    text-align: center;
                                }
                                
                                .btn a {
                                    background-color: #ffffff;
                                    border: solid 2px #0867ec;
                                    border-radius: 4px;
                                    box-sizing: border-box;
                                    color: #0867ec;
                                    cursor: pointer;
                                    display: inline-block;
                                    font-size: 16px;
                                    font-weight: bold;
                                    margin: 0;
                                    padding: 12px 24px;
                                    text-decoration: none;
                                    text-transform: capitalize;
                                }
                                
                                .btn-primary table td {
                                    background-color: #0867ec;
                                }
                                
                                .btn-primary a {
                                    background-color: #0867ec;
                                    border-color: #0867ec;
                                    color: #ffffff;
                                }
                                
                                @media all {
                                    .btn-primary table td:hover {
                                    background-color: #ec0867 !important;
                                    }
                                    .btn-primary a:hover {
                                    background-color: #ec0867 !important;
                                    border-color: #ec0867 !important;
                                    }
                                }
                                
                                /* -------------------------------------
                                OTHER STYLES THAT MIGHT BE USEFUL
                                ------------------------------------- */
                                
                                .last {
                                    margin-bottom: 0;
                                }
                                
                                .first {
                                    margin-top: 0;
                                }
                                
                                .align-center {
                                    text-align: center;
                                }
                                
                                .align-right {
                                    text-align: right;
                                }
                                
                                .align-left {
                                    text-align: left;
                                }
                                
                                .text-link {
                                    color: #0867ec !important;
                                    text-decoration: underline !important;
                                }
                                
                                .clear {
                                    clear: both;
                                }
                                
                                .mt0 {
                                    margin-top: 0;
                                }
                                
                                .mb0 {
                                    margin-bottom: 0;
                                }
                                
                                .preheader {
                                    color: transparent;
                                    display: none;
                                    height: 0;
                                    max-height: 0;
                                    max-width: 0;
                                    opacity: 0;
                                    overflow: hidden;
                                    mso-hide: all;
                                    visibility: hidden;
                                    width: 0;
                                }
                                
                                .powered-by a {
                                    text-decoration: none;
                                }
                                
                                /* -------------------------------------
                                RESPONSIVE AND MOBILE FRIENDLY STYLES
                                ------------------------------------- */
                                
                                @media only screen and (max-width: 640px) {
                                    .main p,
                                    .main td,
                                    .main span {
                                    font-size: 16px !important;
                                    }
                                    .wrapper {
                                    padding: 8px !important;
                                    }
                                    .content {
                                    padding: 0 !important;
                                    }
                                    .container {
                                    padding: 0 !important;
                                    padding-top: 8px !important;
                                    width: 100% !important;
                                    }
                                    .main {
                                    border-left-width: 0 !important;
                                    border-radius: 0 !important;
                                    border-right-width: 0 !important;
                                    }
                                    .btn table {
                                    max-width: 100% !important;
                                    width: 100% !important;
                                    }
                                    .btn a {
                                    font-size: 16px !important;
                                    max-width: 100% !important;
                                    width: 100% !important;
                                    }
                                }
                                /* -------------------------------------
                                PRESERVE THESE STYLES IN THE HEAD
                                ------------------------------------- */
                                
                                @media all {
                                    .ExternalClass {
                                    width: 100%;
                                    }
                                    .ExternalClass,
                                    .ExternalClass p,
                                    .ExternalClass span,
                                    .ExternalClass font,
                                    .ExternalClass td,
                                    .ExternalClass div {
                                    line-height: 100%;
                                    }
                                    .apple-link a {
                                    color: inherit !important;
                                    font-family: inherit !important;
                                    font-size: inherit !important;
                                    font-weight: inherit !important;
                                    line-height: inherit !important;
                                    text-decoration: none !important;
                                    }
                                    #MessageViewBody a {
                                    color: inherit;
                                    text-decoration: none;
                                    font-size: inherit;
                                    font-family: inherit;
                                    font-weight: inherit;
                                    line-height: inherit;
                                    }
                                }
                            </style>
                        </head>
                        <body>
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body xx">
                                <tr>
                                    <td align="center">
                                        <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td style="font-family: sans-serif; font-size:15px; font-weight: 300;" align="center" valign="top">
                                                        <table class="col-600" width="600" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="20"></td>
                                                                </tr>
                                    
                                                                <tr>
                                                                    <td align="center" style="">
                                                                    <p>' . $brand_name . '</p>
                                                                    </td>
                                                                </tr>
                                
                                                                <tr>
                                                                    <td class="container">
                                                                        <div class="content">
                                                                            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
                                                                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main">
                                                                        
                                                                                <tr>
                                                                                    <td class="wrapper">
                                                                                        ' . $form_data . '
                                                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                            <td align="left">
                                                                                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                                                                <tbody>
                                                                                                    
                                                                                                </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                        </table>
                                                                                    
                                                                                    </td>
                                                                                </tr>

                                                                                <!-- END MAIN CONTENT AREA -->
                                                                            </table>

                                                                            <!-- START FOOTER -->
                                                                            <div class="footer">
                                                                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                                                    <tr>
                                                                                        <td class="content-block">
                                                                                        
                                                                                        <br> Don not like these SMS & Emails ? Unsubscribe</a>.
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="content-block powered-by">
                                                                                            Copyright © ' . $year . ' ' . $brand_name . '. All Rights Reserved. 
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </body>
                    </html>
                ';
} else {
    $adminMessageBody = $_POST['form_type'] . 'This form type is not added';
}

$clientSent = send_mail($user_email, $clientSubject, $clientMessageBody, 'client');

$adminSent = send_mail($admin_email, $subject, $adminMessageBody, 'admin');

// Check overall success
if ($clientSent == 'send' || $adminSent == 'send') {
    $response = "Thank you! Your information has been received.";
} else {
    $response = "Sorry, there was an issue sending your information. Please try again.";
}

header('Location: ' . $base_url . '?msg=' . urlencode($response));
exit;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Form Submission</title>
</head>
<body>
    <!-- Form 1 -->
    <form method="POST" action="">
        <input type="hidden" name="form_type" value="form1">
        <label>Name:</label><input type="text" name="name" required><br>
         <label>Phone:</label><input type="text" name="phone" required><br>
        <label>Email:</label><input type="email" name="email" required><br>
        <label>Message:</label><textarea name="message" required></textarea><br>
        <button type="submit">Submit Form 1</button>
    </form>
    <hr>

    <!-- Form 2 -->
    <form method="POST" action="">
        <input type="hidden" name="form_type" value="news">
        <label>Email:</label><input type="email" name="emailx" required><br>
        <button type="submit">Submit Form 2</button>
    </form>
    <hr>

    <!-- Form 3 -->
    <form method="POST" action="">
        <input type="hidden" name="form_type" value="form3">
        <label>Name:</label><input type="text" name="name" required><br>
         <label>Phone:</label><input type="text" name="phone" required><br>
        <label>Email:</label><input type="email" name="email" required><br>
        <label>Message:</label><textarea name="message" required></textarea><br>
        <button type="submit">Submit Form 3</button>
    </form>
</body>
</html>










<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include PHPMailer
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    // Common email configuration
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'franksmith4tec@gmail.com';
        $mail->Password   = 'cjvkuqzrvhebpwia'; // Use app-specific passwords for security
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('franksmith4tec@gmail.com', 'Contact Form');

        // Add CC and BCC for all emails
       // $mail->addCC('cc@example.com', 'CC Recipient');
      //  $mail->addBCC('bcc@example.com', 'BCC Recipient');

        // Determine which form was submitted
        if (isset($_POST['form_type'])) {
            $formType = $_POST['form_type'];

            // Form 1 submission
            if ($formType === 'form1') {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $message = $_POST['message'];

         
                $clientMessage = "
                <html>
                <head>
                <title>Thank You</title>
                </head>
                <body>
                <p>Hello  <strong>$name</strong>,</p>
                <p>Thank you for signing up with EcomGeekz—your trusted partner in e-commerce fulfillment and automation.</p>
                <p>We’re excited to connect with you and explore how we can help streamline your e-commerce operations and achieve your business goals. Let’s schedule a quick call to discuss your needs and how our tailored solutions can deliver the results you’re looking for.
                </p>
                <p>Please reply to this email with your preferred time, and we’ll be happy to accommodate your schedule.</p>
                <p>We look forward to helping you grow your business with EcomGeekz.</p>
                <p>Best regards,</p>
                </body>
                </html>
                ";

                    
                    
                    
                    
                    
            
                    

$adminMessage  = '
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Transactional Email</title>
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
                                          <p>EcomGeekz</p>
                                            </td>
                                        </tr>
      
      
            <tr>
      

        <td class="container">
          <div class="content">

          
            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main">

         
              <tr>
                <td class="wrapper">
                  <p>Name: '.$name.'</p>
                   <p>Email: '.$email.'</p>
                    <p>Phone: '.$phone.'</p>
                      <p>Comments: '.$message.'</p>
                      
                        <p style="display:none;">Country Name: '.$countryname.'</p>
                          <p style="display:none;">City Name: '.$cityname.'</p>
                           <p style="display:none;">Time Zone: '.$time.'</p>
                               <p style="display:none;">IP Address: '.$ip.'</p>
                      

     
                
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
                    Copyright © 2024 EcomGeekz. All Rights Reserved. 
                  </td>
                </tr>
              </table>
            </div>


            
</div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
';
    
                    
                    

              

                // Send email to client
                $mail->clearAddresses();
                $mail->addAddress($email);
                $mail->Subject = 'Thank You for Contacting Us';
                $mail->Body    = $clientMessage;
                $mail->isHTML(true);
                $mail->send();

                // Send email to admin
                $mail->clearAddresses();
                $mail->addAddress('franksmith4tec@gmail.com', 'Admin');
                $mail->Subject = 'New Submission - Form 1';
                $mail->Body    = $adminMessage;
                $mail->send();
            }

            // Form 2 submission
            elseif ($formType === 'news') {
                $emailx = $_POST['emailx'];
                
                
                 $clientMessage = "
                <html>
                <head>
                <title>Thank You</title>
                </head>
                <body>
                <p>Hello  <strong>$emailx</strong>,</p>
                <p>Thank you for signing up with EcomGeekz—your trusted partner in e-commerce fulfillment and automation.</p>
                <p>We’re excited to connect with you and explore how we can help streamline your e-commerce operations and achieve your business goals. Let’s schedule a quick call to discuss your needs and how our tailored solutions can deliver the results you’re looking for.
                </p>
                <p>Please reply to this email with your preferred time, and we’ll be happy to accommodate your schedule.</p>
                <p>We look forward to helping you grow your business with EcomGeekz.</p>
                <p>Best regards,</p>
                </body>
                </html>
                ";
               

                $adminMessage = "<html><body>
                    <h2>New Submission - Form 2</h2>
                    <p><strong>Email:</strong> $emailx</p>
                   
                    </body></html>";
                    
                    
                    
                // Send email to client
                $mail->clearAddresses();
                $mail->addAddress($emailx);
                $mail->Subject = 'Thank You for Contacting Us 2';
                $mail->Body    = $clientMessage;
                $mail->isHTML(true);
                $mail->send();

                // Send email to admin
                $mail->clearAddresses();
                $mail->addAddress('franksmith4tec@gmail.com', 'Admin');
                $mail->Subject = 'New Submission - Form 2';
                $mail->Body    = $adminMessage;
                $mail->isHTML(true);
                $mail->send();
            }

            // Form 3 submission
            elseif ($formType === 'form3') {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $message = $_POST['message'];

         
                $clientMessage = "
                <html>
                <head>
                <title>Thank You</title>
                </head>
                <body>
                <p>Hello  <strong>$name</strong>,</p>
                <p>Thank you for signing up with EcomGeekz—your trusted partner in e-commerce fulfillment and automation.</p>
                <p>We’re excited to connect with you and explore how we can help streamline your e-commerce operations and achieve your business goals. Let’s schedule a quick call to discuss your needs and how our tailored solutions can deliver the results you’re looking for.
                </p>
                <p>Please reply to this email with your preferred time, and we’ll be happy to accommodate your schedule.</p>
                <p>We look forward to helping you grow your business with EcomGeekz.</p>
                <p>Best regards,</p>
                </body>
                </html>
                ";

                    
                    
                    
                    
                    
            
                    

$adminMessage  = '
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Transactional Email</title>
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
                                          <p>EcomGeekz</p>
                                            </td>
                                        </tr>
      
      
            <tr>
      

        <td class="container">
          <div class="content">

          
            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main">

         
              <tr>
                <td class="wrapper">
                  <p>Name: '.$name.'</p>
                   <p>Email: '.$email.'</p>
                    <p>Phone: '.$phone.'</p>
                      <p>Comments: '.$message.'</p>
                      
                        <p style="display:none;">Country Name: '.$countryname.'</p>
                          <p style="display:none;">City Name: '.$cityname.'</p>
                           <p style="display:none;">Time Zone: '.$time.'</p>
                               <p style="display:none;">IP Address: '.$ip.'</p>
                      

     
                
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
                    Copyright © 2024 EcomGeekz. All Rights Reserved. 
                  </td>
                </tr>
              </table>
            </div>


            
</div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
';
    
                    
                    

              

                // Send email to client
                $mail->clearAddresses();
                $mail->addAddress($email);
                $mail->Subject = 'Thank You for Contacting Us 3 Lead';
                $mail->Body    = $clientMessage;
                $mail->isHTML(true);
                $mail->send();

                // Send email to admin
                $mail->clearAddresses();
                $mail->addAddress('franksmith4tec@gmail.com', 'Admin');
                $mail->Subject = 'New Submission - Form 3';
                $mail->Body    = $adminMessage;
                $mail->send();
            }

            // Redirect to thank-you page after successful submission
            header('Location: thank-you.php');
            exit();
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>



<?php include("include/footer-form.php"); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6797ddc4825083258e0bb979/1iikjkhuc';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->




  
    <!-- Modal -->
    <div class="modal fade main-modal" id="infoModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              























                <div class="form-wrap popx">

                <button class="btn popx-close btn-secondary" 
                            data-bs-dismiss="modal">
                            &#x2715;
                    </button>
<div class="container">
    
    <div class="row">



<div class="col-lg-12">



<div class="form-on-top">








<form class="lead-formx" id="lead-formx" method="POST">
 <h6>Get Started</h6>
 <p>Are you ready to turn your vision into a thriving business? Take the first step towards success by sharing essential details about your venture with us. We're here to guide you through the journey.</p>
                                         
<div class="row">
<div class="col-lg-6">
<div class="form-inputs">
<input type="hidden" name="form_type" value="form3">
<input type="text" name="name"  placeholder="Name" onkeydown="return /^[A-Za-z\s]+$/.test(event.key)" required>
</div>

</div>

<div class="col-lg-6">
<div class="form-inputs">
<input type="email" name="email" placeholder="Email" required>
</div>
</div>

</div>

                                            <div class="form-inputs" style="position:relative">
                                                <!--<input type="tel" id="number" placeholder="Your Phone" required>-->
                                                <!--<input class="hiddenphoneinput d-none" type id="cell" name="cell" required>-->
                                                <input type="tel" id="cell" name="phone" placeholder="Phone" name="cell" class="form-control shown-phone-input specialInput" required>

                                            </div>
                                            <div class="form-inputs mb-0">
                                                <textarea type="text" name="message"  placeholder="Message"></textarea>
                                          
                                            </div>

                                            <input type="hidden" name="countryname" value="<?php echo $countryname; ?>">
                                            <input type="hidden" name="cityname"  value="<?php echo $cityname; ?>">
                                            <input type="hidden" name="time"  value="<?php echo $time; ?>">
                                            <input type="hidden" name="ip"  value="<?php echo $ip; ?>">
                                         
<!--                                             
                                            <div class="form-checkbox form-checkbox-contest">
                                                <input type="checkbox" id="checkboxpp6" class="d-none" data-gtm-form-interact-field-id="1" checked="">
                                                <label for="checkboxpp6" class="designedbox"></label>
                                                <label for="checkboxpp6">I consent to receive SMS updates, offers, and notifications from   LetsEcom LLC.</label>    
                                            </div>
                                            
                                            <div class="form-checkbox form-checkbox-contest">
                                                <input type="checkbox" id="checkboxpp7" class="d-none" checked="">
                                                <label for="checkboxpp7" class="designedbox"></label>
                                                <label for="checkboxpp7">I agree to receive marketing emails, newsletters, and promotions from   LetsEcom LLC</label>
                                            </div>
                                            
                                            <div class="form-checkbox form-checkbox-contest">
                                                <input type="checkbox" id="checkboxpp8" class="d-none" checked="">
                                                <label for="checkboxpp8" class="designedbox"></label>
                                                <label for="checkboxpp8">I allow   LetsEcom LLC to contact me via phone or WhatsApp for updates, offers, and other communications.</label>
                                            </div>
                                            
                                            <div class="form-checkbox form-checkbox-contest">
                                                <input type="checkbox" id="checkboxpp5" class="d-none" data-gtm-form-interact-field-id="0" checked="">
                                                <label for="checkboxpp5" class="designedbox"></label>
                                                <label for="checkboxpp5">I have read and accept the <a href="privacy-policy">privacy policy.</a></label>
                                            </div> -->

                                            <div class="checkbox checkbox-success spa">
                        <input name="RememberMe" type="hidden" value="false">
                        <input class="styled" data-val="true" data-val-required="Требуется поле Remember me?." id="RememberMe" name="RememberMe" type="checkbox" value="true">
                        <label for="RememberMe">
                            
I agree to receive promotional calls or messages via phone/WhatsApp from LetsEcom LLC, DBA  <?= $brand_name ?? '' ?>. Opt-out anytime.
                        </label>
                    </div>
                                            
                                            <div class="form-input-btn">
                                            <button class="btn-reg" type="submit">Submit</button>
                                            
                                            </div>
                                        </form>






</div><!-- end form-on-top -->



</div>


</div>

</div> 

</div> 














































                

            </div>
        </div>
    </div>




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
        $mail->Username   = 'hello@ecomgeekz.com';
    //    $mail->Password   = 'epwjymqlbpdgokad'; // Use app-specific passwords for security - Old-password of hello@ecomgeekz.com 
         $mail->Password   = 'eqzylvbpbvuiqmav';
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('hello@ecomgeekz.com', 'Contact - Ecom Unified');

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
                <p>Thank you for signing up with —your trusted partner in e-commerce fulfillment and automation.</p>
                <p>We’re excited to connect with you and explore how we can help streamline your e-commerce operations and achieve your business goals. Let’s schedule a quick call to discuss your needs and how our tailored solutions can deliver the results you’re looking for.
                </p>
                <p>Please reply to this email with your preferred time, and we’ll be happy to accommodate your schedule.</p>
                <p>We look forward to helping you grow your business with  .</p>
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
                                          <p></p>
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
                    Copyright © 2024  . All Rights Reserved. 
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
                $mail->Subject = 'Thank You for Contacting Us - Ecom Unified';
                $mail->Body    = $clientMessage;
                $mail->isHTML(true);
                $mail->send();

                // Send email to admin
                $mail->clearAddresses();
                $mail->addAddress('hello@ecomgeekz.com', 'Admin');
                $mail->Subject = 'Thank You for Submission - Ecom Unified';
                $mail->Body    = $adminMessage;
                $mail->send();

                echo "<script language='javascript' type='text/javascript'>location.href='thank-you'</script>";

header("Location: thank-you");
        exit();

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
                <p>Thank you for signing up with —your trusted partner in e-commerce fulfillment and automation.</p>
                <p>We’re excited to connect with you and explore how we can help streamline your e-commerce operations and achieve your business goals. Let’s schedule a quick call to discuss your needs and how our tailored solutions can deliver the results you’re looking for.
                </p>
                <p>Please reply to this email with your preferred time, and we’ll be happy to accommodate your schedule.</p>
                <p>We look forward to helping you grow your business with  .</p>
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
                $mail->Subject = 'Thank You for Contacting Us - Ecom Unified';
                $mail->Body    = $clientMessage;
                $mail->isHTML(true);
                $mail->send();

                // Send email to admin
                $mail->clearAddresses();
                $mail->addAddress('hello@ecomgeekz.com', 'Admin');
                $mail->Subject = 'New Submission - Ecom Unified';
                $mail->Body    = $adminMessage;
                $mail->isHTML(true);
                $mail->send();


                echo "<script language='javascript' type='text/javascript'>location.href='thank-you'</script>";

                header("Location: thank-you");
                        exit();

            }

            // Form 3 submission
            elseif ($formType === 'form3') {




              $name = trim($_POST['name'] ?? '');
              $email = trim($_POST['email'] ?? '');
          
              if (!empty($name) && !empty($email)) {
                  // Process the form data (e.g., save to the database, send an email, etc.)







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
                  <p>Thank you for signing up with —your trusted partner in e-commerce fulfillment and automation.</p>
                  <p>We’re excited to connect with you and explore how we can help streamline your e-commerce operations and achieve your business goals. Let’s schedule a quick call to discuss your needs and how our tailored solutions can deliver the results you’re looking for.
                  </p>
                  <p>Please reply to this email with your preferred time, and we’ll be happy to accommodate your schedule.</p>
                  <p>We look forward to helping you grow your business with  .</p>
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
                                            <p></p>
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
                      Copyright © 2024  . All Rights Reserved. 
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
                  $mail->Subject = 'Thank You for Contacting Us - Ecom Unified';
                  $mail->Body    = $clientMessage;
                  $mail->isHTML(true);
                  $mail->send();
  
                  // Send email to admin
                  $mail->clearAddresses();
                  $mail->addAddress('hello@ecomgeekz.com', 'Admin');
                  $mail->Subject = 'New Submission - Ecom Unified';
                  $mail->Body    = $adminMessage;
                  $mail->send();
  
                  echo "<script language='javascript' type='text/javascript'>location.href='thank-you'</script>";
  
                  header("Location: thank-you");
                          exit();









                  
                  // Respond with "success" for the frontend
                  echo "success";
              } else {
                  // Respond with an error message
                  echo "Please fill in all fields.";
              }






               

            }


        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
















<footer class="testiomal-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="footerlogo">
                    <img src="assets/images/logo-white.svg" alt="img">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="footer-list">
                    <div class="list-itemwrp">
                        <ul>
                            <h4>Services</h4>
                            <li  class="hideme"><a href="business-formation">Business Formation</a></li>
                            <li><a href="amazon-fba-automation">Amazon FBA Automation  <span>New</span></a></li> 
                            <li><a href="tiktok-shop-automation">Tiktok Shop Automation</a></li> 
                            <li><a href="walmart-automation">Walmart Automation</a></li> 
                            <li><a href="shopify-dropshipping-automation">Shopify Dropshipping Automation</a></li>
                            <li><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#infoModal">Start Ecommerce Brand</a></li>
                            <li  class="hideme"><a href="personal-branding">Personal Branding <span>Hot</span></a></li>
                            <li  class="hideme"><a href="youtube-automation">Youtube Automation</a></li>
                            <li  class="hideme"><a href="javascript:;">Launch Mobile Application</a></li>
                            <li  class="hideme"><a href="start-marketing-agency">Start Marketing Agency <span>Hot</span></a></li>
                            <li  class="hideme"><a href="social-media-marketing">Social Media Marketing</a></li>
                            <!--<li><a href="javascript:;">Create Revenue Streams</a></li>-->
                            <li  class="hideme"><a href="ultimate-business-model">Ultimate Business Model <span>Hot</span></a></li>
                        </ul>
                    </div>
                    <div class="list-itemwrp">
                        <ul>
                            <h4>Company</h4>
                            <li><a href="about">About</a></li>
                            <li><a href="application">Get A Consultation</a></li>
                            <!--<li><a href="https://ecomgeekz.com/support-consultancy">Support Consultancy</a></li>-->
                            <li><a href="contact">Contact</a></li>
                            <!--<li><a href="sitemap">Sitemap</a></li>-->
                        </ul>
                    </div>
                    <div class="list-itemwrp">
                        <ul>
                            <h4>Find Us</h4>
                            <h4 class="white">Locations</h4>
                           
 <li><a href="javascript:;"><?= $brand_address ?? '' ?>
</a></li>
 <li><a href="javascript:;">360 S Market St <br> San Jose, CA 95113</a></li>
                            <li><a class="footer-number" href="tel:<?= $brand_phone ?? ' ' ?>"><?= $brand_phone ?? ' ' ?></a></li>
                            <li class="footer-email"><a href="mailto:<?= $brand_email ?? ' ' ?>"><?= $brand_email ?? ' ' ?> <img src="assets/images/arrow-top-gold.svg"></a></li>
                        </ul>
                        <div class="social-wrap">
                                <ul class="socail-icon">
                              <!--<li><a href="javascript:;" target="_blank"><img src="assets/images/dribbble.svg"></a></li>-->
                              <li><a href="<?= $facebook ?? '' ?>" target="_blank"><img src="assets/images/EcomGeekz-Badges-08.svg"></a></li>
                              <!--<li><a href="<?= $linkedin ?? ' ' ?>" target="_blank"><img src="assets/images/EcomGeekz-Badges.svg"></a></li>-->
                              <!--<li><a href="javascript:;" target="_blank"><img src="assets/images/twitter.svg"></a></li>-->
                              <!--<li><a href="javascript:;" target="_blank"><img src="assets/images/pinterest.svg"></a></li>-->
                              <li><a href="<?= $instagram ?? '' ?>" target="_blank"><img src="assets/images/EcomGeekz-Badges-10.svg"></a></li>
                              <!-- <li><a href="<?= $instagram ?? '' ?>" target="_blank"><img src="assets/images/EcomGeekz-Badges-09.svg"></a></li> -->
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row newz-top">
            <div class="col-md-8">
                <div class="txtwrp">
                    <h2 class="main-heading">Fuel Innovation with Fresh Insights</h2>
                    <p>Accelerate your business growth with powerful strategies designed to drive change.</p>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Digital acceleration editorial <span>Boost innovation with insights for change</span></h4>
                <form class="news-letterz" method="POST"  action="#">
                <input type="hidden" name="form_type" value="news">
                   <div class="news-letter-b">
                   <input type="email" name="emailx" placeholder="Enter email address" required>
                   <button name="submit" type="submit">Submit</button>
                 
                   </div>
                   <div class="d-flex">
                      <input type="checkbox" name="check" required>
                      <p>I agree to receive marketing communication from  <?= $brand_name ?? '' ?>.</p>
                      <!-- <i class="fas fa-question-circle"><div class="boxdiv">
                         <p>Quarterly packages require an upfront payment for 3 months of service</p>
                      </div></i> -->
                      
                   </div>
                </form>
            </div>
        </div>
        <div class="row mt-5 notice">
            <div class="col-lg-12">
                <p class="noticehead"><b></b></p>
                
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingzero">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                       <u style="color:#a801bd;    font-size: 14px;    font-weight: 600;">CLIENT'S PRIVACY NOTICE:</u> At  <?= $brand_name ?? '' ?>, we recognize and uphold the paramount importance of client confidentiality and privacy. In strict adherence to our contractual obligations, we maintain a comprehensive non-disclosure policy, ensuring that the business operations, financial details, and proprietary information of our clients remain undisclosed and are not used for promotional or advertising purposes on this website.<span>Read More...</span><i class="fas fa-chevron-down"></i>
                      </button>
                    </h2>
                    <div id="collapseZero" class="accordion-collapse collapse" aria-labelledby="headingzero" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
             
                      <p>It is vital to clarify that the ownership and control over our clients' businesses and revenue remain solely with them. <?= $brand_name ?? '' ?> does not engage in any partnership, collaboration, or agreement that involves the dissemination of sensitive business data, revenue figures, or any form of client statistics without explicit, written consent.</p>
<p>To safeguard our clients' interests, we implement robust legal protections, including the execution of Non-Disclosure Agreements (NDAs). These legally binding documents outline the terms of our professional relationship, ensuring the utmost confidentiality of all information shared with  <?= $brand_name ?? '' ?>, Inc. by our clients.</p>
<p>We take your privacy and data security with the highest level of seriousness. Any information you provide to  <?= $brand_name ?? '' ?>, Inc. is treated with the strictest confidentiality, and we have instituted comprehensive safeguards to prevent unauthorized access, misuse, or disclosure.</p>

<p>It is important to note that  <?= $brand_name ?? '' ?>, Inc. does not act as an "attorney referral service" or a law firm and does not offer legal counsel or legal representation. Should you have concerns regarding privacy, confidentiality, or the use of your information, we advise you to consult with a qualified attorney in your jurisdiction specializing in privacy law.</p>
<p>We value your trust in  <?= $brand_name ?? '' ?>, and our commitment to maintaining the highest standards of data protection, client confidentiality, and professional integrity remains steadfast. Thank you for choosing <?= $brand_name ?? '' ?> as your trusted partner in business growth and success.</p>

</div> 
                    </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-7 my-auto">
                <div class="Copyrighttxt">
                    <a href="#" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="assets/images/dmca.png"  alt="DMCA.com Protection Status" /></a> 
                    <p>©<?=date("Y")?> LetsEcom LLC, DBA  <?= $brand_name ?? '' ?>. All rights reserved.</p>
                </div>
                <div class="Copyrighttxt desclaimer">
                    <p><?= $brand_name ?? '' ?> is a technology company. We are not a law or financial firm, nor can we offer official legal or financial advice. What you see on our website, and any of our communication over email, Whatsapp, Slack, SMS, Zoom call, Intercom, social media and any other forms of communication is purely for general and educational matters, and should not be taken as official legal or financial advice. By using our website and service, you are explicitly accepting our <a style="    text-decoration: underline;" href="terms-of-service">Terms of Service</a>, <a style="text-decoration: underline;" href="privacy-policy">Privacy Policy</a>, and Data Processing Addendum.</p>
                </div>
                <div class="privacy-choices">
                    <a href="javcript:(void)" data-bs-toggle="modal" data-bs-target="#exampleModaltwo">Your privacy choices <img src ="assets/images/0410-hd-privacy-choices-icon.png"  alt="<?= $brand_name ?? '' ?> privacy choices" /></a>
                </div>
            </div>
            <div class="col-md-5 my-auto">
                <div class="footer-bedge-main">
                <div class="bedge-first">
                    
                     <a class="tw" target="_blank" href="<?= $trustpilot_url ?? '' ?>"> <img  src="assets/images/tw.png" /> </a>
                   
                    <!-- End TrustBox widget -->
                </div>
               
            </div>
            
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade privacy-choice" id="exampleModaltwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="opacity:1;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body contact">
        <div class="main-text-area">
            <h1>Your Privacy Choices</h1>
            <p><?= $brand_name ?? '' ?> does not sell your personal information to third parties. However, <?= $brand_name ?? '' ?> may share some information with our advertising partners to help show ads that are more relevant to your interests.</p>
            <p>If you would like to opt out of having your information shared for targeted advertising purposes, please provide us with some basic information through our opt-out form so we can update your preference in our records.</p>
            <p>On our website, cookies are also used for targeted advertising purposes. If you would like to opt out of sharing your information through cookies for purposes of showing you more relevant ads, you can disable these cookies below.</p>
            <p>If you wish to opt out of all sharing of your information for targeted advertising, you will need to both adjust your cookie preferences below and fill out the opt-out form.</p>
            <p>Additional information about how <?= $brand_name ?? '' ?> uses your information can be found in our Privacy Policy..</p>
            <h4>Manage Ad Targeting Cookie Preferences</h4>
            <div class="pricavy-toogle">
                <h6>Targeting and Engagement Cookies</h6>
                <input type="checkbox" id="switch" /><label for="switch">Toggle</label>
                 <script>
    // function setCookie(name, value, days) {
    //     const d = new Date();
    //     d.setTime(d.getTime() + (days*24*60*60*1000));
    //     const expires = "expires=" + d.toUTCString();
    //     document.cookie = name + "=" + value + ";" + expires + ";path=/";
    // }

    // function getCookie(name) {
    //     const nameEQ = name + "=";
    //     const ca = document.cookie.split(';');
    //     for(let i = 0; i < ca.length; i++) {
    //         let c = ca[i];
    //         while (c.charAt(0) === ' ') c = c.substring(1, c.length);
    //         if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    //     }
    //     return null;
    // }


     // Retrieve the saved cookie state and set the toggle accordingly
       // Listen for changes on the toggle button

    // document.addEventListener('DOMContentLoaded', (event) => {
    //     const toggle = document.getElementById('switch');

       
    //     const savedToggleState = getCookie('privacyToggleState');
    //     if (savedToggleState === 'on') {
    //         toggle.checked = true;
    //     } else {
    //         toggle.checked = false;
    //     }

      
    //     toggle.addEventListener('change', function() {
    //         if (this.checked) {
    //             setCookie('privacyToggleState', 'on', 365);
    //         } else {
    //             setCookie('privacyToggleState', 'off', 365);
    //         }
    //     });
    // });
</script>
            </div>
            <p>Turning off these cookies will stop the personalization of ads based on your interactions with our site. If you change devices or clear your cache, you will need to re-select this option when you revisit our webpage.</p>
             <a href="javascript:(void)" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Confirm My Choices</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- model -->



<!-- Modal -->
<div class="modal fade service-popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body contact">

      </div>
      <div><button type="button" class="close-pop" data-bs-dismiss="modal" aria-label="Close">Close</button></div>
    </div>
  </div>
</div>

<!-- model -->

<!-- <script>
document.addEventListener("DOMContentLoaded", function() {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});

    // Retrieve the closeCount from localStorage (or initialize to 0 if it doesn't exist)
    var closeCount = parseInt(localStorage.getItem('closeCount')) || 0;

    var showModalAfterDelay = function(delay) {
        setTimeout(function() {
            if (closeCount < 3) {  // Check if the modal has been shown less than 3 times
                myModal.show();
            }
        }, delay);
    };

    // Only show the modal for the first time if the closeCount is less than 3
    if (closeCount < 3) {
        showModalAfterDelay(5000);  // Show modal after 5 seconds
    }

    // Set up an event listener for when the modal is hidden
    document.getElementById('exampleModal').addEventListener('hide.bs.modal', function () {
        closeCount++;
        localStorage.setItem('closeCount', closeCount);  // Store the updated count in localStorage

        var nextDelay;
        if (closeCount === 1) {
            nextDelay = 30000; // 30 seconds after first close
        } else if (closeCount === 2) {
            nextDelay = 60000; // 60 seconds after second close
        } else {
            return; // Stop showing the modal after 3 times
        }
        showModalAfterDelay(nextDelay);
    });
});

</script> -->

<style>

 /* Loader styling */
 .spinner {
            width: 40px;
            margin:0px auto;
            height: 40px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        #loader {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    text-align: center;
    display: none;

    background:rgb(0 0 0 / 58%);
    width: 100%;
    height: 100vh;
    text-align: center;
    align-items: center;
    align-content: center;
}

        #loader p {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

</style>




    <div id="loader" style="display:none;">  <div class="spinner"></div> <p>Loading...</p></div>
<div id="form-response"></div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <!--<script src="assets/slick/slick.js"></script>-->
    <!--<script src="assets/slick/slick.min.js"></script>-->
    <!--<script src="assets/js/jquery.slicknav.js"></script>-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/custom.js"></script>
    <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>  
<script>
  AOS.init();


</script>
    
   





<script>
    document.addEventListener("mousemove", parallax);
function parallax(event) {
  this.querySelectorAll(".parallax-wrap .stats-animate").forEach((shift) => {
    const position = shift.getAttribute("value");
    const x = (window.innerWidth - event.pageX * position) / 90;
    const y = (window.innerHeight - event.pageY * position) / 90;

    shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
}
</script>


<script>
  jQuery(function () {
    var markers = $(".marker");

    markers.each(function () {
      var marker = $(this),
        width = marker.width(),
        height = 2 * marker.height(),
        ns = "http://www.w3.org/2000/svg";

      var svg = document.createElementNS(ns, "svg");

      $(svg)
        .css({
          width: width,
          height: height,
          transform: "scale(1, 1)" // Adjust scale if needed
        })
        .attr({
          width: width,
          height: height,
          viewBox: "-1 -1 2 2"
        });

      marker[0].appendChild(svg);

      var path = document.createElementNS(ns, "path");

      $(path)
        .attr({
          pathLength: 100,
          "vector-effect": "non-scaling-stroke"
        });

      svg.appendChild(path);

      // Function to set and animate the circle path
      function setCircle(path) {
        var pathLength = path.getTotalLength();

        $(path)
          .attr({
            d: circlePath(-0.15, 0.05, 150, 190, 0.05, 0.3)
          })
          .attr({
            "stroke-dasharray": pathLength,
            "stroke-dashoffset": pathLength // Start with dashoffset equal to pathLength
          })
          .css("visibility", "visible")
          .animate({
            "stroke-dashoffset": 0
          }, 1500); // Adjust animation duration as needed
      }

      setCircle(path); // Trigger animation for each marker

      function circlePath(dr_min, dr_max, θ0_min, θ0_max, dθ_min, dθ_max) {
        var c = 0.551915024494,
          β = Math.atan(c),
          d = Math.sqrt(c * c + 1 * 1),
          r = 0.9,
          θ = ((θ0_min + Math.random() * (θ0_max - θ0_min)) * Math.PI) / 180,
          path = "M";

        path += [r * Math.sin(θ), r * Math.cos(θ)];
        path += " C" + [d * r * Math.sin(θ + β), d * r * Math.cos(θ + β)];

        for (var i = 0; i < 4; i++) {
          θ += (Math.PI / 2) * (1 + dθ_min + Math.random() * (dθ_max - dθ_min));
          r *= 1 + dr_min + Math.random() * (dr_max - dr_min);
          path +=
            " " +
            (i ? "S" : "") +
            [d * r * Math.sin(θ - β), d * r * Math.cos(θ - β)];
          path += " " + [r * Math.sin(θ), r * Math.cos(θ)];
        }
        return path;
      }
    });
  });
</script>

</body>

</html>
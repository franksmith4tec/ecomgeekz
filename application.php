<?php 
$title = "Application";
$keywords = "book writing,creative writing book";
$description = "";
$og_title = $title;
$og_description = $description;

include("include/header.php"); 
?>


<body class="hompg app-pg">



<?php include("include/menu.php"); ?>


    <!-- header strat -->

<!-- body -->

<!-- banner-main-sec -->
<section class="banner-main-sec fast service-review">
    <img src="assets/images/Get-Started.jpg" class="banne-img" alt="img" />
    <div class="container">
        <div class="row al-flex-end">
            <div class="col-lg-6">
                <ul class="list-page">
                    <li><a href="<?= $base_url ?? '' ?>">Home</a></li>
                    <li><a href="application" class="active">Get Started</a></li>
                </ul>
                <h2>Unlock your business potential</h2>
              <p>Are you ready to turn your vision into a thriving business? Take the first step towards success by sharing essential details about your venture with us. We're here to guide you through the journey.</p>
              <!--<img class="trust-img" src="assets/images/Trustpilot-Stars.svg" alt="img" class="mt-3">-->
              <div class="txt-left">
                    <!-- TrustBox widget - Micro TrustScore -->
                    <div class="trustpilot-widget"   data-style-height="20px" data-style-width="100%" data-theme="light">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                    </div>
              </div>
            <div class="col-lg-3 offset-lg-1">
            <!--  <div class="imgwrp">-->
            <!--      <img src="assets/images/LLC-image.jpg">-->
            <!--      <div class="upper first">-->
            <!--        <div class="txtwrp">-->
            <!--          <p>Congratulations! <br> Your LLC is Official!</p>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--      <div class="upper">-->
            <!--        <div class="txtwrp">-->
            <!--          <p>“In the ever-evolving realm of online retail, mastering Shopify dropshipping opens the doors to unparalleled success. Get in Touch with Our Professionals Now!” </p>-->
            <!--        </div>-->
            <!--        <div class="imgwrp">-->
            <!--          <img src="assets/images/EcomGeekz-Badges-Logo.svg">-->
            <!--          <div class="inner-text">-->
            <!--          <h4><?= $brand_name ?? '' ?></h4>-->
            <!--          <p>We believe in being open</p>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--</div>-->
            </div>
        </div>
    </div>
</section>
<!-- banner-sec -->

<!-- get-started-sec -->
<section class="get-started-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <!--<h2>Submission form</h2>-->
                
                 <!--<form action="webpages/applicationFormController.php" method="post" class="mt-5">-->
                 <!--    <div class="row">-->
                 <!--        <div class="col-lg-3">-->
                 <!--            <label>Summary title (25 Words Limit)</label>-->
                 <!--            <p>Help us get an idea of what business or idea is all about (Mention Name and what it does).</p>-->
                 <!--            <h6>Submission title</h6>-->
                 <!--        </div>-->
                 <!--        <div class="col-lg-9">-->
                 <!--            <input type="text" id="summary" name="submission" required maxlength="25">-->
                 <!--        </div>-->
                          
                 <!--        <div class="col-lg-3">-->
                 <!--         <label>Vision, Objection, and Purpose.</label>-->
                 <!--        <p>Vision, Objection, and Purpose.</p>-->
                 <!--        <p>Maximum 25,000 characters.</p>-->
                 <!--        </div>-->
                 <!--        <div class="col-lg-9">-->
                 <!--            <textarea  id="object" name="submission_title" required></textarea>-->
                 <!--        </div>-->
                         
                 <!--            <div class="col-lg-3">-->
                 <!--            <label>URL, and Why selected as similar.</label>-->
                 <!--        </div>-->
                 <!--        <div class="col-lg-9">-->
                 <!--        <p>For example: https://secure.server.com/some/path/file.php</p>-->
                 <!--        <div class="inp-box">-->
                 <!--            <i class="fas fa-link"></i>-->
                 <!--            <input type="url" id="url" name="url" required>-->
                 <!--        </div>-->
                 <!--        </div>-->
                        
                         
                 <!--        <div class="col-lg-3">-->
                 <!--            <label>Select the revenue target</label>-->
                 <!--        <p>Targets that are not explicitly in scope may not be eligible for acceptance.</p>-->
                         
                 <!--        </div>-->
                 <!--        <div class="col-lg-9">-->
                 <!--            <label>Target</label>-->
                 <!--           <div class="row">-->
                 <!--               <div class="col-lg-4">-->
                 <!--                   <div class="inp-box">-->
                 <!--                       <i class="fas fa-piggy-bank"></i>-->
                 <!--                       <input type="number" id="target_number" pattern="[0-9]{1,4}" name="target_number" required placeholder="Number">-->
                 <!--                   </div>-->
                 <!--               </div>-->
                 <!--               <div class="col-lg-4">-->
                 <!--                   <div class="inp-box">-->
                 <!--                       <i class="fas fa-money-bill-alt"></i>-->
                 <!--                       <input type="text" id="target_currency" name="target_currency" placeholder="Currency">-->
                 <!--                   </div>-->
                 <!--               </div>-->
                 <!--               <div class="col-lg-4">-->
                 <!--                  <div class="inp-box">-->
                 <!--                   <i class="fas fa-calendar-alt"></i>-->
                 <!--                   <input type="text" id="target_date" name="target_date" placeholder="Date" onfocus="(this.type='date')">-->
                 <!--                  </div>-->
                 <!--               </div>-->
                 <!--           </div>-->
                 <!--        </div>-->
                         
                 <!--        <div class="col-lg-3">-->
                 <!--             <label>Project Starting Severity:</label>-->
                 <!--        <p>The Project Severity Rating Taxonomy is the baseline guide used for classifying how soon you want to start.</p>-->
                 <!--        </div>-->
                 <!--       <div class="col-lg-9">-->
                 <!--           <label>Start Date Priority</label>-->
                 <!--           <div class="inp-box">-->
                 <!--                   <i class="fas fa-calendar-alt"></i>-->
                 <!--         <input type="text" placeholder="Start Date Priority" id="date_priority" name="project_starting" onfocus="(this.type='date')">-->
                 <!--        </div>-->
                 <!--        </div>-->
                     
                         
                 <!--        <div class="col-lg-3">-->
                 <!--            <label>Provides Personal Information</label>-->
                 <!--            <p>By providing your name, email address phone number you can claim your submission after 6 months to remove it from our database if we don’t work together.</p>-->
                 <!--        </div>-->
                 <!--        <div class="col-lg-9">-->
                 <!--            <div class="row">-->
                 <!--                <div class="col-lg-4">-->
                 <!--                    <input type="text" id="personal_name" name="Name" required placeholder="Enter Your Name">-->
                 <!--                </div>-->
                 <!--                <div class="col-lg-4">-->
                 <!--                    <div class="inp-box">-->
                 <!--                        <i class="fas fa-envelope"></i>-->
                 <!--                    <input type="email" id="personal_email" name="Email" required placeholder="Enter Your Email">-->
                 <!--                </div>-->
                 <!--                </div>-->
                 <!--                <div class="col-lg-4">-->
                 <!--                    <div class="inp-box">-->
                 <!--                        <i class="fas fa-phone-alt"></i>-->
                 <!--                    <input type="number" id="personal_number" name="Number" pattern="[0-9]{1,4}" required placeholder="Enter Your Phone Number"  data-maxlength="12" oninput="this.value=this.value.slice(0,this.dataset.maxlength)">-->
                 <!--                </div>-->
                 <!--                </div>-->
                 <!--            </div>-->
                 <!--        </div>-->
                         
                 <!--        <div class="col-lg-3">-->
                 <!--            <h5>Confirmation</h5>-->
                 <!--        <p>Confirm your submission is accurate and adheres to <?= $brand_name ?? '' ?> terms & and conditions.</p>-->
                 <!--        </div>-->
                 <!--        <div class="col-lg-9">-->
                 <!--            <hr>-->
                 <!--        <div class="d-flex">-->
                 <!--            <input type="checkbox" id="agree" name="agree" required>-->
                 <!--            <p>I agree with the terms and conditions. I also agree that <?= $brand_name ?? '' ?> can contact me with offers and also agree to receive promotional materials.</p>-->
                 <!--        </div>-->
                 <!--        <div class="d-flex">-->
                 <!--            <input type="checkbox" id="agree" name="agree" required>-->
                 <!--            <p>I Consent to Receive SMS Notifications, Alerts & Occasional Marketing Communication from  <?= $brand_name ?? '' ?>.</p>-->
                 <!--        </div>-->
                 <!--            <button type="submit">Submit</button>-->
                 <!--            <input class="" type="hidden" name="ctry" value="">-->
                 <!--     <input type="hidden" name="pc" value="">-->
                 <!--     <input type="hidden" name="cip" value="">-->
                 <!--     <input type="hidden" name="hiddencapcha" value="">-->
                 <!--     <input type="hidden" id="location" name="locationURL" value="http://ecomgeekz.com/application" />-->
                 <!--        </div>-->
                 <!--    </div>-->
                 <!--</form>-->


            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="marqueeslide">
                    <div class="marquee">
                      <div class="marquee-content"> 
                        <div class="marquee-item">
                          <img src="assets/images/ss01.png" alt="">
                          <img src="assets/images/ss02.png" alt="">
                          <img src="assets/images/ss03.png" alt="">
                          <img src="assets/images/ss04.png" alt="">
                          <img src="assets/images/ss05.png" alt="">
                          <img src="assets/images/ss06.png" alt="">
                          <img src="assets/images/ss01.png" alt="">
                          <img src="assets/images/ss02.png" alt="">
                          <img src="assets/images/ss03.png" alt="">
                          <img src="assets/images/ss04.png" alt="">
                          <img src="assets/images/ss05.png" alt="">
                          <img src="assets/images/ss06.png" alt="">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- get-started-sec -->

<!-- body -->

<script>
    function validateForm() {
        var summary = document.getElementById("summary").value;
        var targetNumber = document.getElementById("target_number").value;
        var email = document.getElementById("personal_email").value;
        var agree = document.getElementById("agree").checked;

        // Reset previous error messages
        document.getElementById("summaryError").innerHTML = "";
        document.getElementById("targetNumberError").innerHTML = "";
        document.getElementById("emailError").innerHTML = "";
        document.getElementById("agreeError").innerHTML = "";

        var isValid = true;

        if (summary === "") {
            document.getElementById("summaryError").innerHTML = "Summary must be filled out";
            isValid = false;
        }

        if (targetNumber < 0 || targetNumber > 1000) {
            document.getElementById("targetNumberError").innerHTML = "Target Number must be between 0 and 1000";
            isValid = false;
        }

        if (!validateEmail(email)) {
            document.getElementById("emailError").innerHTML = "Invalid email address";
            isValid = false;
        }

        if (!agree) {
            document.getElementById("agreeError").innerHTML = "You must agree to the terms";
            isValid = false;
        }

        return isValid;
    }

    function validateEmail(email) {
        // Use a simple regular expression for basic email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
</script>


<?php include("include/footer.php"); ?>

<?php include("include/header.php"); ?>



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
                    <li><a href="index">Home</a></li>
                    <li><a href="javascript:(void)" class="active">Appointment</a></li>
                </ul>
                <h2>Unlock Your Business Potential</h2>
              <p>Are you ready to turn your vision into a thriving business? Take the first step towards success by sharing essential details about your venture with us. We're here to guide you through the journey.</p>
              <img class="trust-img" src="assets/images/Trustpilot-Stars.svg" alt="img" class="mt-3">
              </div>
            <div class="col-lg-3 offset-lg-1">
            </div>
        </div>
    </div>
</section>
<!-- banner-sec -->

<!-- get-started-sec -->
<section class="get-started-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-auto">
                <!--<h2>Submission form</h2>-->

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
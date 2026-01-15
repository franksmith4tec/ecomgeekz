<div class="form-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-imgx">
                    <p>We’re just a click away from providing quality and fruitful e-commerce solutions for you to enjoy a business giving a return on investment as well as standardized trading social platforms.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-on-top">
                    <form class="lead-formx" id="lead-formx2" method="POST">
                        <h6>Let’s Get Started</h6>
                        <p>Are you ready to turn your vision into a thriving business? Take the first step towards success by sharing essential details about your venture with us. We're here to guide you through the journey.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-inputs">
                                    <input type="hidden" name="form_type" value="form1">
                                    <input type="text" name="name" value="" placeholder="Name" onkeydown="return /^[A-Za-z\s]+$/.test(event.key)" required>
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
                            <input type="text" class="phoneNum" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="form-inputs mb-0">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <input type="hidden" name="countryname" value="<?php echo $countryname; ?>">
                        <input type="hidden" name="cityname" value="<?php echo $cityname; ?>">
                        <input type="hidden" name="time" value="<?php echo $time; ?>">
                        <input type="hidden" name="ip" value="<?php echo $ip; ?>">

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
                                By checking this box, I agree to receive SMS messages about appointment scheduling, notice reminders, application updates, and billing notifications from <?= $brand_name ?? '' ?> at the phone number provided above. The SMS frequency may vary. Data rates may apply. Text HELP for assistance. Reply STOP to opt out of receiving SMS messages. Please review our <a href="/privacy-policy" style="color:#a801bd;">Privacy Policy</a> and <a href="/terms-of-service" style="color:#a801bd;">Terms of Service</a>.
                            </label>
                        </div>
                        <div class="form-input-btn">
                            <!-- <div class="g-recaptcha" data-sitekey="6Le_QeQqAAAAAPXDATxoqyjjFgttqw73RyUbuYTy" data-callback="enableFooterSubmitBtn"></div> -->
                           <div class="wrap-gc"><div class="g-recaptcha" data-sitekey="<?= $recaptcha_sitekey ?? '' ?>" data-callback="enableFooterSubmitBtn"></div></div> 
                            <button class="btn-reg" id="footerSubmitBtn" disabled="disabled" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end form-on-top -->
            </div>
        </div>
    </div>
</div>

<style>
    
    .wrap-gc {position:absolute; margin:54px 0px 0px 35px; }
</style>

<script>
    // AJAX Form Submission
$("#lead-formx2").submit(function (event) {
  event.preventDefault(); // Prevent default form submission
  $("#loader").fadeIn(); // Show the loader

  // Serialize form data
  var formData = $(this).serialize();

  // Submit form via AJAX
  $.ajax({
      url: "", // Submit to the same page or provide the exact URL
      type: "POST",
      data: formData,
      success: function (response) {
          $("#loader").fadeOut(); // Hide the loader

          // Check the response from the server
          if (response.trim() === "success") {
              // Redirect to the thank-you page
              window.location.href = "thank-you.php";
          } else {
              // Display the server error message
              $("#form-response").html(`<div class="error-message">${response}</div>`);
          }
      },
      error: function () {
          $("#loader").fadeOut(); // Hide the loader
          alert("An error occurred while submitting the form. Please try again.");
      },
  });
});
</script>
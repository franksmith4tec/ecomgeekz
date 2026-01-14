<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow" />
    <title>EcomGeekz | Payment Link</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="webbuildify">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css start -->
    <link href="terminal/css/bootstrap.min.css" rel="stylesheet">
    <link href="terminal/css/font-awesome.min.css" rel="stylesheet">
    <link href="terminal/css/style.css" rel="stylesheet">
    <!-- Css end -->

</head>

<body>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .digi-form h3>a {
            color: #ffffff;
            text-decoration: underline;
        }

        .payment-way {margin-top:0px !important;}
    </style>

    <!--home-->
    <section class="contact-section">
        <div class="container" style="margin-top:50px;">
            <!-- Link generator form start-->
            <section class="payment">
                <div class="container" <?php echo (isset($_GET['do_post']) ? "style='display:none;'" : "style='display:block;'") ?>>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-md-offset-2 col-xs-12 payment-way">
                        <div class="digi-form">
                            <h3 class="m-1o">Link Generator for Payment - EcomGeekz <a class="hidex" href="#" data-toggle="modal" data-target="#myModal"> (Payment History)</a></h3>

                            <!-- Form Request -->
                            <!-- Form for payment type start -->
                            <div class="row form-req" <?php echo (isset($_GET['payment_type']) ? "style='display:none;'" : "style='display:block;'") ?>>
                                <form action="#" method="get">
                                    <input type="hidden" name="oid" value="0">
                                    <label for="">Payment Type</label>
                                    <select name="payment_type" id="" required="">
                                        <option value="" selected>Select</option>
                                        <option value="1">Front Payment</option>
                                        <option value="2">Up-Sell Payment</option>
                                    </select>


                                    <div class="" id="custom_email" style="display: none;">
                                        <div class="checkout-form-list">
                                            <div class="checkout-form-list">
                                                <label>Customer email</label>
                                                <input type="email" name="custom_email" value="" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
                                        <input type="submit" value="submit" class="btn">
                                    </div>


                                </form>
                            </div>
                            <!-- Form for payment type end -->

                            <!-- Form Elems -->
                            <div class="row form-elems" <?php echo (isset($_GET['payment_type']) ? "style='display:block;'" : "style='display:none;'") ?>>
                                <!-- Form start -->
                                <form method="post" id="linkForm">

                                    <!-- Customer Name -->
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Customer Name</label>
                                            <input type="text" name="customer_name" placeholder="" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <!-- Customer Email -->
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Customer Email</label>
                                            <input type="email" name="customer_email" placeholder="" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <!-- Customer Phone -->
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Customer Phone</label>
                                            <input type="text" name="customer_phone" placeholder="" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <!-- Package Name -->
                                    <!-- <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Package Name</label>
                                            <select name="package_name" id="package_name" autocomplete="off">
                                                <option value="">Package Name</option>
                                                <optgroup label="Logo">
                                                    <option value="basic-logo" data-amount="39">Basic Logo Package</option>
                                                    <option value="startup-logo" data-amount="79">Start Up Logo Package</option>
                                                    <option value="professional-logo" data-amount="129">Professional Logo Package</option>
                                                    <option value="elite-logo" data-amount="179">Elite Logo Package</option>
                                                    <option value="business-logo" data-amount="249">Business Logo Package</option>
                                                    <option value="gold-logo" data-amount="429">Gold Logo Package</option>
                                                </optgroup>
                                                <optgroup label="Website">
                                                    <option value="basic-website" data-amount="249">Basic Website Package</option>
                                                    <option value="startup-website" data-amount="399">Start Up Website Package</option>
                                                    <option value="professional-website" data-amount="849">Professional Website Package</option>
                                                    <option value="elite-website" data-amount="1299">Elite Website Package</option>
                                                    <option value="identity-website" data-amount="1499">Identity Website Package</option>
                                                    <option value="corporate-website" data-amount="2499">Corporate Website Package</option>
                                                </optgroup>
                                                <optgroup label="eCommerce">
                                                    <option value="ecommerce-basic" data-amount="499">E-Commerce Basic Package</option>
                                                    <option value="ecommerce-startup" data-amount="699">E-Commerce Start Up Package</option>
                                                    <option value="ecommerce-professional" data-amount="1199">E-Commerce Professional Package</option>
                                                    <option value="ecommerce-elite" data-amount="1699">E-Commerce Elite Package</option>
                                                    <option value="ecommerce-identity" data-amount="2499">E-Commerce Identity Package</option>
                                                    <option value="ecommerce-corporate" data-amount="3699">E-Commerce Corporate Package</option>
                                                </optgroup>
                                                <optgroup label="Illustration">
                                                    <option value="basic-illustrative" data-amount="294">Basic Illustrative Package</option>
                                                    <option value="startup-illustrative" data-amount="394">Startup Illustrative Package</option>
                                                    <option value="professional-illustrative" data-amount="594">Professional Illustrative Package</option>
                                                    <option value="3d-logo" data-amount="644">3D Logo Package</option>
                                                </optgroup>
                                                <optgroup label="marketing-collateral">
                                                    <option value="startup-collateral" data-amount="99">Startup Collateral Package</option>
                                                    <option value="collateral-classic" data-amount="199">Collateral Classic Package</option>
                                                    <option value="premium-collateral" data-amount="399">Premium Collateral Package</option>
                                                    <option value="unlimited-collateral" data-amount="499">Unlimited Collateral Package</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div> -->

                                    <!-- Package Amount -->
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Package Amount</label>
                                            <input type="number" min="5" name="package_amount" placeholder="" autocomplete="off" step="any">
                                        </div>
                                    </div>

                                 
                                    

                                       <!-- Title  -->
                                       <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Title</label>
                                            <input type="text" name="titlex" placeholder="" autocomplete="off">
                                        </div>
                                    </div>


                                       <!-- Currency -->
                                       <div class="col-md-6">
                                        <div class="country-select">
                                            <label>Currency</label>
                                            <select name="currency" id="changeCurrency">
                                                <option selected="" value="USD">USD</option>
                                                <!--<option value="AUD">AUD</option>-->
                                                <!-- <option value="GBP">GBP</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    

                                    <!-- Description -->
                                    <div class="col-md-12">
                                        <label>Description</label>
                                        <textarea cols="60" rows="3" placeholder="" name="notes"></textarea>
                                    </div>
                                    
                                   

                                    <div class="col-md-12">
                                        <hr>
                                    </div>

                                    <!-- Website start -->
                                    <div class="col-md-12 website">
                                        <h4> Select Brand</h4>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="checkout-form-list">
                                            <div class="form-group radio-green">
                                                <input id="radio0" name="brand_name" value="ecomunified" type="radio" checked>
                                                <label for="radio0">ecomgeekz.com</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Website end -->

                                    <div class="clearfix"></div>

                                    <!-- Payment gateway -->
                                    <div class="col-md-12">
                                        <label>Payment gateway</label>

                                        <div class="ship-card">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="checkout-form-list">
                                                            <div class="form-group radio-green">
                                                                <input id="radio1001" type="radio" class='payment_type_checkbox' name="payment_gateway" value="4" checked>
                                                                <label for="radio1001"><img style="height: 50px;" src="terminal/images/authorize.svg"></label>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Stripe for US (1) -->
                                                <!-- <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="checkout-form-list">
                                                            <div class="form-group radio-green">
                                                                <input id="radio1000" type="radio" class='payment_type_checkbox' name="payment_gateway" value="1" checked>
                                                                <label for="radio1000"><img src="terminal/images/card6usa.jpg"></label>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> -->
                                                <!-- <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="checkout-form-list">
                                                            <div class="form-group radio-green">
                                                                <input id="radio1001" type="radio" class='payment_type_checkbox' name="payment_gateway" value="2" checked>
                                                                <label for="radio1001"><img style="height: 50px;" src="terminal/images/square.png"></label>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> -->
                                                <!-- <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="checkout-form-list">
                                                            <div class="form-group radio-green">
                                                                <input id="radio1002" type="radio" class='payment_type_checkbox' name="payment_gateway" value="3">
                                                                <label for="radio1002"><img style="height: 50px;" src="terminal/images/easypaydirect.png"></label>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> -->

                                                <!-- Stripe for AUS (2) -->
                                                <!--<li>-->
                                                <!--    <a href="javascript:void(0)">-->
                                                <!--        <div class="checkout-form-list">-->
                                                <!--            <div class="form-group radio-green">-->
                                                <!--                <input id="radio1001" type="radio" class='payment_type_checkbox' name="payment_gateway" value="2">-->
                                                <!--                <label for="radio1001"><img src="assets/terminal/images/card6aus.jpg"></label>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </a>-->
                                                <!--</li>-->

                                                <!-- PayPal (3)-->
                                                <!-- <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="checkout-form-list">
                                                            <div class="form-group radio-green">
                                                                <input id="radio44" class='payment_type_checkbox' name="payment_gateway" value="3" type="radio" checked="true">
                                                                <label for="radio44"><img
                                                                        src="assets/terminal/images/card8.jpg"></label>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li> -->

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <!-- Package type start -->
                                    <!-- <div class="package-box">
                                        <div class="col-md-12 ">
                                            <div class="col-md-12" id="features-div">
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Logo Design Tasks" /> Logo Design </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Website Design Tasks" /> Website Design </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Stationery Design Tasks" /> Stationery Design </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Brochure Design Tasks" /> Brochure Design </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Website Development Tasks" /> Website Development </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Project Status" /> Project Status</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Content Writing" /> Content Writing</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Social Media Design Task" /> Social Media Design </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Copy Right Design Task" /> Copy Right Design </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Video Production Tasks" /> Video Production </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Client Questionnaire" /> Client Questionnaire</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Email Marketing Questionnaire" /> Email Marketing
                                                        Questionnaire</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="SEO Questionnaire" /> SEO Questionnaire</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Academic Writing Questionnaire" /> Academic Writing
                                                        Questionnaire</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Book Writing" /> Book Writing</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Book Editing" /> Book Editing</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Book Publishing" /> Book Publishing</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Book Formatting" /> Book Formatting</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Book Proofreading" /> Book Proofreading</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Book Marketing" /> Book Marketing</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Illustrations" /> Illustrations</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Book Cover Design" /> Book Cover Design</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Book Translation" /> Book Translation</label>
                                                </div>
                                                <div class="col-md-6" id="others-div">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="Other Task" /> Other</label>
                                                </div>

                                                <div class="col-md-6" id="others-div">
                                                    <label class="package-error"><input type="checkbox" name="brand_service[]" value="No Package" /> No Package</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                    </div> -->
                                    <!-- Package type end -->

                                    <div class="clearfix"></div>

                                    <!-- Payment Type -->
                                    <div class="col-md-6 hidex" id='payment_type-div'>
                                        <label>Payment type</label>
                                        <select name="payment_type" id="payment_type">
                                            <option value="3">Triple</option>
                                            <option value="2">Double</option>
                                            <option value="1" selected="">Single</option>
                                        </select>
                                    </div>

                                    <div class="clearfix"></div>

                                    <style>
                                        .hidex {
                                            display: none !important;
                                        }
                                    </style>

                                    <!-- Payment invoice option start -->
                                    <div class="col-md-12 website hidex">
                                        <h4> Send invoice to Customer</h4>
                                    </div>
                                    <div class="col-md-2 hidex">
                                        <div class="checkout-form-list">
                                            <div class="form-group radio-green">
                                                <input id="invoice-yes" name="send_invoice" value="1" type="radio">
                                                <label for="invoice-yes">Yes</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 hidex">
                                        <div class="checkout-form-list">
                                            <div class="form-group radio-green">
                                                <input id="invoice-no" name="send_invoice" value="0" type="radio" checked>
                                                <label for="invoice-no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!-- Payment invoice option end -->

                                    <div class="clearfix"></div>

                                    <div class="col-md-6 hidex" id="du-box">
                                        <div class="checkout-form-list">
                                            <label>Sales person</label>
                                            <select name="sales_person" id="" class="form-control" required>
                                                <option value="">Select email address</option>
                                                <!--<option value="info@webbuildify.com">info@webbuildify.com</option>-->
                                                <option value="support@ecomgeekz.com" selected>support@ecomgeekz.com</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <input type="hidden" name="tw" value="0"> -->
                                    <input type="hidden" name="payment_type" value="<?php echo isset($_GET['payment_type']) ? $_GET['payment_type'] : ""; ?>" />

                                    <!-- SUbmit button -->
                                    <div class="col-md-12">
                                        <input type="hidden" name="_do_post" value="1" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="submit" value="submit" class="btn">
                                    </div>
                                </form>
                                <!-- Form end -->

                                <!-- Modal start -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog" style="width: 98% !important;">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Records</h4>
                                            </div>
                                            <div class="modal-body">
                                                <table>
                                                    <tr>
                                                        <th>Customer ID</th>
                                                        <th>Email</th>
                                                        <th>Sales</th>
                                                        <th>Amount</th>
                                                        <th>Currency</th>
                                                        <th>Description</th>
                                                        <th>Brand</th>
                                                        <th>Gateway</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Modal end -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" <?php echo (isset($_GET['do_post']) ? "style='display:block;'" : "style='display:none;'") ?>>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-md-offset-2 col-xs-12 payment-way">
                        <div class="digi-form">
                            <!-- Payment Link -->

                            <div class="row form-req">
                                <h3 class="m-1o">:: Payment Link Generated ::</h3>
                                <div class="contact-details">
                                    <!-- <li><label for="">An email is also sent to <i>"{{ env('MAIL_TO_ADMIN"</i>, <i>"{{ isset($sales_person) ? $sales_person : ""; }}"</i></label></li> -->
                                    <li><label for="">Click on the button below to go to the payment link</label></li>
                                    <a id="payment_link_btn" href="" target="_blank"><button>CLICK HERE FOR PAYMENT LINK</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Link generator form end-->
        </div>
    </section>
    <!--home close-->

    <!-- Js start -->
    <script type="text/javascript" src="terminal/js/jquery.1.12.4.min.js"></script>
    <script type="text/javascript" src="terminal/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="terminal/js/jquery.validate.js"></script>
    <script type="text/javascript" src="terminal/js/form.validation.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Js end -->
    
    
    
  
    

    <script type="text/javascript">
        $("body").on('click', '.payment_type_checkbox', function() {

            var id = $(this).val();

            //if(id <= 2)
            if ((id == 2) || (id == 6)) {

                $("#payment_type-div").show('slow');

            } else {

                $("#payment_type-div").hide('slow');

            }

        });

        // On change to show customer email start
        $('select[name=payment_type]').on('change', function() {
            var val = $(this).val();
            if (val == '2') {
                $('#custom_email').show('slow');
                $('input[name=custom_email]').prop('required', true);
            } else {
                $('#custom_email').hide('hide');
                $('input[name=custom_email]').prop('required', false);
            }
        });
        // On change to show customer email end

        // Show form option start
        // 3 = Octachat.com
        // 4 = DesignQuotations.com
        // 5 = AppOcta.com
        // 6 = DesignParamount.com
        // 8 = Perfecent.com
        // 18 = Cmolds.com
        // 20 = Digitonics.com

        // Excluding DU list end

        // 26 = SEO
        // 27 = finest content writing
        // 29 = ghost book writing

        $('input[name=site]').change(function() {
            //
            //var brands = ['5','20','26','27','29'];
            //var brands = ['3','4','5','6','8','18','20','26','27','29'];
            //var brands = ['3','4','5','6','8','18','20','26'];  // Remove SEOProhub
            //var brands = ['3','4','5','6','8','18','20','43','111'];  
            //var brands = ['3','4','5','6','8','18','20','111'];  // Remove 43 brand
            var brands = ['3', '4', '5', '6', '8', '18', '20']; // Remove 43 brand
            var brand_id = $(this).val();
            if ($.inArray(brand_id, brands) !== -1) {
                // Unchecked all features checkbox
                $('#features-div input').prop('checked', false);
                $('#features-div').hide('slow');
                //$('#others-div').show('slow');
                // check other feature checkbox
                $('#others-div input').prop('checked', true);
                // Show du email
                $('#du-box').hide('slow');
            } else {
                $('#others-div input').prop('checked', false);
                //$('#others-div').hide('slow');
                $('#features-div').show('slow');
                // Hide du email
                $('#du-box').show('slow');
            }
        });
        // Show FCW form option end
    </script>

    <script>
        $(document).ready(function() {
            var urlParams = new URLSearchParams(window.location.search);
            var doPost = urlParams.get('do_post');
            $('#linkForm').on('submit', async function(e) {
                e.preventDefault();

                // **Step 2: Send Data via AJAX**
                var formData = $("#linkForm").serializeArray();
                $.ajax({
                    url: 'payment-link-api.php',
                    type: 'POST',
                    data: $.param(formData), // Convert array to URL-encoded string
                    success: function(response) {
                        if (response.status === 'success') {
                            var baseUrl = window.location.origin + window.location.pathname;
                            var newUrl = baseUrl + '?payment_code=' + response.payment_code + '&do_post=1';
                            window.location.href = newUrl;
                        } else {
                            toastr.error("Error Occurred: " + response.message);
                        }
                    },
                    error: function(xhr) {
                        console.log("Errors:", xhr);
                        toastr.error("Error: " + xhr.responseText);
                    }
                });

            });

            if(doPost == 1){
                const paymentCode = urlParams.get('payment_code');
                if (!paymentCode) {
                    return;
                }
                $.ajax({
                    url: 'get-data-api.php',
                    type: 'GET',
                    data: { payment_code: paymentCode },
                    success: function(response) {
                        console.log("Response:", response);
                        if (response.status === 'success') {
                            $("#payment_link_btn").attr("href", response.data.payment_link);
                        } else {
                            toastr.error("Error: " + response.message);
                        }
                    },
                    error: function(xhr) {
                        toastr.error("Error fetching data: " + xhr.responseText);
                    }
                });
            }
            $("#changeCurrency").change(function() {
                var dropDownValue = $(this).val();
                if (dropDownValue == 'GBP') {
                    $("#pt option:nth-child(1)").remove();

                    $('<option/>')
                        .val(1)
                        .text('Single')
                        .appendTo('#pt')

                } else {

                    $("#pt option:nth-child(1)").remove();
                    var replaceVal = "3";

                    $('<option/>')
                        .val(3)
                        .text('Triple')
                        .appendTo('#pt')
                }
            });

            $('#package_name').change(function() {
                var dropDownValue = $(this).find('option:selected').data('amount');
                $('input[name=package_amount]').val(dropDownValue);
            });
        });
    </script>

</body>


</html>
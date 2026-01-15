<?php 
$title = "Amazon Private Label";
$keywords = "book writing,creative writing book";
$description = "";
$og_title = $title;
$og_description = $description;

include("include/header.php"); 
?>
<body class="hompg inner-main">

<?php include("include/menu.php"); ?>




    <!-- header strat -->

<!-- body -->
<!-- banner-main-sec -->
<section class="banner-main-sec">
    <img src="assets/images/Amazon-Main-Banner.jpg" class="banne-img" alt="img" />
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-page">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="service">Business Services</a></li>
                    <li><a href="start-your-marketing-agency-2" class="active">Amazon Private Label</a></li>
                </ul>
                <h1>Amazon Private Label with <?= $brand_name ?? '' ?>: A Seamless Path to E-Commerce Success</h1>
                <p>At  <?= $brand_name ?? '' ?>, we simplify the complexities of launching your Amazon private label business, offering a comprehensive suite of services that guide you from concept to market domination. </p>
                <h6><b>Are you eager to start your online venture without the need for hefty upfront investment? Let us help you build a successful business with Amazon's Fulfilled-by-Amazon (FBA) program, designed to streamline your operations and drive revenue.</b></h6>
                <a href="#_" data-bs-toggle="modal" data-bs-target="#infoModal" class="themes-btn">Schedule A Free Call</a>
                <!--<img src="assets/images/Trustpilot-Stars.svg" alt="img"  class="mt-3" />-->
                <div class="txt-left">
                    <!-- TrustBox widget - Micro TrustScore -->
                    <div class="trustpilot-widget"   data-style-height="20px" data-style-width="100%" data-theme="light">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                    </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
</section>
<!-- banner-sec -->

<!-- register-sec -->
<section class="register-sec padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2>Why Partner with <?= $brand_name ?? '' ?> for Amazon Private Label?</h2>
                <p>If you’re interested in starting your own online business, it doesn’t get much better than selling private label products using Amazon’s Fulfilled-by-Amazon (FBA) program. It’s pretty easy to do and there are a lot of tools in place to help you succeed. Below, I cover the nine basic steps to success.</p>
            </div>
            <div class="col-lg-3">
                <div class="circle-logo">
    <a href="javascript:;" onclick="setButtonURL();">
                    <div class="circle">
                	<div class="logo"></div>
                	<div class="text">
                		<p> ☆ UNLOCK YOUR BUSINESS POTENTIAL ☆</p>
                	</div>
                </div>
                </a>
                </div>
                <script>
                const text = document.querySelector(".text");
                text.innerHTML = text.innerText
                	.split("")
                	.map(
                		(char, i) => `<span style="transform:rotate(${i * 10.3}deg)">${char}</span>`
                	)
                	.join("");
                </script>            </div>
            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-No-big-upfront-fees.svg" alt="img" />
                    <h3>No High Initial Fees</h3>
                <p>Our approach minimizes entry barriers, allowing you to avoid significant upfront costs. Instead, invest directly into scaling your business to maximize growth from day one.</p>
            </div>
            </div>

              <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-Simple-steps.svg" alt="img" />
                    <h3>Effortless Process</h3>
                    <p>We follow a streamlined, proven method that ensures swift execution and tangible results without unnecessary complications.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-Earn-five-figures.svg" alt="img" />
                    <h3>Achieve Six-Figure Revenues</h3>
<p>With <?= $brand_name ?? '' ?>'s expertise, many businesses reach six-figure monthly revenue milestones, accelerating growth and enhancing profitability.</p>                </div>
            </div>

            </div>
        </div>
    </div>
</section>
<!-- register-sec -->



<!-- Sliding Testimonial-sec-starts -->
<section class="service-review padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h2>See what people say about <?= $brand_name ?? '' ?></h2>
            </div>
        </div>
    </div>
    <div class="slick marquee">
      <div class="slick-slide">
        <div class="inner">
            <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Will Mundial</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p>The Amazon FBA Automation service from <?= $brand_name ?? '' ?> is a game-changer. They took care of al the details, allowing me to focus on growing my business. Their expertise and efficiency are unmatched.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Ceci Parker</h6>
                    <img class="bedge" src="assets/images/tw-verified.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> has transformed my Amazon business. Their Amazon FBA Automation service is exceptional. They handled everything from product sourcing to fulfillment with utmost professionalism. Highly recommend!</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
    </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Kate Mendoza</h6>
                    <img class="bedge" src="assets/images/crown.png">
                </div>
                <div class="content-box">
                    <p>The Dropshipping Shopify Automation service from <?= $brand_name ?? '' ?> is a game-changer. They streamlined my store operations and enhanced efficiency. My business has seen significant growth thanks to their support.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Sierra Carter</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?>' Dropshipping Shopify Automation service is phenomenal. They automated my Shopify store seamlessly. from product sourcing to order fulfillment. My sales have skyrocketed thanks to their expertise!</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Jonah Ingrid</h6>
                    <img class="bedge" src="assets/images/tw-verified.png">
                </div>
                <div class="content-box">
                    <p>I couldn't be happier with the service provided by  <?= $brand_name ?? '' ?>. They handled every detail of forming my business, Leaving me free to focus on my passion. Their professionalism and efficiency are unmatched.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Laura Wilson</h6>
                    <img class="bedge" src="assets/images/tw-verified.png">
                </div>
                <div class="content-box">
                    <p>Launching Kickstarter campaign with <?= $brand_name ?? '' ?> was a phenomenal experience. Their expertise in crowdfunding and campaign management ensured and successful and well-executed campaign. The team's commitment and strategic approach were critical to achieving our funding goals. I am extremely satisfied with their service and support.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Michael Thompson</h6>
                    <img class="bedge" src="assets/images/tw-verified.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> has been a game-changer for my drop shipping business. Their Shopify Automation service streamlined my operations, allowing me to focus on scaling and marketing. The team's expertise in drop shipping and automation saved me countless hours and significantly boosted my revenue. I couldn't be happier with the results and highly recommend <?= $brand_name ?? '' ?> for drop shopping entrepreneurs.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Robert Davis</h6>
                    <img class="bedge" src="assets/images/tw-verified.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> made launching my mobile application a breeze. Their expertise in app development and monetization strategies ensured a smooth process and a successful launch. The team's professionalism and attention to detailed were impressive, and I'm thrilled with the revenue my app is generating. I highly recommend <?= $brand_name ?? '' ?> fpr mobile app development.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>David Johnson</h6>
                    <img class="bedge" src="assets/images/tw-verified.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> helped me elevate my personal brand to new heights. Thier tailored approach and in-depth understanding of personal branding allowed me to effectively communicate my expertise and attract a wider audience. The professionalism and commitment of the <?= $brand_name ?? '' ?> team exceeded my expectations, making them the perfect choice for anyone looking to enhance their personal brand.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
    </div>
    
    
    
    <div class="slick marquee marq-2">
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Grace Rutherglen</h6>
                    <img class="bedge" src="assets/images/crown.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> transformed my Shopify store with their Dropshipping Automation service. They handled everything from inventory management to customer support efficiently. Their service is top-notch!</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Jack buscemi</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p>I am incredibly impressed with <?= $brand_name ?? '' ?>' Drop shipping Shopify Automation service. They optimized my store and automated processes, allowing me to focus on scaling my business. Highly recommend!</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Nanette Hendrix</h6>
                    <img class="bedge" src="assets/images/tw-verified.png">
                </div>
                <div class="content-box">
                    <p>From start to finish, <?= $brand_name ?? '' ?> provided exceptional service. They took care of all the legalities and paperwork, allowing me to concentrate on building my business. I highly recommend their business formation services.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Zach Boldt</h6>
                    <img class="bedge" src="assets/images/tw-verified.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> made the business formation process incredibly smooth and straightforward. Their expertise and support were invaluable. I highly recommend them to anyone looking looking to start a new business!</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Jessica Miller</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p>I am thrilled with the results from <?= $brand_name ?? '' ?>'s Amazon FBA Automation service. Their team guided me through every step, making the complex process of setting up managing my Amazon store incredibly straightforward. The comprehensive support and expert advice were invaluable. leading to a successful and profitable venture. I highly recommend <?= $brand_name ?? '' ?> for anyone looking to thrive on Amazon FBA.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Emily Rodriguez</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p>Thanks to  <?= $brand_name ?? '' ?>, I was able to launch my ecommerce brand with confidence and ease. Their step-by-step guidance and personalized strategy helped me build a strong online presence and attract a loyal customer base. The team's dedication and knowledge were evident throughout the process, making them an invaluable partner in my business journey.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Samantha Lee</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> provided me with an ultimate business model that transformed my approach to entrepreneurship. Their holistic strategy and innovative solutions were key to my business's success. The team's commitment to my growth and their exceptional service make <?= $brand_name ?? '' ?> the ideal partner for any entrepreneur.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>James Taylor</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> made the process of business formation seamless and stress-free. Their detailed guidance and support helped me navigate the complexities of starting a new business. The team's professionalism and expertise were invaluable, making them the perfect partner for anyone looking to start a business.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Daniel Martinez</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p><?= $brand_name ?? '' ?> helped me diversify my income through multiple revenue streams. Their innovate strategies and practical advice were key to my financial growth. The team's dedication to my success was evident throughout our collaboration. I highly recommend <?= $brand_name ?? '' ?> for anyone looking to create sustain revenue streams.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="inner">
          <div class="rev-box">
                <div class="header-box">
                    <img src="assets/images/initial-profile.jpg">
                    <h6>Sarah Williams</h6>
                    <img class="bedge" src="assets/images/tw-verified--gold.png">
                </div>
                <div class="content-box">
                    <p>Working with <?= $brand_name ?? '' ?> on my YouTube Automation has been a fantastic experience. They handled everything from channel setup to content creation and monetization strategies, allowing me to focus on my core strengths. The growth and engagement on my channel have been remarkable, and I am grateful for their exceptional service and support.</p>
                </div>
                <div class="testi-star">
                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">
                    <!--<img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
                </div>
                <div class="trust-btn">
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="6663b05c3eb83ca97fbbddae" data-style-height="52px" data-style-width="100%">
                      <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
      </div>
    </div> 
</section>






<!--<section class="service-review padd-tb">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 text-center mb-5">-->
<!--                <h2>See what people say about <?= $brand_name ?? '' ?></h2>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="slick marquee">-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--            <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/initial-profile.jpg">-->
<!--                    <h6>Jessica Miller</h6>-->
                    <!--<img class="bedge" src="assets/images/tw-verified--gold.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p>I am thrilled with the results from <?= $brand_name ?? '' ?>'s Amazon FBA Automation service. Their team guided me through every step, making the complex process of setting up and managing my Amazon store incredibly straightforward.I highly recommend <?= $brand_name ?? '' ?> for anyone looking to thrive on Amazon FBA.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/Rectangle29.png">-->
<!--                    <h6>Michael Thompson</h6>-->
<!--                    <img class="bedge" src="assets/images/tw-verified.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p><?= $brand_name ?? '' ?> has been a game-changer for my dropshipping business. Their Shopify Automation service streamlined my operations, allowing me to focus on scaling and marketing. The team's expertise in dropshipping and automation saved me countless hours and significantly boosted my revenue.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/initial-profile.jpg">-->
<!--                    <h6>Emily Rodriguez</h6>-->
                    <!--<img class="bedge" src="assets/images/crown.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p>Thanks to  <?= $brand_name ?? '' ?>, I was able to launch my ecommerce brand with confidence and ease. Their step-by-step guidance and personalized strategy helped me build a strong online presence and attract a loyal customer base. The team's dedication and knowledge were evident throughout the process, making them an invaluable partner in my business journey.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/Rectangle32.png">-->
<!--                    <h6>David Johnson</h6>-->
<!--                    <img class="bedge" src="assets/images/tw-verified--gold.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p><?= $brand_name ?? '' ?> helped me elevate my personal brand to new heights. Their tailored approach and in-depth understanding of personal branding allowed me to effectively communicate my expertise and attract a wider audience.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/initial-profile.jpg">-->
<!--                    <h6>Sarah Williams</h6>-->
                    <!--<img class="bedge" src="assets/images/tw-verified.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p>Working with <?= $brand_name ?? '' ?> on my YouTube Automation has been a fantastic experience. They handled everything from channel setup to content creation and monetization strategies, allowing me to focus on my core strengths. The growth and engagement on my channel have been remarkable, and I am grateful for their exceptional service and support.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="slick marquee marq-2">-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/Rectangle-30.png">-->
<!--                    <h6>Robert Davis</h6>-->
<!--                    <img class="bedge" src="assets/images/crown.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p><?= $brand_name ?? '' ?> made launching my mobile application a breeze. Their expertise in app development and monetization strategies ensured a smooth process and a successful launch. The team’s professionalism and attention to detail were impressive, and I’m thrilled with the revenue my app is generating. I highly recommend <?= $brand_name ?? '' ?> for mobile app development.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/initial-profile.jpg">-->
<!--                    <h6>Vania Sheriff</h6>-->
                    <!--<img class="bedge" src="assets/images/tw-verified--gold.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p><?= $brand_name ?? '' ?> was instrumental in helping me start my marketing agency. Their comprehensive approach covered everything from business formation to client acquisition strategies. The team's knowledge and support gave me the confidence to launch and grow my agency successfully. I couldn't have done it without <?= $brand_name ?? '' ?>'s expert guidance.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/Rectangle-31.png">-->
<!--                    <h6>Daniel Martinez</h6>-->
<!--                    <img class="bedge" src="assets/images/tw-verified.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p><?= $brand_name ?? '' ?> helped me diversify my income through multiple revenue streams. Their innovative strategies and practical advice were key to my financial growth. The team’s dedication to my success was evident throughout our collaboration. I highly recommend <?= $brand_name ?? '' ?> for anyone looking to create sustainable revenue streams.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/initial-profile.jpg">-->
<!--                    <h6>Laura Wilson</h6>-->
                    <!--<img class="bedge" src="assets/images/tw-verified.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p>Launching a Kickstarter campaign with <?= $brand_name ?? '' ?> was a phenomenal experience. Their expertise in crowdfunding and campaign management ensured a successful and well-executed campaign. The team’s commitment and strategic approach were critical to achieving our funding goals. I am extremely satisfied with their service and support.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/Rectangle-33.png">-->
<!--                    <h6>James Taylor</h6>-->
<!--                    <img class="bedge" src="assets/images/tw-verified--gold.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p><?= $brand_name ?? '' ?> made the process of business formation seamless and stress-free. Their detailed guidance and support helped me navigate the complexities of starting a new business. The team’s professionalism and expertise were invaluable, making them the perfect partner for anyone looking to start a business.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="slick-slide">-->
<!--        <div class="inner">-->
<!--          <div class="rev-box">-->
<!--                <div class="header-box">-->
<!--                    <img src="assets/images/initial-profile.jpg">-->
<!--                    <h6>Samantha Lee</h6>-->
                    <!--<img class="bedge" src="assets/images/tw-verified--gold.png">-->
<!--                </div>-->
<!--                <div class="content-box">-->
<!--                    <p><?= $brand_name ?? '' ?> provided me with an ultimate business model that transformed my approach to entrepreneurship. Their holistic strategy and innovative solutions were key to my business’s success. The team’s commitment to my growth and their exceptional service make <?= $brand_name ?? '' ?> the ideal partner for any entrepreneur.</p>-->
<!--                </div>-->
<!--                <div class="testi-star">-->
<!--                    <img class="brand-icon" src="assets/images/EcomGeekz-Badges-Logo.svg" alt="img" class="mt-3">-->
<!--                    <img src="assets/images/5-Stars.svg" alt="img" class="mt-3">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--</section>-->



<!-- Sliding Testimonial-sec-end -->



<!-- step-sec -->
<section class="step-sec padd-tb">
    <div class="container">
        <div class="row testament">
           <div class="col-lg-6">
               <h2>How <?= $brand_name ?? '' ?> Helps Launch Your Amazon Private Label</h2>
               <h3><img src="assets/images/Brand-freedom.svg" alt="img" class="img-size">Brand Freedom</h3>
              <p>Step away from Amazon's brand restrictions. <?= $brand_name ?? '' ?> empowers you to build a distinct and creative brand identity that stands out in a crowded marketplace.</p>
               <h3><img src="assets/images/Quality-control.svg" alt="img" class="img-size">Quality Control</h3>
               <p>Take charge of your product's quality. We give you the tools to select premium materials and ingredients, ensuring superior products that exceed customer expectations.</p>
               <h3><img src="assets/images/Profitability-flexibility.svg" alt="img" class="img-size">Profitability Flexibility</h3>
               <p>Maintain control over your pricing strategy. With  <?= $brand_name ?? '' ?>, you can quickly adjust pricing to leverage market fluctuations, maximizing profit potential.</p>
               <h3><img src="assets/images/Reduced-competition.svg" alt="img" class="img-size">Reduced Competition</h3>
<p>Unlock the power of niche markets. <?= $brand_name ?? '' ?> helps you develop unique, high-demand products with minimal competition, giving you a significant edge.</p>
               
               <a href="javascript:(void)" class="themes-btn mt-3" data-bs-toggle="modal" data-bs-target="#infoModal">Launch an amazon private label with <?= $brand_name ?? '' ?></a>
           </div>
           <div class="col-lg-5 offset-lg-1 my-auto">
               <div class="imgwrp">
                <img src="assets/images/Amazon-First-Fold.jpg" alt="img" />
                <div class="upper first image-lable">
                    <div class="txtwrp">
                      <p>Achieved best seller status in your category!</p>
                    </div>
                  </div>
               </div>
           </div>
        </div>
    </div>
</section>
<!-- step-sec -->


<!-- mil-team-sec -->
<section class="mil-team-sec padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Success in Numbers: <?= $brand_name ?? '' ?>'s Impact</h3>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4 col-md-6">
                <h2>700+</h2>
                <h3>Active Sellers </h3>
                <p>We've empowered over 700 entrepreneurs to succeed in the competitive world of e-commerce.</u></b></p>
                
            </div>
            <div class="col-lg-4 col-md-6">
                <h2>185,000+</h2>
                <h3>Orders Processed</h3>
                <p>Our advanced systems have successfully processed over 185,000 orders, delivering precision and customer satisfaction.</p>
                
            </div>
            <div class="col-lg-4 col-md-6">
                <h2>$2.6M</h2>
                <h3>Members Sales</h3>
                <p>Our strategies have driven over $2.6 million in sales, enabling our clients to reach new heights.</p>
                
            </div>
        </div>
    </div>
</section>
<!-- mil-team-sec -->


<!-- testimonials slider -->


<!-- leader-sec -->
<section class="leader-sec padd-tb">
  <div class="container">
    <div class="leader-main">
      <div class="row testwraper">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-6">
                  <h2>We win when you win!</h2>
                  <p><b>Transform top-selling products into scalable assets for long-term success. </b><p>
                       <hr> <ul>
                             <li>No brand restrictions</li>  
                            <li>Get more opportunities on Amazon</li>
                            <li>Customize your products</li>
                            <li>Scale revenue and boost profit margins</li>
                        </ul>
                        
                  <h6>Partner with <?= $brand_name ?? '' ?> to navigate product complexities and regulatory hurdles effortlessly.</h6>      
                  <a href="#_" data-bs-toggle="modal" data-bs-target="#infoModal" class="themes-btn">Schedule a free call</a>
                  
                </div>
                <div class="col-lg-6">
                  <img src="assets/images/amazon-private-label.jpg" alt="img" />
                </div>
            </div>
        </div>
        

    <!--<div class="row mt-5">-->
    <!--  <div class="col-lg-5 centerCol text-center">-->
    <!--    <a href="javascript:(void)" class="themes-btn">View leadership bios</a>-->
    <!--  </div>-->
    <!--</div>-->
  </div>
</section>
<!-- leader-sec -->


<!-- testimonials slider end -->

<!-- means-sec -->
<section class="means-sec style padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="imgwrp">
                <img src="assets/images/Amazon-3rd-Fold.jpg" alt="img" />
                  <div class="upper first image-lable">
                    <div class="txtwrp">
                      <p>Achieved best seller status in your category!</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h2>Driving Business Success for Entrepreneurs and Fortune 500 Companies</h2>
               <p>At  <?= $brand_name ?? '' ?>, we craft meticulously designed strategies to propel your business. Through in-depth market analysis, strategic insights, and consumer behavior expertise, we align our services with your unique business objectives. By leveraging data-driven decision-making, we help businesses remain ahead of industry trends and deliver sustained growth.</p> </div>
        </div>
    </div>
</section>
<!-- means-sec -->




<!-- important-sec -->
<section class="important-sec padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Key Benefits of Partnering with <?= $brand_name ?? '' ?> for Amazon Private Label</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Optimize%20Your-Inventory.svg" alt="img" />
                    <h3>Strategic Product Selection</h3>
                <p>We conduct comprehensive market research to identify products with high potential, ensuring you enter profitable niches with low competition.</p>
            
            </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Superior%20Store-Management.svg" alt="img" />
                    <h3>Comprehensive Brand Development</h3>
               <p>From logo design to packaging strategies, we help you create a cohesive and compelling brand identity that resonates with your target audience, building trust and recognition.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Maximum-Efficiency.svg" alt="img" />
                    <h3>Optimized Marketing Strategies</h3>
                <p>Our team uses advanced SEO techniques, PPC campaigns, and social media integration to enhance your brand visibility, driving organic traffic and converting visitors into loyal customers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="javascript:(void)" class="themes-btn" data-bs-toggle="modal" data-bs-target="#infoModal">Launch an amazon private label with <?= $brand_name ?? '' ?></a>
            </div>
        </div>
    </div>
</section>
<!-- important-sec -->

<section class="mobileslidewrp">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center mb-4">
                <h2>Success stories</h2>
            </div>
        </div>
    </div>
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="col-md-12">
				<div class="imgwrp">
					<ul class="center-slider">
						<li><img src="assets/images/Business-report-01.png"></li>
						<li><img src="assets/images/Business-report-02.png"></li>
						<li><img src="assets/images/Business-report-03.png"></li>
						<li><img src="assets/images/Business-report-04.png"></li>
						<li><img src="assets/images/Business-report-05.png"></li>
						<li><img src="assets/images/Business-report-01.png"></li>
						<li><img src="assets/images/Business-report-02.png"></li>
						<li><img src="assets/images/Business-report-03.png"></li>
						<li><img src="assets/images/Business-report-04.png"></li>
						<li><img src="assets/images/Business-report-05.png"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- plan-sec -->
<section class="plan-sec no-bg padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h2>Unlock your business potential
                <!--<img src="assets/images/AOF_Logo.svg" alt="logo" />-->
                </h2>
                <h4><b>Are you ready to turn your vision into a thriving business?</b></h4>
                <p>Take the first step towards success by sharing essential details about your venture with us. We're here to guide you through the journey.</p>
                <h4><b>Help us get an idea of what business or idea is all about.</b></h4>
                <div class="crm-form">
                 </div>
                <!--  <form action="https://ecomgeekz.com/dev2/webpages/bannerFormController.php" method="post" class="mt-5">-->
                <!--    <div class="row">-->
                <!--        <div class="col-lg-6">-->
                <!--            <input type="text" name="Name" placeholder="Full Name" required />-->
                <!--        </div>-->
                <!--        <div class="col-lg-6">-->
                <!--            <input type="email" name="Email" placeholder="Email" required />-->
                <!--        </div>-->
                <!--        <div class="col-lg-6">-->
                <!--            <input type="number" name="Number" placeholder="Phone Number" required />-->
                <!--        </div>-->
                <!--        <div class="col-lg-6">-->
                <!--            <input type="text" name="Message" placeholder="Zip Code" required />-->
                <!--        </div>-->
                <!--        <div class="col-lg-12">-->
                <!--            <div class="d-flex">-->
                <!--                <input type="checkbox" name="agree" required>-->
                <!--                <p><p>I agree with the <a style="text-decoration: underline;" href="https://ecomgeekz.com/terms-of-service">Terms of Service</a> & <a style="text-decoration: underline;" href="https://ecomgeekz.com/privacy-policy">privacy policy</a></p>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-12">-->
                <!--            <div class="d-flex">-->
                <!--                <input type="checkbox" name="agree" required>-->
                <!--                <p>I Consent to Receive SMS Notifications, Alerts & Occasional Marketing Communication from  <?= $brand_name ?? '' ?>.</p>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-lg-12">-->
                <!--            <input type="submit" class="themes-btn" value="Sign Up">-->
                <!--            <input class="" type="hidden" name="ctry" value="">-->
                <!--      <input type="hidden" name="pc" value="">-->
                <!--      <input type="hidden" name="cip" value="">-->
                <!--      <input type="hidden" name="hiddencapcha" value="">-->
                <!--      <input type="hidden" id="location" name="locationURL" value="http://ecomgeekz.com/amazon-private-label" />-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</form>-->
            </div>
        </div>
    </div>
</section>                <!-- plan-sec -->

<!-- register-sec -->
<!--
<section class="register-sec padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>3 reasons for creating an LLC</h2>
            </div>
            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/shield.svg" alt="img" class="img-size" />
                    <h3>Protect your personal assets</h3>
                    <p>By forming an LLC and keeping your personal finances separate, your personal assets are protected from business liabilities.</p>
                </div>
            </div>

              <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/parasol.svg" alt="img" class="img-size" />
                    <h3>Make things easier</h3>
                    <p>Compared to corporations, LLCs are typically easier to start and have simpler rules for things like record-keeping.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/finance-icon.svg" alt="img" class="img-size" />
                    <h3>Get tax flexibility</h3>
                    <p>You get to decide how you’re taxed—as an LLC or a corporation—to maximize your potential savings and minimize tax liability.</p>
                </div>
            </div>
            </div>

            <div class="row mt-5">
                <div class="col-xxl-3 col-xl-4 col-lg-5">
                    <a href="javascript:(void)" class="themes-btn">Select and start my LLC</a>
                </div>
            </div>

        </div>
    </div>
</section>-->
<!-- register-sec -->


<!-- reserve-sec -->
<section class="reserve-sec padd-tb">
    <div class="container">
        <h2 class="text-center mb-5">End-to-End Amazon Private Label Services</h2>
        <div class="row">
            
            <div class="col-lg-4 col-md-6">
                
                
                <div class="reserve-box">
                    <img src="assets/images/Product-research-and-sourcing.svg" alt="img" />
                    <h3>Product Research and Sourcing</h3>
                <p>Our team conducts thorough market analysis to identify top-performing products. We negotiate with suppliers to secure competitive pricing, ensuring your product selections are both profitable and high-quality.</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Brand-identity-and-design-development.svg" alt="img" />
                    <h3>Brand Identity and Design Development</h3>
                    <p>We craft a unique and memorable brand identity, including logo creation, packaging design, and visual strategies that elevate consumer trust and visibility.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Listing-optimization-and-launch-strategy.svg" alt="img" />
                    <h3>Listing Optimization and Launch Strategy</h3>
                <p>Our SEO specialists optimize your product listings with targeted keywords, persuasive content, and a strategic launch plan to ensure maximum visibility and sales right from day one.</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Inventory-management-and-fulfillment.svg" alt="img" />
                    <h3>Inventory Management and Fulfillment</h3>
                <p>With seamless integration into Amazon’s FBA, we manage your inventory, ensuring timely fulfillment and excellent customer service, so you can focus on growing your business.</p></div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Performance-monitoring-and-optimization.svg" alt="img" />
                    <h3>Performance Monitoring and Optimization</h3>
               <p>Using advanced analytics, we monitor key performance indicators (KPIs), implement A/B testing, and optimize listings and marketing strategies for continuous growth.</p> </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Ongoing-support-and-strategic-guidance.svg" alt="img" />
                    <h3>Ongoing Support and Strategic Guidance</h3>
                <p>After your product launch, we provide continuous strategic consultations to help you navigate challenges, capitalize on opportunities, and sustain long-term success.</p></div>
            </div>
        </div>
    </div>
</section>
<!-- reserve-sec -->

<!-- faq-sec -->
<section class="faq-sec padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Frequently asked questions</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What is Amazon private labeling, and how can <?= $brand_name ?? '' ?> help?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Amazon private labeling involves creating your own branded product and selling it on Amazon. <?= $brand_name ?? '' ?> helps you with every step, from product research to branding, listing optimization, and marketing.</p></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How does private labeling benefit my business compared to selling existing products?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Private labeling offers you control over branding, pricing, and product quality, creating unique offerings in the marketplace and maximizing profitability.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      What types of products are suitable for Amazon private labeling with <?= $brand_name ?? '' ?>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>We help you identify high-demand, low-competition products across various niches, ensuring that your private label product resonates with consumers.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
     How long does it take to launch a private label product on Amazon with <?= $brand_name ?? '' ?>
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Typically, it takes a few weeks to a few months, depending on product research, design, and optimization. We expedite the process to get your product to market as quickly as possible.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
      What support does <?= $brand_name ?? '' ?> provide after launching my Amazon private label product?
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>We offer ongoing support through performance analysis, listing optimization, marketing strategies, and troubleshooting, ensuring your brand continues to thrive.</p>
      </div>
    </div>
  </div>


</div>
            </div>
        </div>
    </div>
</section>
<!-- faq-sec -->


<!-- body -->

<?php include("include/cta-all.php"); ?>
<?php include("include/footer.php"); ?>
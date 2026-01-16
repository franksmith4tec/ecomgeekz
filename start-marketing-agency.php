<?php 
$title = "Start Marketing Agency";
$keywords = "book writing,creative writing book";
$description = "";
$og_title = $title;
$og_description = $description;

include("include/header.php"); 
?>



<body class="hompg">



<?php include("include/menu.php"); ?>




    <!-- header strat -->

<!-- body -->
<!-- banner-main-sec -->
<section class="banner-main-sec">
    <img src="assets/images/marketing-Main-Banner.jpg" class="banne-img" alt="img" />
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-page">
                    <li><a href="<?= $base_url ?? '' ?>">Home</a></li>
                    <li><a href="service">Business Services</a></li>                    
                    <li><a href="start-marketing-agency" class="active">Start Marketing Agency</a></li>
                </ul>
                <h1>Your agency's launchpad: Ready for liftoff?</h1>
                <p>Begin your journey to success as you effortlessly launch and scale your marketing agency. Our expert guidance ensures you target monthly revenues of up to $10,000 with clarity and ease.</p>
                <h6><b>$10,000+</b> Minimum profit per month</h6>
                <a href="at-appointment" class="themes-btn">SCHEDULE A FREE CONSULTATION</a>
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
<section class="register-sec padd-tb contentfit">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center offset-lg-2">
                <div class="txtwrp">
                    <h2><?= $brand_name ?? '' ?>'s unbeatable approach to aim for your success</h2>
                    <p>At  <?= $brand_name ?? '' ?>, we specialize in launching and scaling marketing agencies with precision and excellence. Our unbeatable approach combines data-driven insights with personalized strategies to ensure your agency reaches monthly revenues of up to $10,000.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/trust.png" alt="img" />
                    <h3>Unlock growth potential</h3>
                    <p>We leverage data-driven insights to uncover untapped opportunities, helping you create a sustainable business.</p>
                </div>
            </div>

              <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/rate.png" alt="img" />
                    <h3>Tailored solutions</h3>
                    <p>Every business is unique, so we customize strategies that align with your goals and target audience.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/save-money.png" alt="img" />
                    <h3>Continuous optimization</h3>
                    <p>After We Handover, We Don't Rest at Launch; Our Team Continuously Fine-Tunes Strategies for Your Long-term Success.</p>
                </div>
            </div>
            <div class="col-lg-8 text-center offset-lg-2 mt-3">
                <div class="txtwrp">
                    <p>We guide you through every step, leveraging industry expertise and continuous optimization to unlock your business's full potential. With  <?= $brand_name ?? '' ?>, you benefit from tailored solutions that align with your unique goals and audience, and our ongoing support ensures long-term success and growth. Trust <?= $brand_name ?? '' ?> to turn your vision into a thriving, profitable agency.</p>
                    <a href="at-appointment" class="themes-btn">SCHEDULE A FREE CONSULTATION</a>
                </div>
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
                    <p>I am incredibly impressed with <?= $brand_name ?? '' ?><' Drop shipping Shopify Automation service. They optimized my store and automated processes, allowing me to focus on scaling my business. Highly recommend!</p>
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
                    <p>I am thrilled with the results from <?= $brand_name ?? '' ?><'s Amazon FBA Automation service. Their team guided me through every step, making the complex process of setting up managing my Amazon store incredibly straightforward. The comprehensive support and expert advice were invaluable. leading to a successful and profitable venture. I highly recommend <?= $brand_name ?? '' ?> for anyone looking to thrive on Amazon FBA.</p>
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
<!--                    <p>I am thrilled with the results from <?= $brand_name ?? '' ?><'s Amazon FBA Automation service. Their team guided me through every step, making the complex process of setting up and managing my Amazon store incredibly straightforward.I highly recommend <?= $brand_name ?? '' ?> for anyone looking to thrive on Amazon FBA.</p>-->
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
<!--                    <p><?= $brand_name ?? '' ?> was instrumental in helping me start my marketing agency. Their comprehensive approach covered everything from business formation to client acquisition strategies. The team's knowledge and support gave me the confidence to launch and grow my agency successfully. I couldn't have done it without <?= $brand_name ?? '' ?><'s expert guidance.</p>-->
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


<!-- price-sec -->
<section class="price-sec padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Priced according to your needs</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="pack-box">
                    <div class="pack-top-box first">
                        <h4>Do it yourself</h4>
                    </div>
                    <div class="pack-inner">
                        <h3>Basic <br> Package</h3>
                        <h3>$599</h3>
                        <p>Take control of your launchpad! We're your trusted copilots, backing you every step of the way</p>
                        <hr>
                        <ul>
                            <li>Create a tailored business strategy to launch your venture.</li>
                            <li>Fuel your business idea with a step-by-step guide for liftoff.</li>
                            <li>We're your mission control, offering unlimited revisions within 30 days.</li>
                            <a href="application" class="themes-btn">Get started</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pack-box">
                    <div class="pack-top-box midel">
                        <ul>
                            <li><img src="assets/images/ATK.png" alt="img" /></li>
                            <li>
                                <h4>Strategist Assist</h4>
                                <h6>Ahmed, 4.8/5 star rating</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="pack-inner">
                        <h3>Pro <br>Package</h3>
                        <h3>$3,999</h3>
                        <p>Elevate your launch with expert guidance at every stage. We ensure a flawless mission, so you can focus on soaring.</p>
                        <hr>
                        <ul>
                            <li>All the features of the Basic Package to fuel your business idea.</li>
                            <li>Our experts ensure a smooth takeoff by setting up everything from scratch.</b></li>
                            <li>16 hours of live call guidance to navigate your business launch like a rocket.</li>
                            <a href="at-appointment" class="themes-btn">Get started</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pack-box">
                    <div class="pack-top-box midel">
                        <ul>
                            <li><img src="assets/images/ATK.png" alt="img" /></li>
                            <li>
                                <h4>100% Assist</h4>
                                <h6>Ahmed, 4.8/5 star rating</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="pack-inner">
                        <div class="value">Best Value</div>
                        <h3>Advanced <br> Package</h3>
                        <h3>$12,999 <span>You sit back and relax</span></h3>
                        <p>Supercharge your launch with Autolauncher technology. We'll manage the base, while you take the helm of your rocket to success.</p>
                        <hr>
                        <ul>
                            <li>Strap in with Autolauncher technology to supercharge your venture.</li>
                            <li>A dedicated account manager ensures a strategic trajectory to success.</li>
                            <li>Enjoy weekly 1-1 calls for a mission-critical approach.</li>
                            <li>Benefit from 250 hours of comprehensive guidance, like a rocket on its mission to the stars.</li>
                            <a href="application" class="themes-btn">Get started</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- price-sec -->

<section class="step-sec combopack affordable-sec ">
    <div class="container">
        <div class="row testament">
           <div class="col-lg-6 my-auto">
               <h2 class="">Launch your marketing agency with <?= $brand_name ?? '' ?></h2>
                <h3><img src="assets/images/Build-the-right-mindset.svg" alt="img" class="img-size">  Build the right mindset</h3>
                <p>We kick off the process by aligning your mindset with the journey to business success. A strong, focused mindset is the foundation of your agency's liftoff.</p>
                   
                <h3><img src="assets/images/Trust-in-the-journey.svg" alt="img" class="img-size"> Trust in the journey</h3>
                <p>Trust is pivotal. We guide you to maintain unwavering trust in your journey. Distractions can be like turbulence; staying the course is crucial.</p>

                <h3><img src="assets/images/Assemble-your-dream-team.svg" alt="img" class="img-size"> Assemble your dream team</h3>
                <p>Through a strategic planning, here we help our client’s to go step by step with the strategy we build and the guidance to build a team.</p>
                
                <h2 class="noweight">Why do you need to start a marketing agency?</h2>
                
                <h3><img src="assets/images/Laying-the-foundation.svg" alt="img" class="img-size"> Laying the foundation</h3>
                <p>Let's return to the essentials and uncover the building blocks of a thriving agency. Learn the latest strategies and gain access to essential tools and software.</p>
                
                <h3><img src="assets/images/Systems-Processes.svg" alt="img" class="img-size"> Systems + Processes</h3>
                <p>We'll steer you toward setting up your agency for success. This involves configuring your corporate structure, managing taxes and accounting, setting the right prices for your services, and establishing efficient client communication.</p>
                
                <h3><img src="assets/images/Finding-leads-%26-setting-meetings.svg" alt="img" class="img-size"> Finding leads & setting meetings</h3>
                <p>Learn the art of lead generation and efficient communication. We'll help you schedule meetings with potential clients, and provide tips on various outreach strategies. Launch your agency journey with confidence.</p>

           </div>
           <div class="col-lg-5 offset-lg-1">
               <div class="trade-box">
                    <div class="d-flex">
                    <div>
                       <h3>During your consultation call with  <?= $brand_name ?? '' ?>, you'll receive</h3>
                       <h5></h5>
                       <h6>Free 30mins consultation</h6>
                       <a href="at-appointment" class="themes-btn">SCHEDULE A FREE CONSULTATION</a>
                    </div>
                    <div>
                        <img src="assets/images/ATK.png" alt="img" />
                    </div>
                    </div>
                    <hr>
                    <p style="padding-left: 0px;">Discover strategies to not only achieve success but also sustain it in the ever-changing business landscape.</p>
                    <ul>
                        <li><b>Personalized Guidance:</b> Receive one-on-one advice tailored to your specific business or entrepreneurial goals.</li>
                        <li><b>Problem Solving:</b> Address challenges, roadblocks, and uncertainties with expert solutions and strategies.</li>
                        <li><b>Strategic Insights:</b>  Gain valuable insights into market trends, competition, and growth opportunities.</li>
                        <li><b>Actionable Plans:</b> Develop concrete action plans to implement immediately for business improvement.</li>
                    </ul>
                </div>
           </div>
        </div>
    </div>
</section>



<!-- means-sec -->
<section class="means-sec style padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="imgwrp">
                <img src="assets/images/marketing-Second-Fold.jpg" alt="img" />
                  <div class="upper first image-lable">
                    <div class="txtwrp">
                      <p>Achieved best seller status in your category!</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h2>How <?= $brand_name ?? '' ?> makes iIt happen.</h2>
                <p><?= $brand_name ?? '' ?> is dedicated to delivering a revolutionary online business program, setting new industry standards. Our goal is to nurture and empower the next generation of agencies. </p>
                <p>We challenge outdated business strategies and aim to boost your income by at least threefold. You don't need prior industry experience; <?= $brand_name ?? '' ?><'s proven formula helps beginners start and grow their agencies profitably. We also empower 6-figure agencies to scale into 7-figures.</p>
                <h2> Streamline your operations for maximum benefit.</h2>
                
                
                <p><b>Optimize your inventory and sales with our automation tools</b></p>
                
                <p>At  <?= $brand_name ?? '' ?>, we enhance your operational efficiency to drive sales growth. Whether you operate with FBA, FBM, or PL, our Amazon seller specialists manage listings, orders, product sourcing, and inventory. With state-of-the-art automation tools, your store operates seamlessly round the clock, ensuring continuous performance.</p>
                <a href="at-appointment" class="themes-btn mt-3">SCHEDULE A FREE CONSULTATION</a>
                <!--<p><b>Make it more in a beneficial way. </b></p>-->
            </div>
        </div>
    </div>
</section>
<!-- means-sec -->


<!-- important-sec -->
<section class="important-sec padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Benefits of launching marketing agency</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/testament-img-1.png" alt="img" />
                    <h3>Accelerate your growth</h3>
                    <p>Our cutting-edge methods will push your agency beyond traditional limits, helping you scale to new heights in record time.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/testament-img-2.png" alt="img" />
                    <h3>Diverse industry success</h3>
                    <p>Our approach transcends industry barriers, ensuring you can excel and profit in any sector, no matter your background.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/testament-img-3.png" alt="img" />
                    <h3>Transformational scaling</h3>
                    <p>Experienced agencies can leverage our methods to propel themselves to new levels of success. Discover how <?= $brand_name ?? '' ?> can elevate your agency today.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="at-appointment" class="themes-btn">SCHEDULE A FREE CONSULTATION</a>
            </div>
        </div>
    </div>
</section>
<!-- important-sec -->

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
                <!--      <input type="hidden" id="location" name="locationURL" value="http://ecomgeekz.com/start-marketing-agency" />-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</form>-->
            </div>
        </div>
    </div>
</section>                <!-- plan-sec -->


<!-- reserve-sec -->
<section class="reserve-sec padd-tb">
    <div class="container">
        <h2 class="text-center mb-5">Start Marketing Agency services include</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Establish-your-agency.svg" alt="img" />
                    <h3>Establish your agency</h3>
                    <p>We help you establish your marketing agency by forming your company and ensuring all legal and administrative details are covered. With <?= $brand_name ?? '' ?><'s guidance, you'll lay a solid foundation for long-term success and compliance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Streamline-your-finances.svg" alt="img" />
                    <h3>Streamline your finances</h3>
                    <p>Our experts assist in setting up your business bank accounts and merchant services, ensuring seamless financial transactions. This enables you to focus on growing your agency without worrying about financial logistics.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Develop-digital-infrastructure.svg" alt="img" />
                    <h3>Develop digital infrastructure</h3>
                    <p>We set up all necessary digital assets, including websites, social media profiles, and branding materials. <?= $brand_name ?? '' ?> ensures your online presence is professional and engaging, helping you attract and retain clients.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Build-your-dream-team.svg" alt="img" />
                    <h3>Build your dream team</h3>
                    <p>Hiring the right team is crucial for success. We guide you through the recruitment process, helping you allocate roles effectively to ensure your agency operates smoothly and efficiently from day one.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Train-for-success.svg" alt="img" />
                    <h3>Train for success</h3>
                    <p>We provide comprehensive onboarding and training for your team, ensuring everyone is aligned with your agency's goals and processes. With  <?= $brand_name ?? '' ?>, your team will be equipped with the skills and knowledge needed to drive your agency forward.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Accelerate-your-growth.svg" alt="img" />
                    <h3>Accelerate your growth</h3>
                    <p><?= $brand_name ?? '' ?> helps you implement strategies for sustained revenue growth and scalability. From lead generation to client retention, we ensure your agency not only survives but thrives in a competitive market.</p>
                </div>
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
       What is included in the "Start Marketing Agency" automation service?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Our "Start Marketing Agency" is an automation service guides you from the initial setup to generating recurring revenue. We handle everything from business formation and digital asset setup to automated marketing processes and team management.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How long does it take to start seeing results with this service?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Typically, you can expect to start seeing results within 90 days. This includes time for setup, automation integration, and initial marketing efforts, setting the stage for recurring revenue.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Do you provide ongoing support after the initial setup?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Yes, we offer continuous support and optimization after the initial setup. Our team monitors performance, makes necessary adjustments, and provides ongoing guidance to help you maximize your recurring revenue.

</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
        What types of businesses can benefit from this automation service?
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Our automation service is ideal for new entrepreneurs, investors, or anyony who is looking to establish a marketing agency and scale their operations efficiently. We tailor our approach to suit your specific business needs and goals.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
       How does <?= $brand_name ?? '' ?> ensure a smooth transition from setup to recurring revenue?
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>We use a strategic approach to ensure a smooth transition, including setting up automated systems, providing strategic marketing guidance, and continuously monitoring performance. This approach helps streamline your operations and optimize for recurring revenue.</p>
      </div>
    </div>
  </div>
  
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
       How does <?= $brand_name ?? '' ?> handle data privacy and confidentiality?
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>We take data privacy seriously and ensure confidentiality throughout our service. Your information and business data are protected with the highest standards of security, and we adhere to strict privacy policies.

</p>
      </div>
    </div>
  </div>
  
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
       How can I book a consultation to learn more about this service?
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>To book a consultation, simply <a href="at-appointment"> click here to book your free consultation</a>call through our website or reach out to us directly at <a class="text-white" href="mailto:<?= $brand_email ?? ' ' ?>"><?= $brand_email ?? ' ' ?></a> or +1 (855) 666-5880. We’ll discuss how our automation service can help you achieve your business goals.</p>
      </div>
    </div>
  </div>


</div>
            </div>
        </div>
    </div>
</section>
<!-- faq-sec -->

<?php include("include/cta-all.php"); ?>
<?php include("include/footer.php"); ?>
<?php 
$title = "Walmart Automation";
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
    <img src="assets/images/walmart-Main-Banner.jpg" class="banne-img" alt="img" />
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-page">
                    <li><a href="<?= $base_url ?? '' ?>">Home</a></li>
                    <li><a href="service">Business Services</a></li>
                    <li><a href="walmart-automation" class="active">Walmart Automation</a></li>
                </ul>
                <h1><?= $brand_name ?? '' ?>: Your Go-To Experts for Walmart Automation</h1>
                <p>Kickstart and scale your Walmart marketplace effortlessly with our comprehensive Walmart Automation services.</p>
                <h6><b>Our "done-for-you" Walmart stores are fully managed eCommerce businesses that work on autopilot.</b></h6>
                <a href="#_" data-bs-toggle="modal" data-bs-target="#infoModal" class="themes-btn">Schedule a free call</a>
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
            <div class="col-lg-8">
                <h2>Launch with <?= $brand_name ?? '' ?>’s Walmart Automation Services – the ultimate solution for managing your Walmart seller account.</h2>
                <p>Our team of experts provides a full suite of services to help you efficiently manage your account, optimize your operations, and increase your sales.</p>
            </div>
            <div class="col-lg-4">
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
                    <h3>Scale with Ease</h3>
                    <p>Enjoy seamless business growth as our experts handle the management and optimization of your Walmart store, allowing you to reap the benefits without the hassle.</p>
                </div>
            </div>

              <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-Simple-steps.svg" alt="img" />
                    <h3>Financial freedom</h3>
                    <p>With Walmart automation from  <?= $brand_name ?? '' ?>, you gain a dependable income stream, freeing you from financial stress and giving you more time to focus on what matters most.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-Earn-five-figures.svg" alt="img" />
                    <h3>Unlock passive income</h3>
                    <p>Revolutionize your financial future with a Walmart automation store. Sit back and enjoy passive income while we take care of everything for you.</p>
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
<section class="step-sec padd-tb tiktok-box">
    <div class="container">
        <div class="row testament">
           <div class="col-lg-6">
               <h2>Why you should invest in a walmart ‘done for you’ store?</h2>
               <h3><img src="assets/images/Walmart-01.svg" alt="img" class="img-size">Instant Access to Walmart's Customer Base</h3>
               <p>Tap into Walmart's vast, loyal customer base right away, boosting your store's visibility and driving traffic without the need to build an audience from scratch.</p>
               
               <h3><img src="assets/images/Walmart-02.svg" alt="img" class="img-size">Effortless Market Expansion</h3>
               <p>Grow your market effortlessly with <?= $brand_name ?? '' ?>’s Walmart automation. Focus on your core business while we manage marketing, sales, and customer service, ensuring smooth expansion.</p>
               
               <h3><img src="assets/images/Walmart-03.svg" alt="img" class="img-size">Expert Store Management</h3>
               <p>Enjoy stress-free store management with the help of <?= $brand_name ?? '' ?>’s expertise, letting you focus on strategic growth while we take care of the day-to-day operations.</p>
               
               <h3><img src="assets/images/Walmart-04.svg" alt="img" class="img-size">Generate passive income</h3>
               <p>Generate steady, passive income with ease through our Walmart automation service. Let <?= $brand_name ?? '' ?> manage your store, and watch your revenue flow in with minimal effort.</p>
               <a href="javascript:(void)" class="themes-btn mt-3" data-bs-toggle="modal" data-bs-target="#infoModal">Launch walmart automation with <?= $brand_name ?? '' ?></a>
           </div>
           <div class="col-lg-5 offset-lg-1 my-auto">
               <!--<div class="imgwrp">-->
               <!-- <img src="assets/images/First-Fold.jpg" alt="img" />-->
               <!-- <div class="upper first image-lable">-->
               <!--     <div class="txtwrp">-->
               <!--       <p>We will take the drivers seat in building, launching , operating and scaling you a 6 or 7 figure automated Tiktok Shop.</p>-->
               <!--     </div>-->
               <!--   </div>-->
               <!--</div>-->
               <div class="legal-img-box">
                    <img src="assets/images/walmart-First-Fold.jpg" alt="img">
                    <div class="legaal-inner">
                        <img src="assets/images/shield.svg" alt="img">
                        <h6>We will take the drivers seat in building, launching , operating and scaling you a 6 or 7 figure automated walmart store.</h6>
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
                <h3>Changing the lives Of ecommerce sellers</h3>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4 col-md-6">
                <h2>700+</h2>
                <h3>Active Sellers </h3>
                <p>Empowering over 700+ active sellers to thrive in ecommerce.</u></b></p>
                
            </div>
            <div class="col-lg-4 col-md-6">
                <h2>185,000+</h2>
                <h3>Orders Processed</h3>
                <p>Efficiently handling over 185,000+ orders with precision and care.</p>
                
            </div>
            <div class="col-lg-4 col-md-6">
                <h2>$2.6M</h2>
                <h3>Members Sales</h3>
                <p>Facilitating over $2.6 million in member sales through effective strategies.</p>
                
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
                  <p><b>Our Walmart automation service sets us apart from the competition with less upfront costs.</b><p>
                       <hr> <ul>
                             <li>Expand your market effortlessly</li>  
                            <li>Boost sales instantly</li>
                            <li>Start earning passive income with a 15%-20% profit margin.</li>
                           
                        </ul>
                        
                  <h6>We cut inefficiencies so you and your team can get back to the work you love.</h6>      
                  <a href="#_" data-bs-toggle="modal" data-bs-target="#infoModal" class="themes-btn">Schedule a free call</a>
                  
                </div>
                <div class="col-lg-6">
                  <img src="assets/images/Walmart.jpg" alt="img" />
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
                <img src="assets/images/walmart-Second-Fold.jpg" alt="img" />
                  <div class="upper first image-lable">
                    <div class="txtwrp">
                      <p>Achieved best seller status in your category!</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h2><?= $brand_name ?? '' ?> Delivers a Highly Efficient Walmart Automated Business</h2>
                <p>What sets us apart from other automation companies is our unwavering commitment to our customers. Unlike competitors who charge high upfront fees and leave you hanging, we offer a flexible monthly fee with no long-term commitment—cancel anytime. </p>
                
                <p>We focus on earning your trust and loyalty through exceptional service and support, not through aggressive sales tactics or hidden charges.</p>
                
                <h2><?= $brand_name ?? '' ?>: Your Trusted Partner for Walmart Automation Services</h2>
                
                <p><b>Client-centric approach</b></p>
                
                <p>Our support goes beyond managing the daily operations of your store. We provide advanced reporting and analytics tools, giving you valuable insights into your store’s performance. </p>
                
                <p>Our team is dedicated to using the best Walmart listing strategies to maximize your success. We’re here to guide you at every step, allowing you to focus on growing your business and achieving your goals.

</p>
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
                <h2>Benefits of launching walmart automation with <?= $brand_name ?? '' ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Optimize%20Your-Inventory.svg" alt="img" />
                    <h3>Expertise and experience</h3>
                    <p>Our experienced professionals bring a wealth of knowledge in Walmart store management and automation, ensuring your store is optimized for higher sales and improved customer satisfaction.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Superior%20Store-Management.svg" alt="img" />
                    <h3>End-to-end solutions</h3>
                    <p>We offer a complete suite of automation services, including inventory management, listing optimization, order processing, and customer support, all customized to fit the unique needs of your business.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Maximum-Efficiency.svg" alt="img" />
                    <h3>Performance-driven profits</h3>
                    <p>Our pricing model is based on a small percentage of your monthly net profits, aligning our success with yours. This ensures our incentives are fully focused on helping you grow and succeed.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="javascript:(void)" class="themes-btn" data-bs-toggle="modal" data-bs-target="#infoModal">Launch walmart automation with <?= $brand_name ?? '' ?></a>
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
                <h4><b>Ready to transform your vision into a successful business?</b></h4>
                <p>Start by sharing key details about your venture with us. We’re here to support you every step of the way as you embark on this journey.</p>
                <h4><b>Tell us more about your business or idea so we can better understand your goals</b></h4>
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
                <!--      <input type="hidden" id="location" name="locationURL" value="http://ecomgeekz.com/walmart-automation" />-->
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
        <h2 class="text-center mb-5">Our walmart automation services include</h2>
        <div class="row">
            
            <div class="col-lg-4 col-md-6">
                
                
                <div class="reserve-box">
                    <img src="assets/images/Setting-Up-Walmart-Seller-Central.svg" alt="img" />
                    <h3>Setting up walmart seller central</h3>
                    <p>We take care of the entire process of setting up your Walmart Seller Central account, ensuring every detail is accurately configured and optimized. From registering your business to integrating payment methods, we make sure your storefront is fully ready for smooth operations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Product-Research-and-Listing.svg" alt="img" />
                    <h3>Product research and listing</h3>
                    <p>Our team conducts in-depth market research to identify top-selling products for your Walmart store. We then craft optimized product listings with engaging descriptions, high-quality images, and targeted keywords to boost visibility and attract more customers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Inventory-Management.svg" alt="img" />
                    <h3>Inventory management</h3>
                    <p>Efficient inventory management is key to maximizing sales and minimizing costs. We use advanced tools and strategies to track stock levels, streamline restocking, and ensure optimal inventory turnover to meet customer demand.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Generate-Sales.svg" alt="img" />
                    <h3>Generate sales</h3>
                    <p>Increasing sales is central to our Walmart Automation services. Through targeted marketing, SEO optimization, and strategic pricing, we work to enhance your store’s visibility and drive high-quality traffic that converts into sales</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Customer-Service.svg" alt="img" />
                    <h3>Order fulfillment</h3>
                    <p>We oversee the entire order fulfillment process—from receiving orders to coordinating with suppliers or third-party logistics partners. Our goal is to ensure timely delivery and customer satisfaction while optimizing shipping costs and logistics.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Customer-Support-and-Management.svg" alt="img" />
                    <h3>Customer support & management</h3>
                    <p>Customer satisfaction is our top priority. Our dedicated support team promptly handles inquiries, resolves issues, and provides excellent service. We efficiently manage returns, refunds, and exchanges, maintaining positive relationships with customers and enhancing your store’s reputation.</p>
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
       What exactly does Walmart Automation entail?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Walmart Automation is a full-service solution where we take care of every aspect of your Walmart storefront. From the initial setup and product listings to order fulfillment and customer service, we manage it all to ensure your store operates efficiently and generates profit.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How can Walmart Automation benefit my business?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Walmart Automation allows you to focus on key business strategies while we handle the day-to-day operations. This service saves you time, boosts efficiency, maximizes sales potential, and gives you access to Walmart's extensive customer base.
</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Is Walmart Automation suitable for new sellers or existing businesses?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Walmart Automation is perfect for both newcomers entering the e-commerce world and established businesses looking to grow their online presence. Our services are customized to support sellers at every stage of their e-commerce journey.
</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
        What sets <?= $brand_name ?? '' ?>'s Walmart Automation apart from other providers?
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p><?= $brand_name ?? '' ?> stands out with a unique combination of expertise, scalability, and flexibility. We use cutting-edge automation tools and strategies to optimize your storefront and maximize profits. Our adaptable payment options and focus on client success set us apart from other providers.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
       How does the pricing structure work for Walmart Automation?
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Our pricing model is designed to align with your success. We charge a percentage of the net profits your Walmart storefront generates each month, ensuring our goals are directly tied to your growth and profitability</p>
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
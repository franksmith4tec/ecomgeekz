<?php 
$title = "Shopify Dropshipping Automation";
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
    <img src="assets/images/Dropshipping-Main-Banner.jpg" class="banne-img" alt="img" />
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-page">
                    <li><a href="<?= $base_url ?? '' ?>">Home</a></li>
                    <li><a href="service">Business Services</a></li>
                    <li><a href="shopify-dropshipping-automation" class="active">Shopify Dropshipping Automation</a></li>
                </ul>
                <h1>Launch Your Profitable Shopify Dropshipping Store Today</h1>
                <p>Running an eCommerce business on Shopify can be overwhelming with all the tasks involved.</p>
                <h6><b><?= $brand_name ?? '' ?> will create and set up a fully optimized Shopify dropshipping store for you, featuring top-selling products, trusted suppliers, and a conversion-focused design, all backed by dedicated support.</b></h6>
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
                <h2>Simplify Your Business with Our Automated Shopify Dropshipping Solution</h2>
            <p>Our Shopify dropshipping automation services take care of repetitive tasks, allowing you to focus on growing your business. We handle everything from store setup and product uploads to design, pricing updates, and more.</p> </div>
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
                    <h3>Expertise and experience</h3>
                <p>With years of experience in creating custom automation for Shopify merchants, our team knows exactly what it takes to successfully streamline store operations.</p></div>
            </div>

              <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-Simple-steps.svg" alt="img" />
                    <h3>Comprehensive services</h3>
               <p>We provide a full suite of automation services, including order processing, inventory management, dynamic pricing tools, SEO optimization, and more. Our all-in-one solutions are designed to save you valuable time.</p> </div>
            </div>

            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-Earn-five-figures.svg" alt="img" />
                    <h3>Achieve More for Less</h3>
                <p>Our budget-friendly pricing plans make advanced automation accessible to businesses of all sizes. We’re dedicated to delivering high-value solutions at competitive prices.  </p></div>
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
               <h2>Our Process for Launching Automated Stores</h2>
               <h3><img src="assets/images/Needs-Assessment.svg" alt="img" class="img-size">Needs assessment</h3>
               <p>We assess your unique requirements and develop a personalized automation strategy designed to maximize efficiency and support your business growth.</p>
               <h3><img src="assets/images/Essential-Automations.svg" alt="img" class="img-size">Key Automations</h3>
               <p>From store design to 3PL integration, we implement essential automation processes to ensure your Shopify dropshipping business operates seamlessly.</p>
               <h3><img src="assets/images/Performance-Monitoring.svg" alt="img" class="img-size">Performance monitoring</h3>
               <p>We actively track your store's performance, making real-time adjustments to optimize efficiency and achieve the best possible results.</p>
               <h3><img src="assets/images/Reporting-and-Refinement.svg" alt="img" class="img-size">Reporting and refinement</h3>
               <p>You’ll receive clear and concise reports as we continuously fine-tune our strategy to enhance your return on investment and drive improved outcomes.</p>
               <a href="javascript:(void)" class="themes-btn mt-3" data-bs-toggle="modal" data-bs-target="#infoModal">Ready to launch shopify dropshipping with <?= $brand_name ?? '' ?></a>
           </div>
           <div class="col-lg-5 offset-lg-1 my-auto">
               <div class="imgwrp">
                <img src="assets/images/First-Fold-2.jpg" alt="img" />
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
                  <p><b>Get access to amazing wholesale products to sell.</b><p>
                       <hr> <ul>
                             <li>Setup Shopify dropshipping store</li>  
                            <li>Research winning Products, Reliable Suppliers</li>
                            <li>Automate the process to increase conversions.</li>
                           
                        </ul>
                        
                  <h6>We cut inefficiencies so you and your team can get back to the work you love.</h6>      
                  <a href="#_" data-bs-toggle="modal" data-bs-target="#infoModal" class="themes-btn">Schedule a free call</a>
                  
                </div>
                <div class="col-lg-6">
                  <img src="assets/images/shopify-dropshipping.jpg" alt="img" />
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
                <img src="assets/images/Second-Fold-2.jpg" alt="img" />
                  <div class="upper first image-lable">
                    <div class="txtwrp">
                      <p>Achieved best seller status in your category!</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h2><?= $brand_name ?? '' ?> Drives Profitable Revenue with Recession-Proof Expertise</h2>
                <p><?= $brand_name ?? '' ?>, an eCommerce success management firm, works closely with clients to build recession-proof Shopify businesses. With our extensive experience, we ensure your store thrives in any economic environment.</p>
                
                <p>Our eCommerce experts stay ahead of trends, offering in-demand products that drive high sales volumes. We handle every aspect of setting up, managing, and scaling your Shopify store, focusing on trending products that keep your business growing.</p>
                <h2><?= $brand_name ?? '' ?>: Streamline and Scale Your Shopify Dropshipping Business
Effortless Dropshipping Model
</h2>
                
                
               <p>We implement a dropshipping model on your branded Shopify store, listing products and purchasing inventory only after making sales. This approach eliminates the risks of upfront inventory costs.</p>
                <p>Our unique business model ensures that you own a valuable digital asset that continuously grows. With Shopify, you retain full control of customer data, allowing us to effectively target and retarget potential buyers.</p>
            
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
                <h2>Benefits of launching shopify dropshipping automation with <?= $brand_name ?? '' ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Optimize%20Your-Inventory.svg" alt="img" />
                    <h3>Optimize for conversions
                    </h3>
                <p>Build, manage, and optimize your store with high ROI products, achieving 15-25%+ profit margins and maximizing conversions.

</p>
</div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Superior%20Store-Management.svg" alt="img" />
                    <h3>Streamlined fulfillment</h3>
               <p>Efficiently manage shipping logistics and fulfillment using our exclusive suppliers, ensuring smooth operations through the dropshipping model.

</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Maximum-Efficiency.svg" alt="img" />
                    <h3>Passive cash flow</h3>
                <p>Scale your store to 6+ figures and beyond, creating a sustainable and passive cash flow with our proven strategies.

</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="javascript:(void)" class="themes-btn" data-bs-toggle="modal" data-bs-target="#infoModal">Ready to launch shopify dropshipping with <?= $brand_name ?? '' ?></a>
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
						<li><img src="assets/images/Mobile-report-01.png"></li>
						<li><img src="assets/images/Mobile-report-02.png"></li>
						<li><img src="assets/images/Mobile-report-03.png"></li>
						<li><img src="assets/images/Mobile-report-04.png"></li>
						<li><img src="assets/images/Mobile-report-05.png"></li>
						<li><img src="assets/images/Mobile-report-06.png"></li>
						<li><img src="assets/images/Mobile-report-01.png"></li>
						<li><img src="assets/images/Mobile-report-02.png"></li>
						<li><img src="assets/images/Mobile-report-03.png"></li>
						<li><img src="assets/images/Mobile-report-04.png"></li>
						<li><img src="assets/images/Mobile-report-05.png"></li>
						<li><img src="assets/images/Mobile-report-06.png"></li>
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
                <h2>Unleash Your Business Potential
                <!--<img src="assets/images/AOF_Logo.svg" alt="logo" />-->
                </h2>
                <h4><b>Ready to transform your vision into a successful business?</b></h4>
                <p>Take the first step by sharing key details about your venture with us. We're here to help you navigate the journey.</p>
                <h4><b>Tell us more about your business or idea so we can understand it better.</b></h4>
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
                <!--      <input type="hidden" id="location" name="locationURL" value="http://ecomgeekz.com/shopify-dropshipping-automation" />-->
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
        <h2 class="text-center mb-5">Our Shopify Dropshipping Automation Services Include</h2>
        <div class="row">
            
            <div class="col-lg-4 col-md-6">
                
                
                <div class="reserve-box">
                    <img src="assets/images/Store-Setup.svg" alt="img" />
                    <h3>Store setup</h3>
                <p>
We create and configure your Shopify store, customizing the design and settings to ensure it attracts and retains customers with a user-friendly, functional layout.
</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Product-Research-and-Listing.svg" alt="img" />
                    <h3>Product research</h3>
                <p>Through in-depth research and analysis, we identify profitable products and niches, setting the stage for a successful Shopify store.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Product-Listings.svg" alt="img" />
                    <h3>Product listing</h3>
                   <p>We add selected products to your store, optimize listings, and ensure a smooth shopping experience for your customers, making it easy for them to browse and buy.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Marketing-Strategies.svg" alt="img" />
                    <h3>Marketing strategies</h3>
                <p>We implement targeted marketing strategies, including SEO and advertising, to promote your store and products, increasing visibility in a competitive marketplace.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Order-Management.svg" alt="img" />
                    <h3>Order management</h3>
              <p>We manage orders efficiently, ensuring smooth transactions and timely product shipments while prioritizing customer satisfaction.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Reputation-Management.svg" alt="img" />
                    <h3>Reputation management</h3>
               <p>We help build and maintain your store’s reputation by managing reviews, customer feedback, and providing excellent service to foster trust and customer loyalty.</p>
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
      What Does Shopify Dropshipping Automation Involve?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <p>Shopify Dropshipping Automation includes setting up and managing a Shopify store where products are sourced from suppliers and shipped directly to customers. This service automates tasks such as product listing, order processing, and fulfillment, minimizing the need for manual involvement.</p>  
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How Can Shopify Dropshipping Automation Benefit My Business?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <p>With Shopify Dropshipping Automation, you can quickly launch an e-commerce store with minimal upfront investment. This service allows you to focus on marketing and scaling your business while delegating inventory management and logistics to third-party suppliers.</p>  
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Is Shopify Dropshipping Automation Suitable for Beginners?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <p>Yes, Shopify Dropshipping Automation is perfect for both beginners and seasoned entrepreneurs. For those new to e-commerce, it offers an easy entry point with low risk, allowing you to test product ideas and assess market demand without dealing with inventory or logistics.</p> </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
      What Sets <?= $brand_name ?? '' ?>'s Shopify Dropshipping Automation Apart from Others?
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p><?= $brand_name ?? '' ?> offers a complete Shopify Dropshipping Automation service, covering everything from product research and store setup to marketing strategies and order management. We prioritize high-quality service, quick customer support, and a strong commitment to your success.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
      How Does the Pricing Model for Shopify Dropshipping Automation Work?
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Our pricing model is clear and competitive. We charge a fee based on the services we provide, including store setup, marketing campaigns, and ongoing support, ensuring transparency and aligning our success with your business growth.</p></div>
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
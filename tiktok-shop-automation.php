
<?php include("include/header.php"); ?>



<body class="hompg inner-main">


<?php include("include/menu.php"); ?>




    <!-- header strat -->

<!-- body -->
<!-- banner-main-sec -->
<section class="banner-main-sec">
    <img src="assets/images/tiktok-Main-Banner.jpg" class="banne-img" alt="img" />
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-page">
                    <li><a href="<?= $base_url ?? '' ?>">Home</a></li>
                    <li><a href="service">Business Services</a></li>
                    <li><a href="tiktok-shop-automation" class="active">TikTok Shop Automation</a></li>
                </ul>
                <h1>Start your TikTok shop and generate passive income every month.</h1>
                <p>Our TikTok shop automation services help you stay ahead in the fast-paced e-commerce world, save time, and open up new opportunities for growth.</p>
                <h6><b>The dedicated team at <?= $brand_name ?? '' ?> utilizes cutting-edge technologies to optimize and enhance your TikTok store, ensuring smooth operations and maximum efficiency.</b></h6>
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
                <h2>Leverage TikTok Shop, one of the most scalable social platforms in the industry.</h2>
                <p>Our automation solutions, from inventory management to order processing, are customized to fit your business's unique needs. This lets you focus on creating engaging content and building connections with your audience while we take care of the behind-the-scenes operations.</p>
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
                    <h3>Digital real estate</h3>
                    <p>A TikTok Shop business is a valuable digital asset that can appreciate over time, potentially worth 3 to 10 times your annual revenue.</p>
                </div>
            </div>

              <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-Simple-steps.svg" alt="img" />
                    <h3>Fully automated</h3>
                    <p>A dedicated team handles custom product research, logistics, and operations, running the business for you so you can sit back and relax.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="register-box">
                    <img src="assets/images/EcomGeekz-Badges-Earn-five-figures.svg" alt="img" />
                    <h3>Passive income</h3>
                    <p>A new stream of passive income and an opportunity to diversify and scale more quickly based on your investments</p>
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
               <h2>Why Should You Launch an Automated TikTok Store?</h2>
               <h3><img src="assets/images/Tiktok-Icons-01.svg" alt="img" class="img-size">Reach a Wide Audience</h3>
               <p>TikTok’s massive user base provides unmatched reach, allowing you to connect with millions of potential customers every day.</p>
               
               <h3><img src="assets/images/Tiktok-Icons-02.svg" alt="img" class="img-size">Engage with trends</h3>
               <p>Tap into trending challenges and hashtags to increase visibility and draw a highly engaged audience to your products.</p>
               
               <h3><img src="assets/images/Tiktok-Icons-03.svg" alt="img" class="img-size">Cost-effective marketing</h3>
               <p>TikTok provides affordable advertising options and organic reach, offering marketing solutions that help you maximize your ROI.</p>
               
               <h3><img src="assets/images/Tiktok-Icons-04.svg" alt="img" class="img-size">Increase brand awareness</h3>
               <p>Creating viral content on TikTok can significantly enhance brand awareness and drive traffic to your ecommerce store.</p>
               <a href="javascript:(void)" class="themes-btn mt-3" data-bs-toggle="modal" data-bs-target="#infoModal">Ready to launch TikTok shop with <?= $brand_name ?? '' ?></a>
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
                    <img src="assets/images/tiktok-First-Fold.jpg" alt="img">
                    <div class="legaal-inner">
                        <img src="assets/images/shield.svg" alt="img">
                        <h6>We will take the drivers seat in building, launching , operating and scaling you a 6 or 7 figure automated Tiktok Shop.</h6>
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
                  <p><b>We build our valued clients cash-flowing TikTok Shops.</b><p>
                       <hr> <ul>
                             <li>Setup and scale your TikTok store</li>  
                            <li>Manage shipping logistics & fulfillment</li>
                            <li>Passive cash flows each month at a 15%-20% profit margin.</li>
                           
                        </ul>
                        
                  <h6>We cut inefficiencies so you and your team can get back to the work you love.</h6>      
                  <a href="#_" data-bs-toggle="modal" data-bs-target="#infoModal" class="themes-btn">Schedule a free call</a>
                  
                </div>
                <div class="col-lg-6">
                  <img src="assets/images/Tiktok.jpg" alt="img" />
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
                <img src="assets/images/tiktok-Second-Fold.jpg" alt="img" />
                  <!--<div class="upper first image-lable">-->
                  <!--  <div class="txtwrp">-->
                  <!--    <p>Achieved Best Seller status in your category!</p>-->
                  <!--  </div>-->
                  <!--</div>-->
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h2><?= $brand_name ?? '' ?> Delivers Profitable Revenue with Recession-Proof Expertise</h2>
                <p>Harness the explosive growth of TikTok with <?= $brand_name ?? '' ?>’s expert management and strategic automation. We ensure strong sales and enhanced visibility for your store by handling everything from marketing to order fulfillment, allowing you to focus on scaling your business while enjoying reliable passive income.</p>
                
                <p>With over five years of experience in eCommerce across multiple platforms, <?= $brand_name ?? '' ?> offers a trusted pathway to building profitable TikTok stores, backed by proven industry expertise and a track record of success.</p>
                
                <h2><?= $brand_name ?? '' ?> takes care of all aspects of your TikTok store, from developing effective marketing strategies to managing order fulfillment, so you don’t have to.</h2>
                
                
                <p><b>Client-centric approach</b></p>
                
                <p>Your success is our priority. <?= $brand_name ?? '' ?> provides transparent communication, detailed performance tracking, and ongoing support to help you excel in the ever-evolving world of TikTok eCommerce.</p>
                
                <p>Ready to grow your eCommerce business effortlessly? Schedule a call with <?= $brand_name ?? '' ?> today and let us help you achieve your goals with ease.</p>
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
                <h2>Benefits of launching TikTok shop automation with <?= $brand_name ?? '' ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Optimize%20Your-Inventory.svg" alt="img" />
                    <h3>Expand your reach</h3>
                    <p><?= $brand_name ?? '' ?> strategies tap into TikTok's vast user base, increasing your brand's visibility and attracting a global audience.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Superior%20Store-Management.svg" alt="img" />
                    <h3>Streamline operations</h3>
                    <p><?= $brand_name ?? '' ?> automate your inventory management, order processing, and customer service for a seamless and efficient operation.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="important-box">
                    <img src="assets/images/EcomGeekz-Badges-Maximum-Efficiency.svg" alt="img" />
                    <h3>Boost your sales</h3>
                    <p><?= $brand_name ?? '' ?> expertise to drive high engagement and conversions with targeted TikTok campaigns tailored for your audience.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="javascript:(void)" class="themes-btn" data-bs-toggle="modal" data-bs-target="#infoModal">Ready to launch TikTok shop with <?= $brand_name ?? '' ?></a>
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
                <h4><b>Ready to transform your vision into a successful business? Share the key details about your venture with us, and let’s take the first step toward achieving your goals. We’re here to guide you every step of the way.</p>
                <h4><b>Help us understand what your business or idea is all about!</b></h4>
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
                <!--      <input type="hidden" id="location" name="locationURL" value="http://ecomgeekz.com/tiktok-shop-automation" />-->
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
        <h2 class="text-center mb-5">Our TikTok shop automation services include</h2>
        <div class="row">
            
            <div class="col-lg-4 col-md-6">
                
                
                <div class="reserve-box">
                    <img src="assets/images/Business-Registration.svg" alt="img" />
                    <h3>Business registration</h3>
                    <p>We handle the registration of your business, establishing the legal foundation necessary for your TikTok shop to run smoothly and in full compliance from day one.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Store-Setup.svg" alt="img" />
                    <h3>Store setup</h3>
                    <p>We design and configure your TikTok shop, making sure it’s visually appealing and optimized to attract and keep customers engaged.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Product-Hunting-and-Research.svg" alt="img" />
                    <h3>Product Research & Sourcing</h3>
                    <p>Our experts identify profitable products and trending niches, ensuring your store offers in-demand items that drive sales and maximize your profit margins.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Product-Listings.svg" alt="img" />
                    <h3>Product listings</h3>
                    <p>We create and optimize product listings, making them enticing and easy for potential customers to find, leading to higher conversion rates.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Marketing-Strategies.svg" alt="img" />
                    <h3>Marketing strategies</h3>
                    <p>We implement powerful marketing tactics, including influencer partnerships, to boost your store’s visibility, drive traffic, and increase sales.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="reserve-box">
                    <img src="assets/images/Order-Fulfillment.svg" alt="img" />
                    <h3>Order fulfillment</h3>
                    <p>Our team takes care of order processing and fulfillment, ensuring fast, accurate delivery while keeping customers satisfied and encouraging repeat purchases.</p>
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
       What Are TikTok Shop Automation Services?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>TikTok Shop Automation services take care of running your TikTok shop, from sourcing products and creating listings to managing orders and customer support, letting you generate passive income with ease.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Why Should I Trust <?= $brand_name ?? '' ?> For TikTok Shop Automation?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>With our seasoned team and a proven history in eCommerce, we’re committed to your shop’s success. We focus on delivering reliable, transparent service while implementing strategies that drive real results.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        How Does the Onboarding Process Work? How Do I Begin?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Starting is easy. Just book a call with us, share your goals, and receive a personalized plan. We’ll take care of everything from setup to marketing and ongoing management</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
        Is TikTok Shop Automation Reliable?
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <p>Absolutely! Trusted TikTok Shop Automation services, like ours, adhere to platform guidelines and deliver genuine, sustainable growth. We prioritize ethical practices and efficient operations to ensure long-term success.</p>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
       Are There Any Hidden Fees in TikTok Shop Automation?
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>No hidden fees. We offer transparent, upfront pricing, so you always know exactly what you’re paying for and can plan your investments with confidence</p>
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
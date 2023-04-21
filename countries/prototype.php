<?php include_once '../fragments/barrehead.php' ?>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?= $city_name ?></title>

    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />



    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url(<?= $hero_src ?>) top center;
            background-size: cover;
            position: relative;
            margin-bottom: -90px;
        }


        .about {
            background: url(<?= $about_src ?>) center center no-repeat;
            background-size: cover;
            padding: 60px 0;
            position: relative;
        }

        .services {
            background: url(<?= $services_src ?>) center center no-repeat;
            background-size: cover;
            padding: 60px 0;
            position: relative;
        }

        .contact {
            padding-bottom: 80px;
            background: url(<?= $contact_src ?>)no-repeat;
            background-size: cover;
            padding: 60px 0;
            position: relative;
        }

        .cta {
            background: linear-gradient(rgba(238, 241, 243, 0.8), rgba(84, 88, 90, 0.8)), url(<?= $cta_src ?>) fixed center center;
            background-size: cover;
            padding: 60px 0;
        }
    </style>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Squadfree
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">
            <div class="logo">
                <h1 class="text-light">
                    <a href="index.html"><span>Squadfree</span></a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li>
                        <a class="nav-link scrollto" href="#portfolio">Portfolio</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown">
                                <a href="#"><span>Deep Drop Down</span>
                                    <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li class="dropdown megamenu">
                        <a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li>
                                <strong>Column 1</strong>
                                <a href="#">Column 1 link 1</a>
                                <a href="#">Column 1 link 2</a>
                                <a href="#">Column 1 link 3</a>
                            </li>
                            <li>
                                <strong>Column 2</strong>
                                <a href="#">Column 2 link 1</a>
                                <a href="#">Column 2 link 2</a>
                                <a href="#">Column 3 link 3</a>
                            </li>
                            <li>
                                <strong>Column 3</strong>
                                <a href="#">Column 3 link 1</a>
                                <a href="#">Column 3 link 2</a>
                                <a href="#">Column 3 link 3</a>
                            </li>
                            <li>
                                <strong>Column 4</strong>
                                <a href="#">Column 4 link 1</a>
                                <a href="#">Column 4 link 2</a>
                                <a href="#">Column 4 link 3</a>
                            </li>
                            <li>
                                <strong>Column 5</strong>
                                <a href="#">Column 5 link 1</a>
                                <a href="#">Column 5 link 2</a>
                                <a href="#">Column 5 link 3</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Explore <?= $city_name ?></h1>
            <h2>The Pearl Of <?= $country ?></h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="content">
                            <h3>What to expect ?</h3>
                            <p style="color:#ffff">
                                The mere mention of <?= $city_name ?> evokes thoughts of a paradise. It's
                                more than a place; it's a mood, an aspiration, a tropical
                                state of mind.
                            </p>
                            <a href="#contact" class="about-btn">Book now <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bi bi-people"></i>
                                    <h4>population count</h4>

                                    <p>upto <?= $population ?> million (2019) person lives in</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-cloud"></i>
                                    <h4>climate</h4>
                                    <p>
                                        <?= $climat ?>
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-cash"></i>
                                    <h4>local currency</h4>
                                    <p>
                                        <?= $local_currency ?>
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-clock-history"></i>
                                    <h4>preview of the history</h4>
                                    <p>
                                        <?= $history ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Our Services</h2>

                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-house-fill"></i></div>
                            <h4 class="title"><a href="">variety of hotels </a></h4>
                            <p class="description">
                                our tarveling agency deals with over 96 hotels all around the
                                world
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-car-front"></i></div>
                            <h4 class="title"><a href="">car rental services </a></h4>
                            <p class="description">
                                we make sure that our clients are able to explore their
                                destination comfortably using our car rental services
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-person"></i></div>
                            <h4 class="title"><a href="#team">tourists' guide</a></h4>
                            <p class="description">
                                we provide a fully trained crew of tourists 'guide ,that helps
                                elevate your experience
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-currency-dollar"></i></div>
                            <h4 class="title"><a href="">Cancellation policy </a></h4>

                            <ul class="description">
                                <li>
                                    <app-icon-text _ngcontent-gis-c165="" _nghost-gis-c134="" ng-reflect-icon="tick" ng-reflect-text="Refundable">
                                        <p _ngcontent-gis-c134="" class="mb-0">
                                            <svg-icon _ngcontent-gis-c134="" ng-reflect-src="assets/icons/tick.svg" ng-reflect-svg-style="[object Object]" class="ng-star-inserted"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" _ngcontent-gis-c134="" aria-hidden="true" style="margin-right: 10px">
                                                    <g id="ok" _ngcontent-gis-c134="">
                                                        <path id="Path" d="M4 13L9 18L20 7" stroke="#90CB83" stroke-width="1.5" stroke-linecap="round" _ngcontent-gis-c134=""></path>
                                                    </g>
                                                </svg></svg-icon><span _ngcontent-gis-c134="" ng-reflect-ng-style="[object Object]" style="width: max-content">
                                                Spot pending (< 40days)</span>
                                        </p>
                                    </app-icon-text>
                                </li>
                                <li>
                                    <app-icon-text _ngcontent-gis-c165="" _nghost-gis-c134="" ng-reflect-icon="tick" ng-reflect-text="Refundable">
                                        <p _ngcontent-gis-c134="" class="mb-0">
                                            <svg-icon _ngcontent-gis-c134="" ng-reflect-src="assets/icons/tick.svg" ng-reflect-svg-style="[object Object]" class="ng-star-inserted"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" _ngcontent-gis-c134="" aria-hidden="true" style="margin-right: 10px">
                                                    <g id="ok" _ngcontent-gis-c134="">
                                                        <path id="Path" d="M4 13L9 18L20 7" stroke="#90CB83" stroke-width="1.5" stroke-linecap="round" _ngcontent-gis-c134=""></path>
                                                    </g>
                                                </svg></svg-icon><span _ngcontent-gis-c134="" ng-reflect-ng-style="[object Object]" style="width: max-content">
                                                Spot confirmed : voucher</span>
                                        </p>
                                    </app-icon-text>
                                </li>
                                <li>
                                    <app-icon-text _ngcontent-gis-c165="" _nghost-gis-c134="" ng-reflect-icon="close-red" ng-reflect-text="Non-refundable">
                                        <p _ngcontent-gis-c134="" class="mb-0">
                                            <svg-icon _ngcontent-gis-c134="" ng-reflect-src="assets/icons/close-red.svg" ng-reflect-svg-style="[object Object]" class="ng-star-inserted"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" _ngcontent-gis-c134="" aria-hidden="true" style="margin-right: 10px">
                                                    <g opacity="0.5" _ngcontent-gis-c134="">
                                                        <path d="M23.5425 23.5425L8.45758 8.45753" stroke="#EF5F8E" stroke-width="2" stroke-linecap="round" _ngcontent-gis-c134=""></path>
                                                        <path d="M23.5424 8.45753L8.45747 23.5425" stroke="#EF5F8E" stroke-width="2" stroke-linecap="round" _ngcontent-gis-c134=""></path>
                                                    </g>
                                                </svg></svg-icon><span _ngcontent-gis-c134="" ng-reflect-ng-style="[object Object]" style="width: max-content">
                                                40 days pre-trip</span>
                                        </p>
                                    </app-icon-text>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Counts Section ======= -->
        <!--<section id="counts" class="counts section-bg">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Happy Clients</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>plane tickets</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Hours Of customer service</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Hard Workers</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Counts Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Leave us a review !</h3>
                    <p>
                        we are an agency that greatly values our customers' review
                        ,insuring a satisfactory service.to helps us improve leave us a
                        feedback
                    </p>
                    <a class="cta-btn" href="#comment">jump to reviews</a>
                </div>
            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Testimonials</h2>
                    <p>reviews of our loyal customers</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    [Bali is] a living postcard, an Indonesian paradise that
                                    feels like a fantasy,
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Wonderful memories of the wonderful service
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Perfect place for all
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Everything was amazing since the very first day
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <!--here -------------7ot iltoggle
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div> End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg1">
            <div class="container">
                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Discover <?= $city_name ?></h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up">
                            <div class="pic">
                                <img src="<?= $pic1 ?>" class="img-fluid" alt="" />
                            </div>
                            <div class="member-info">
                                <h4><?= $pic1_name ?></h4>
                                <span><?= $pic1_place ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="150">
                            <div class="pic">
                                <img src="<?= $pic2 ?>" class="img-fluid" alt="" />
                            </div>
                            <div class="member-info">
                                <h4><?= $pic2_name ?></h4>
                                <span><?= $pic2_place ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic">
                                <img src="<?= $pic3 ?>" class="img-fluid" alt="" />
                            </div>
                            <div class="member-info">
                                <h4><?= $pic3_name ?></h4>
                                <span><?= $pic3_place ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@insat.ucar.tn</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+216 71 70 38 29</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <!--<iframe
                class="mb-4 mb-lg-0"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0"
                style="border: 0; width: 100%; height: 384px"
                allowfullscreen
              ></iframe>-->
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31568.26907436767!2d115.24543978486727!3d-8.496110608896728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d6a992a2b07%3A0xe028854c14cbced9!2sSaraswati%20Temple!5e0!3m2!1sfr!2stn!4v1681520141592!5m2!1sfr!2stn" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        --><?= $iframe_localisation ?>
                    </div>
                    <div class="col-lg-6" id="comment">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your comment has been posted. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">post comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Squadfree</h3>
                            <p class="pb-3">
                                <em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit
                                    veniam excepturi quod.</em>
                            </p>
                            <p>
                                A108 Adam Street <br />
                                NY 535022, USA<br /><br />
                                <strong>Phone:</strong> +1 5589 55488 55<br />
                                <strong>Email:</strong> info@example.com<br />
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">hotel reservation</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">plane tickets</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">customer service</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">refunds</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">car rental service</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>subscribe to our new letter to receive new offers</p>
                        <form action="" method="post">
                            <input type="email" name="email" /><input type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
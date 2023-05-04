<?php include_once '../fragments/barrehead.php';
      $country_id='216';
       $country_name='JLOH';
        $population='421212';

         $climate='42';
          $currency='545';
           $history='../countriesfinal/img/bali1.jpg';
            $hero_src='../countriesfinal/img/bali1.jpg';
             $cta_src='../countriesfinal/img/bali1.jpg';
              $about_src='../countriesfinal/img/bali1.jpg';
               $services_src='../countriesfinal/img/bali1.jpg';
                $contact_src='../countriesfinal/img/bali1.jpg';
                 $pic1='../countriesfinal/img/bali1.jpg';
                 $pic2='../countriesfinal/img/bali1.jpg';
                 $pic3='../countriesfinal/img/bali1.jpg';
                ?>
<style>
    #hero {
        width: 100%;
        height: 100vh;
        background: linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2));
        background-size: cover;
        position: relative;
        margin-bottom: -90px;
    }


    .about {
        background: url("<?= $about_src ?>") center center no-repeat;
        background-size: cover;
        padding: 60px 0;
        position: relative;
    }

    .services {
        background: url("<?= $services_src ?>") center center no-repeat;
        background-size: cover;
        padding: 60px 0;
        position: relative;
    }

    .contact {
        padding-bottom: 80px;
        background: url("<?= $contact_src ?>")no-repeat;
        background-size: cover;
        padding: 60px 0;
        position: relative;
    }

    .cta {
        background: linear-gradient(rgba(238, 241, 243, 0.8), rgba(84, 88, 90, 0.8)), url("<?= $cta_src ?>") fixed center center;
        background-size: cover;
        padding: 60px 0;
    }
</style>
      <!DOCTYPE html>
      <html lang="en">



      <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Squadfree Bootstrap Template - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        
      
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
      
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
        <?php
        include_once '../fragments/barre.php'
        ?>
      
        <!-- ======= Hero Section ======= -->
        <section id="hero">
          <div class="hero-container" data-aos="fade-up" >
            <h1>Explore '<?=  $country_name ?> '</h1>
            <h2>The Pearl Of Indonisia</h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
          </div>
        </section><!-- End Hero -->
      
        <main id="main">
      
          <!-- ======= About Section ======= -->
          <section id="about" class="about" style="background:url('img/<?= $about_src ?>') ">
            <div class="container">
      
              <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                  <div class="content">
                    <h3>What to expect ?</h3>
                    <p>
                    The mere mention of <?= $country_name ?> evokes thoughts of a paradise. It's
                    more than a place; it 's a mood, an aspiration, a tropical
                    state of mind.               </p>
                    <a href="#" class="about-btn">Book now <i class="bx bx-chevron-right"></i></a>
                  </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                  <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                      <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-people"></i>
                        <h4>population count</h4>
                        
                        <p><?= $population ?> </p>
                      
                      </div>
                      <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-cloud"></i>
                        <h4>climate</h4>
                        <p><?= $climate ?> </p>
                      </div>
                      <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-cash"></i>
                        <h4>local currency </h4>
                        <p><?= $currency ?></p>
                      </div>
                      <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-clock-history"></i>
                        <h4>preview of the history</h4>
                        <p> <?= $history ?></p>
                      </div>
                    </div>
                  </div><!-- End .content-->
                </div>
              </div>
      
            </div>
          </section><!-- End About Section -->
      
          <!-- ======= Services Section ======= -->
          <section id="services" class="services">
            <div class="container">
      
              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Our Services</h2>
                <p> public service that provides travel and tourism-related services to the general public on behalf of accommodation or travel suppliers to offer different kinds of travelling packages for each destination.</p>
              </div>
      
              <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-house-fill"></i>
                    </div>
                    <h4 class="title"><a href="">variety of hotels </a></h4>
                    <p class="description">our tarveling agency deals  with over 96 hotels all around the world                            </p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-car-front"></i>
                    </div>
                    <h4 class="title"><a href="">car rental services </a></h4>
                    <p class="description">we make sure that our clients are able to explore their destination comfortably using our car rental services</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-person"></i>
                    </div>
                    <h4 class="title"><a href="">tourist 's guide</a></h4>
                    <p class="description">we provide a fully trained crew of tourists  'guide ,that helps elevate your experience</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-currency-dollar"></i>
                    </div>
                    <h4 class="title"><a href="">refunds </a></h4>
                    <p class="description">insuring our customers ' satisfaction,we offer refund upon cancelation that is atleast 3 days prior to the set date</p>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section>
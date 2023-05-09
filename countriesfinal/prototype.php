<?php include_once '../fragments/barrehead.php';
require_once('countries.php');
if (!isset($_SESSION)) {
    session_start();
}
 $db1=new countries();
$c=$db1->findById($_GET['id']);
foreach ($c as $vars ):

  

      $country_id=$vars['country_id'];
       $country_name=$vars['country_name'];
       var_dump($country_name);

        $population=$vars['population'];

         $climate=$vars['climate'];
          $currency=$vars['currency'];
           $history=$vars['history'];
            $hero_src='../countriesfinal/img/'.$vars['hero_src'];
             $cta_src='../countriesfinal/img/'.$vars['cta_src'];;
            $about_src='../img/'.$vars['about_src'];
               $services_src='../countriesfinal/img/'.$vars['services_src'];
                $contact_src='../countriesfinal/img/'.$vars['contact_src'];;
                 $pic1='../countriesfinal/img/'.$vars['pic1'];;
                 $pic2='../countriesfinal/img/'.$vars['pic2'];;
                 $pic3='../countriesfinal/img/'.$vars['pic3'];;
endforeach; 

               /*  $country_id='216';
                 $country_name='JLOH';
                  $population=421212; 
          
                  $climate='42';
                    $currency='545';
                     $history='../countriesfinal/img/bali1.jpg';
                      $hero_src='../countriesfinal/img/bali1.jpg';
                       $cta_src='../countriesfinal/img/bali1.jpg';
                      $about_src='../img/bali2.jpg';
                         $services_src='../countriesfinal/img/bali1.jpg';
                          $contact_src='../countriesfinal/img/bali1.jpg';
                           $pic1='../countriesfinal/img/bali1.jpg';
                           $pic2='../countriesfinal/img/bali1.jpg';
                           $pic3='../countriesfinal/img/bali1.jpg';  */
                ?>
<style>
   #hero {
  width: 100%;
  height: 100vh;
  background: linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("<?= $hero_src ?>") top center;
  background-size: cover;
  position: relative;
  margin-bottom: -90px;
}


#about {
  background: url("<?= $about_src ?>") center center no-repeat;
  background-size: cover;
  padding: 60px 0;
  position: relative;
}

.services{
  background: url("<?= $services_src ?>");
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
        include_once '../fragments/barre.php';
        if (!isset($_SESSION)){
          session_start();
        }
      ?>
      
        <!-- ======= Hero Section ======= -->
        <section id="hero">
          <div class="hero-container" data-aos="fade-up" >
            <h1>Explore '<?=  $country_name ?> '</h1>
            <h2>a journey you will never forget</h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
          </div>
        </section><!-- End Hero -->
      
        <main id="main">
      
          <!-- ======= About Section ======= -->
          <section id="about" class="about" name="about" style="background:url('img/<?= $about_src ?>') ">
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
                        
                        <p>up to <?=$population ?> </p>
                      
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
          </section><!-- End Services Section -->
          
      
          <!-- ======= Counts Section ======= -->
          <section id="counts" class="counts  section-bg">
            <div class="container">
      
              <div class="row no-gutters">
      
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> </p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>plane tickets</strong> </p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hours Of customer service</strong> </p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Hard Workers</strong> </p>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Counts Section -->
      
          <!-- ======= Cta Section ======= -->
          <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
      
              <div class="text-center">
                <h3>Leave us a review !</h3>
                <p> we are an agency that greatly values our customers ' review ,insuring a satisfactory service.to helps us improve leave us a feedback</p>
                <a class="cta-btn" href="#comment">jump to reviews</a>
              </div>
      
            </div>
          </section><!-- End Cta Section -->
      
          
          <!-- ======= Testimonials Section ======= -->
          <section id="testimonials" class="testimonials section-bg">
            <div class="container">
            
              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Testimonials</h2>
                <p>reviews of our loyal customers</p>
              </div>
      
              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper"><?php
                 require_once( 'comment.php');
      $comment_post_ID =  $country_id ; 
      $db2 = new Persistence();
      $comments = $db2->get_comments($comment_post_ID);
      $has_comments = (count($comments));
      if ($has_comments>0){
        
          foreach ($comments as $comment) {
            
      if (isset($_SESSION[ 'user_name'])){?>
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <p id="comment_<?= $comment[ 'com_id']; ?>">
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <?php echo($comment[ 'content']); ?>                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                      <h3><?php echo($comment[ 'user_name']. '  '.$comment[ 'user_last_name']);
                        {if ($_SESSION['user_name']=="admin" ||$_SESSION[ 'user_name']==$comment[ 'user_name'] ){
                  
                  echo('<form id ="deleting" method="post" action="delete_comment.php">
                   <input type="hidden" name="com_id" value="'.$comment[ 'com_id'].' ">
                   <input type="hidden" name="cou_id" value="'.$_GET['id'].'">
                   <script>
                   function submitForm() {
                     document.getElementById("deleting").submit();
                   }
                 </script>
                   <span id="boot-icon" class="bi bi-trash" style="font-size:15px" onclick="submitForm()"></span>
                   </form>');

                 
                }}}else echo (' <div class="swiper-slide">
                <div class="testimonial-item">
                  <p id="comment_' .$comment['com_id'].'; ?>">
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    '.$comment[ 'content'].');                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>'.$comment[ 'user_name'].'  '.$comment[ 'user_last_name']);?></h3>
                    </div>
                  </div><!-- End testimonial item -->
      
                  <?php }}?>
                </div>
                <div class="swiper-pagination"></div>
      
              </div>
      
            </div>
          </section><!-- End Testimonials Section -->
      
          <!-- ======= Team Section ======= -->
          <section id="team" class="team">
            <div class="container">
      
              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>popular destinations </h2>
              </div>
      
              <div class="row">
      
                <div class="col-lg-4 col-md-6">
                  <div class="member" data-aos="fade-up">
                    <div class="pic"><img src="<?= $pic1 ?>"  class="img-fluid" alt=""></div>
                    <div class="member-info">
                      
                      
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6">
                  <div class="member" data-aos="fade-up" data-aos-delay="150">
                    <div class="pic"><img src="<?= $pic2 ?>" class="img-fluid" alt=""></div>
                    <div class="member-info">
                   
                      
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6">
                  <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="pic"><img src="<?= $pic3 ?>" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      
                      
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Team Section -->
      
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
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>contact@example.com</p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                  </div>
                </div>
      
              </div>
      
              <div class="row">
      
               
      <!-- Wrapper container -->
      <div class="container py-4" name="commentsection" class="commentsection" id="commentsection">
      
        <!-- Bootstrap 5 starter form -->
        <form  action="post_comment.php" method="post" role="form" class="commenting">
      
      
          <!-- Name input -->
          <div class="mb-3">
            <label class="form-label" for="name">first name</label>
            <input class="form-control" name="comment_author" id="comment_author" type="text" placeholder="Name" value="<?php if (isset($_SESSION['user_name'])){ echo( $_SESSION['user_name']);} ?>" data-sb-validations="required" disabled/>
          </div>
      
          
          <!-- Message input -->
          <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" name="content" id="content"  type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
          </div>
      <!-- Form submissions success message -->
      <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">Form submission successful!</div>
          </div>
      
          <!-- Form submissions error message -->
          <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">please sign-up first <a href="../login/signin.php"> here </a></div>
          </div>
          
      <!-- comment_post_ID value hard-coded as 1 --> 
          <input type="hidden" name="comment_post_ID" value="<?= $country_id ?>" id="comment_post_ID" />
          <input type="hidden" name="user_id" value="<?php if( isset( $_SESSION['user_id'])){ echo $_SESSION['user_id'];}?>" id="'user_id'" />

          <!-- Form submit button -->
          
          <div class="d-grid">
      
            <button <?php 
            if (!isset($_SESSION['user_name'])){ echo( 'disabled' ) ; } ?> class="btn btn-primary btn-lg" type="submit">Submit</button>
            
          </div>
          <?php if (!isset($_SESSION['user_name'])){ echo('<div >
        please sign-up first <a href="../login/signin.php"> here </a>') ;} ?> 
      </div>
      
        </form>
      
        </div>
              </div>
      </div>
            
          </section><!-- End Contact Section -->
      
        </main><!-- End #main -->
      
        <!-- ======= Footer ======= -->
        <footer id="footer">
          <div class="footer-top">
            <div class="container">
              <div class="row">
      
                <div class="col-lg-4 col-md-6">
                  <div class="footer-info">
                    <h3>Squadfree</h3>
                    <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
                    <p>
                      A108 Adam Street <br>
                      NY 535022, USA<br><br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>
                      <strong>Email:</strong> info@example.com<br>
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
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-2 col-md-6 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">hotel reservation</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">plane tickets</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">customer service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">refunds</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">car rental service</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-4 col-md-6 footer-newsletter">
                  <h4>Our Newsletter</h4>
                  <p>subscribe to our new letter to receive new offers</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
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
              
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </footer><!-- End Footer -->
      
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
  
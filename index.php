<?php

if($_SERVER['REQUEST_METHOD']== 'POST')
{
  $user = filter_var ($_POST['name'], FILTER_SANITIZE_STRING);
  $mail = filter_var ($_POST['email'],FILTER_SANITIZE_EMAIL);
  $sub  = filter_var ( $_POST['subject'], FILTER_SANITIZE_STRING);
  $msg  = filter_var ($_POST['message'],FILTER_SANITIZE_STRING);

  $formErrors = array();
  if(strlen($user) <= 3)
  {
    $formErrors [] = 'UserName must be larger than <strong> 3</strong> characters';
  } 
  if(strlen($msg) < 10)
  {
    $formErrors [] = 'Message can not be less than <strong>10</strong> characters';
  } 

  $headers = 'From: '.  $mail  . '\r\n';
  $myEmail = 'yazan3-10@hotmail.com';
  $subject = 'Contact Form';
 if(empty($formErrors))
 {
   mail( $myEmail , $subject ,$msg , $headers );
   $user ='';
   $mail ='';
   $sub  ='';
   $msg  ='';
   $success = '<div class="alert alert-success">We Have Rcieved Your Message</div>';
 }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tom Export LLC </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <!--
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
-->
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Tom Export LLC</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          </li>
          <li><a href="#contact">Contact</a></li>
          <!--   <li><a href="AboutUs.html">More About Us</a></li>    -->

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Tom Export LLC</strong></h3>
      <h1>WE ARE YOUR KEY TO BE IN GCC MARKET </h1>
      <h2></h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h3>Learn More <span>About Us</span></h3>
          <p>WE ARE YOUR KEY TO BE IN GCC MARKET.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            OUR VISION To be recognised as excellent and effective leaders in business consulting in the whole GCC
              market
              and in both public and private sector enterprises.
            </p>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             
              Central Europe Consulting & Services is a full-scope and modern consulting agency powered by industry
              leaders.
            </p>
            <a href="AboutUs.html" style="margin-left: 82px; padding: 13px 42px;" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome <span>Services</span></h3>
         
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="ri-calendar-todo-line"></i></div>
              <h4 class="title"><a href="">Private Equity</a></h4>
              <p class="description">We advise investors across the entire investment life cycle.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Customer Strategy & Marketing</a></h4>
              <p class="description">Build a customer focusedand growthoriented organization.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Agile</a></h4>
              <p class="description">Become faster, more flexible, and intensely customer focused</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Transformation</a></h4>
              <p class="description">Change the trajectory of your business and achieve extraordinary results.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="containe<section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-4 col-6 col-6">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a>Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a>Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a>Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a>Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a>Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a>Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a>Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a>Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a>Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a>Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a>Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a>Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Talk to us to start working directly ....
            We have long experience working and dealing with many companies and our hopes speak for us</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->


    <!-- ======= F.A.Q Section ======= -->
    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>Let's talk</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d35252.0903800533!2d84.9829095890165!3d56.480583471007975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRussia%2C%20634021%2C%20Tomsk%2C%20Uchebnay%2042%2C%20of.%2026%2C!5e0!3m2!1sen!2sbg!4v1588190960451!5m2!1sen!2sbg"
            frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p> Russia, 634021, Tomsk, Uchebnay 42, of. 26,</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>tomexportaj@gmail.com</p>
                <p>dr_ayyoub71@yahoo.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>Russia office : + 7 960 970 33 31</p>
                <p> Jordan Office : + 962 79 65 65 319</p>

              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
    
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"  class="contact-form">
         
             
             <?php 
             if(! empty($formErrors)){?>

            <div style="padding: 1.30rem 1.30rem;"  class="alert alert-danger alert-dismissible " role="start">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
             <?php

               foreach($formErrors as $error)
               {
     
                  echo $error . '<br>';
               }
               ?>
                  </div>
          <?php } ?>
            <?php
            if(isset( $success))
            {
              echo  $success;
            } 
            ?>
          
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php if(isset($user)){echo $user;} ?>" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" value="<?php if(isset($mail)){echo $mail;} ?>" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="<?php if(isset($sub)){echo $sub;} ?>" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us"  placeholder="Message" > <?php if(isset($msg)){echo $msg;} ?> </textarea>
                <div class="validate"></div>
              </div>
            <!--<div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->  
              <div class="text-center"><button style="background: #e43c5c; border: 0; padding: 10px 28px; color: #fff;
                   border-radius: 50px;" class="btn  waves-effect w-md waves-light m-b-5" type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Central Europe</span></strong>. All Rights Reserved
        </div>

      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
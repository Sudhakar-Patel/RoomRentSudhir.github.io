<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
   .btn1:hover{
  background:orange;
  color:white;
 }
</style>
<body style="background:linear-gradient( 135deg, rgb(230, 14, 14),rgb(46, 43, 43),black)">

 <!-- ======= Header ======= -->

 <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><i class="bi bi-house"></i>Room<span class="text-danger">Rent</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li ><a class="nav-link  scrollto active " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto  " href="rooms.php">Rooms</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto " href="about.php">About us</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="search" class="get-started-btn scrollto btn1" data-bs-toggle="modal" data-bs-target="#m1">Search</a>
    
    </div>
    
    </header><!-- End Header -->

             <?php
include'search.php';
             ?>

            



  <?php
include 'team.php';
?>

<!-- ======= About Section ======= -->
<section id="about" class="about" style="margin-top:-70px">
      <div class="container">
      <div class="section-title">
          <h2>About Us</h2>
          <p class="">Check our Programs</p>
        </div>

        <div class="row text-light" data-aos="fade-up">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3> we understand that finding the perfect room or tenant for your living space can be a challenging task</h3>
            <p class="fst-italic">
    That's why we've created a user-friendly and reliable platform that connects landlords and tenants seamlessly. Whether you're a property owner looking to fill a vacant room or a tenant in search of your dream living space, we've got you covered!
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Extensive Room Listings</li>
              <li><i class="ri-check-double-line"></i> User Profiles and Reviews</li>
              <li><i class="ri-check-double-line"></i> Tenant and Landlord Resources</li>
            </ul>
            <p>
            If you have any questions, suggestions, or feedback, please don't hesitate to reach out to our team. We're committed to continuously improving our platform to better serve your needs.

Thank you for choosing RoomRent.com, where your ideal room or tenant is just a click away!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

     
    <?php
    include 'footer.php';
    ?>

  <div id="preloader"></div>
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
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
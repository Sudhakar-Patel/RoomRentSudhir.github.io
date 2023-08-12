

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>rooms page</title>
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
  card:hover{
    data-aos:pop-up;
  }

  .btn1:hover{
  background:orange;
  color:white;
 }
.navbar1{
    background: rgba(0, 0, 0, 0.2);
}
.location:hover{
  background:grey; 
}
a{
  color:yellow;
}
@media(max-width:600px){
  .navbar1{
    visibility:hidden;
  }
  .header1{
   margin-top:-100px;
  }
  @media(max-width:600px){
   header> .logo1{
      font-size:22px;
    }
  }
}
@media(min-width:601px){
  .login2{
 visibility:hidden; 
}
.logo1{
  font-size:25px;
  font-weight:bold;
}
}

</style>



<body style="background:linear-gradient( 135deg, rgb(230, 14, 14),rgb(46, 43, 43),black)">

<div class="container-fluid d-flex navbar1 bg-light text-dark text-center "id="top"style="justify-content:space-between;">
    <div class="d-flex " >
<h5>Call Us: <b class="icon bi bi-telephone">+91 6266339885</b></h5>
    <h4 class="mx-2">|</h4>
               <a href="#" class="twitter m-1"target="_blank"><i class="bx bxl-twitter text-primary"></i></a>
                <a href="#" class="facebook m-1"target="_blank"><i class="bx bxl-facebook text-primary"></i></a>
                <a href="" class="instagram m-1" target="_blank"><i class="bx bxl-instagram text-primary"></i></a>
                <a href="#" class="google-plus m-1"target="_blank"><i class="bx bxl-skype text-primary"></i></a>
                <a href="#" class="linkedin m-1"target="_blank"><i class="bx bxl-linkedin text-primary"></i></a>
    </div>

    <div class=" d-flex ">
    <button class="border border-light bg-danger  mx-4"><a class="text-light h5"href="sign1.php">Login as Customer</a></button>
    <button class=" bg-primary border border-light  mx-4"><a class="  text-light h5" href="sign2.php">Login as Seller</a></button>
<div>
</div>
</div>
</div>
</div>
</div>
<!-- --------------------------------------------------header------------- -->
<header id="header" class="sticky-top header1">


    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo1 me-auto me-lg-0 "><a href="index.html"><i class="bi bi-house"></i>Room<span class="text-danger">Rent</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li ><a class="nav-link  scrollto active " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto  " href="rooms.php">Rooms</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto " href="about.php">About us</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <div class=" d-flex login2">
    <button class="border border-light bg-danger  mx-4"><a class="text-light h5"href="sign1.php">Login as Customer</a></button>
    <button class=" bg-primary border border-light  mx-4"><a class="  text-light h5" href="sign2.php">Login as Seller</a></button>
<div>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="search" class="get-started-btn scrollto btn1"  data-bs-toggle="modal" data-bs-target="#m1"><i class="bi bi-house"> </i> Search</a>

    </div>
    
    </header><!-- End Header -->

             <?php
include'search.php';
             ?>

        <!-- -----------------------------------------------------------------------------carousel     -->

         <!-- ======= Features Section ======= -->
 <?php
include'carousel.php';
 ?>

<!-- -------------------------location-------------------- -->


<div class="container mt-5 text-center">
    <h1 class="text-light">Rooms Availables in <span class="text-info">Various Locations</span></h1>
    <div class="row d-flex justify-content-center center1">
        <div class="col-md-3 m-3 p-2  border location">
            <h1><a class="text-warning" href="ex1.php">Shankar Nagar</a></h1>
        </div>
        <div class="col-md-3 m-3 p-2 border location">
            <h1><a  class="text-warning" href="ex2.php">Telibandha</a></h1>
        </div>
        <div class="col-md-3 m-3 p-2 border location">
            <h1><a  class="text-warning" href="ex3.php">Ghadi Chowk</a></h1>
        </div>
        <div class="col-md-3 m-3 p-2 border location">
            <h1><a   class="text-warning "href="ex4.php">Railway Station</a></h1>
        </div>
        <div class="col-md-3 m-3 p-2 border location">
            <h1><a  class="text-warning" href="ex5.php">Kabir Nagar</a></h1>
        </div>
        <div class="col-md-3 m-3 p-2 border location">
            <h1><a  class="text-warning"href="ex6.php">Tatibandh</a></h1>
        </div>
        <div class="col-md-3 m-3 p-2 border location">
            <h1><a  class="text-warning" href="ex7.php">Santoshi Nagar</a></h1>
        </div>
        <div class="col-md-3 m-3 p-2 border location ">
            <h1><a  class="text-warning" href="ex8.php">Mandir Hasoud</a></h1>
        </div>
    </div>
</div>


<!-- ----------------rooms section--------- -->
<!-- --------------- bachelors rooms section------- -->
<!-- --------------- ------- -->
<div class="container mt-5">
<?php
include 'room.php';

?>
  </div>
  <?php
  include'footer.php';
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






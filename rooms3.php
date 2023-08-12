

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

 

</style>

<body style="background:linear-gradient( 135deg, rgb(230, 14, 14),rgb(46, 43, 43),black)">

  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-success">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Room<span class="text-danger">Rent</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li ><a class="nav-link  scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto active " href="rooms.php">Rooms</a></li>
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

<!-- ----------------rooms section--------- -->
<!-- --------------- bachelors rooms section------- -->
<!-- --------------- ------- -->

<div class="card col-md-4 col-6 text-center mb-2 "data-aos="fade-down">
  <h1 class="text-center text-light">Rooms for bachelors </h1>
  <div class="row ">


<!-- php section-------------------------- -->

  <?php

$connect=mysqli_connect("localhost","root","","room_rent");
if(!$connect){
    echo "connection failed:".mysqli_connect_error();
    exit;
}

// $_SESSION['category']='backelors';

 $query="select * from rooms where  category='families' or category='both' ";

$result=mysqli_query($connect,$query);
if(!$result){
    echo "error:".mysqli_error($connect);
    exit;
    
}
while($key=mysqli_fetch_array($result)){



?>


    <div class="card col-md-4 col-6 text-center mb-2  " >
      <div class="card-body" data-aos="zoom-in" data-aos-delay="200">
        <img class="img-fluid"  src="<?php echo $key['image'] ?>" alt="">
      </div>
      <div class="card-footer">
        <h1>  Rs.<?php echo $key['price'] ?>/-</h1>
      <h6><?php echo $key['description'] ?></h6>
        <h4><?php echo $key['location'] ?></h4>
        <button class="btn btn-success "><a href="rooms1.php?q=<?php echo $key['r_id'];?>">View Room</a></button>


      </div>
    </div>

    <?php
}
?> 
                  

 </div>
</div>


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






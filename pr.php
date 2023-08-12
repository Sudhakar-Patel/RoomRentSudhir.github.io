

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


<body style="background:linear-gradient( to left, rgb(230, 14, 14),rgb(46, 43, 43),black)">


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

  <?php
 
            $connect=mysqli_connect("localhost","root","","room_rent");
            if(!$connect){
                echo "connection failed:".mysqli_connect_error();
                exit;
            }
          ?> 
            

    <div class="carousel-item active">
        <?php
 $query="select * from banners where id=1 ";
 $result=mysqli_query($connect,$query);

 while($key=mysqli_fetch_array($result)){
 
 ?>

        
      <img src="<?php echo $key['image'] ?>" class="d-block img-cover"style="width:900px; " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rs. <?php echo $key['price'] ?>/-</h5>
        <p><?php echo $key['location'] ?></p>
      </div>
    </div>
    <div class="carousel-item">
    <?php
 $query="select * from banners where id=2 ";
 $result=mysqli_query($connect,$query);

 while($key=mysqli_fetch_array($result)){
 
 ?>
    <img src="<?php echo $key['image'] ?>" class="d-block img-cover"style="width:900px; " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rs. <?php echo $key['price'] ?>/-</h5>
        <p><?php echo $key['location'] ?></p>
      </div>
    </div>
    <div class="carousel-item">
    <?php
 $query="select * from banners where id=1 ";
 $result=mysqli_query($connect,$query);

 while($key=mysqli_fetch_array($result)){
 
 ?>
    <img src="<?php echo $key['image'] ?>" class="d-block  img-cover" style="width:900px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rs. <?php echo $key['price'] ?>/-</h5>
        <p><?php echo $key['location'] ?></p>
      </div>
    </div>
    <?php
            }
            ?>
            <?php
 }
 ?>
             <?php
 }
 ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

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

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
    div{
        border-radius:20px;
    }
    @media(max-width:600px){
      .mob{
        font-size:30px;
        margin-top:10px;
      }
    }
  
</style>

<body style="background:linear-gradient( to left, rgb(230, 14, 14),rgb(46, 43, 43),black)">

<!-- -----------------php section-----------  -->
<?php

$connect=mysqli_connect("localhost","root","","room_rent");
if(!$connect){
    echo "connection failed:".mysqli_connect_error();
    exit;
}
session_start();
$location=$_REQUEST['location'];
$_SESSION['location']=$location;
$category=$_REQUEST['category'];
$price=$_REQUEST['rent'];
?>
  <!-- hamberger section----------------- -->
  <nav  style="--bs-breadcrumb-divider: '>';" class="bg-light h3 fixed-top">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item text-light"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item text-light"><a href="rooms.php">Search</a></li>
                  <li class="breadcrumb-item text-danger active"><?php echo $_SESSION['location']?></li>
                </ol>
              </nav>  


<!-- ----------------rooms section--------- -->

<!-- --------------- search rooms section------- -->
<div class="container pt-5 mt-5 "data-aos="fade-down">

  <p class="text-light">Showing results for Room in <span class="h4">
    <?php echo $_SESSION['location'] ?></span></p>

 
  <div class="row ">


<!-- php section-------------------------- -->
  

<?php
 $query="select * from rooms where location='$location' and (category='$category' or category='both') and price between $price";
$result=mysqli_query($connect,$query);

if(!$result){
    echo "error:".mysqli_error($connect);
    exit;
    // echo "error";
}
while($key=mysqli_fetch_array($result)){
?>
  



<div class="col-md-4 col-12  ">
<img class=""style="height:300px" src="<?php  echo $key['image'] ?>" alt="">
</div>
<div class="col-md-8 col-12 bg-light  d-flex text-center mob">
  <div class="col-md-8 ">
<span class="badge bg-warning"><i class="bi bi-star me-1"></i> Feature</span>
<h1><?php  echo $key['name'] ?></h1>
<div ><i class="icon"></i><p>At <?php  echo $key['location'] ?></p></div>
<h1>  Rs.<?php echo $key['price'] ?>/-</h1>
      <h6><?php echo $key['description'] ?></h6>
        <h4><?php echo $key['location'] ?></h4>
        <button class="btn btn-dark "><a href="rooms1.php?q=<?php echo $key['r_id'];?>">View Room</a></button>
</div>
<div class="col-md-4">
 <b> <i class=" bi bi-heart"></i></b>
</div>
</div>


<hr>

   
 <?php
}
?>


</div>
</div>

<!-- -----------pagination----------- -->

<!-- <nav aria-label="..."  >
  <ul class="pagination justify-content-center">
    <li class="page-item disabled  ">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active"aria-current="page">
      <a class="page-link" href="page1.php">1</a></li>
    <li class="page-item " >
      <a class="page-link" href="page2.php">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="page3.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="page2.php">Next</a>
    </li>
  </ul>
</nav> -->

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



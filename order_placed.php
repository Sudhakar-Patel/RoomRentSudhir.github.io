
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Order placed page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  body {
    font-family: "Open Sans", sans-serif;
    /* background: #f6f9ff; */
    color: #444444;
    background:url('assets/img/4A5.gif');
    background-size:cover;
  }
  @media(max-width:600px){
    .small{
      font-size:5px;
    }
  }
</style>

<body >


<!-- hamberger section----------------- -->
<nav style="--bs-breadcrumb-divider: '>';" class=" bg-success h3 fixed-top" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-light"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item text-light"><a href="rooms.php">Rooms</a></li>
      <li class="breadcrumb-item text-light"><a href="rooms1.php">Description</a></li>
      <li class="breadcrumb-item text-light"><a href="book_rooms.php">Booking</a></li>
      <li class="breadcrumb-item text-danger active">Order Placed</li>
    </ol>
  </nav>

  <!-- ======= Features Section ======= -->
  <section id="features" class="features mt-5 justify-content-center">
    <div class="container " data-aos="fade-up">
<div class="row ">
      
<?php
session_start();
      $connect=mysqli_connect("localhost","root","","room_rent");
      $id= $_SESSION['r'];
      $query="select * from rooms where r_id='$id'";
$result=mysqli_query($connect,$query);

while($key=mysqli_fetch_array($result)){



?>       
<div class="container">
  <div class="row">
    <div class="col-md-6 "data-aos="fade-left" data-aos-delay="100">
  <div class="section-title">
            <h2>Room's Owner's Details</h2>
            <p class="text-warning">Contact to Owner</p>
          </div>
         
          <div class="col-xl-8 ">
    
            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
    
              <i class="bi bi-person h2 rounded-circle text-primary border"></i>
                <!-- <img src="assets\img\team\team-3.jpg" alt="Profile" style="width:50px;" class="rounded-circle "> -->
                <h2><?php echo $key['owner_name']?></h2>
             
                <div class="social-links mt-2 d-flex">
                  <a href="#" class="telephone h3 px-2"><i class="bi bi-telephone"></i></a>
                  <h3><?php echo $key['owner_mobile']?></h3>
                </div>
              </div>
            </div>
</div>
</div>
    <div class="col-md-6 text-center">
      <h1 class="text-center text-light pt-5">Congrats! Your Room Booked..</h1>
      <button class="btn btn-warning "><a class="h4 text-light" href="index.php">GO to Homepage</a></button>
      <!-- <img src="assets/img/4A5.gif" alt=""> -->
    </div>
  </div>
</div>
        
  

<?php
}
?>
 </div> </div>
       </div>
        </div>
        <div class="mt-4">
        <?php 
include 'footer.php';
?>
</div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
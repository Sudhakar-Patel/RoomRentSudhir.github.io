<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Room Book page</title>
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
    background: #f6f9ff;
    color: #444444;
  }
</style>

<body>


<!-- hamberger section----------------- -->
<nav style="--bs-breadcrumb-divider: '>';" class=" bg-success h3 fixed-top" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-light"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item text-light"><a href="rooms.php">Rooms</a></li>
      <li class="breadcrumb-item text-light"><a href="rooms1.php">Description</a></li>
      <li class="breadcrumb-item text-danger active">Booking</li>
    </ol>
  </nav>

  <!-- ======= Features Section ======= -->
  <section id="features" class="features mt-5">
    <div class="container" data-aos="fade-up">

      <div class="row">
<?php
session_start();
      $connect=mysqli_connect("localhost","root","","room_rent");
      $id= $_SESSION['r'];
      $query="select * from rooms  where r_id='$id'";
$result=mysqli_query($connect,$query);

while($key=mysqli_fetch_array($result)){
  
?>

        <div class="image col-lg-6 mt-5 pt-5 text-center"  data-aos="fade-right">
          <img src="<?php echo $key['image'] ?>" class="w-75" alt="">
        </div>
<?php
       
      $connect=mysqli_connect("localhost","root","","room_rent");
      $id= $_SESSION['cid'];
      $query="select * from signup  where id='$id'";
$result=mysqli_query($connect,$query);

while($key=mysqli_fetch_array($result)){

?>
        <div class="col-lg-6  px-3" data-aos="fade-left" data-aos-delay="100">
        <div class="section-title">
          <h2 >Enter Details to </h2>
          <p class="text-center text-warning">Book Visit</p>
        </div>
         
          <div class="">
    
            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
    
              <form action="orders_insert.php" method="post" role="form" class="">
              <div class="row">
                <div class=" form-group ">
                  <label for="name" class="pt-2">Name:</label>
                  <input type="text" name="name" class="form-control" id="name" value="<?php echo $key['cname']?>" required>
                </div>
             
              <div class="form-group mt-3 ">
              <label for="mobile" class="pt-2">Mobile No:</label>
                <input type="number" class="form-control" name="mobile" id="mobile" value="<?php echo $key['contact']?>" required>
              </div>
              <div class="form-group mt-3">
              <label for="mobile" class="pt-2" class="justify-content-end">Date and Time of Visit:</label>
                <input type="datetime-local" class="form-control" name="time" id="time" placeholder="Date and Time of Visit" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="4" placeholder="Message" ></textarea>
              </div>
              
              <div class="text-center mt-2">
              
              <button class="btn border bg-warning "type="submit"  >
               Book Visit & Place Order 
              </button></div>
            </form>

            
              </div>
            </div>
        </div>
        </div>
        <?php
}
?>

     <?php
}
?>
 
       </div>

    </div>
  </section>


  <div class="container" data-aos="fade-up">
    
     
  </div>

  <?php 
include 'footer.php';
?>

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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rooms Desciption page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- cdn link---------- -->
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

  <!-- hamberger section----------------- -->
  <nav style="--bs-breadcrumb-divider: '>';" class="bg-muted h3 fixed-top">
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-light"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item text-light"><a href="rooms1.php">Room</a></li>
      <li class="breadcrumb-item text-danger active">Description</li>
    </ol>
  </nav>

  <!-- ======= Features Section ======= -->
  <div class="container mt-5 pt-3">
    <div class="row">
    <?php
  session_start();
            $connect=mysqli_connect("localhost","root","","room_rent");
            if(!$connect){
                echo "connection failed:".mysqli_connect_error();
                exit;
            }
            $id=$_REQUEST['q'];
          
          
          $_SESSION['r']= $id;
          
             $query="select * from rooms where r_id='$id'";
            $result=mysqli_query($connect,$query);
            if(!$result){
                echo "error:".mysqli_error($connect);
                 exit;
                
            }
            while($key=mysqli_fetch_array($result)){
            
            ?>
      <div class="col-md-6 col-12 ">

      
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">

          

            <div class="carousel-item active">

              <img src="<?php echo $key['image'] ?>" class="d-block img-fluid" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Bedroom</h5>
                <!-- <p>Some representative placeholder content for the first slide.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo $key['image2'] ?>" class="d-block img-fluid" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Kitchen</h5>
                <!-- <p>Some representative placeholder content for the second slide.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo $key['image3'] ?>" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Hall</h5>
                <!-- <p>Some representative placeholder content for the third slide.</p> -->
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>



      <div class="col-md-6 col-12  text-center">
        <div class="card text-dark bg-muted p-2 text-light">
          <h1>Rs.-
            <?php echo $_SESSION['price']=  $key['price'] ?>/-
          </h1>
          <p>
            <?php echo $_SESSION['description']=  $key['description'] ?>
          </p>
          <h4>At
            <?php echo $_SESSION['location']=  $key['location'] ?>

          </h4>
          
          <a href="sign3.php" class="btn btn-danger">
            <h1>Book Room</h1></a>
        </div>

        <div class="map">
          <h1 class="text-warning">Posted in</h1>
          <?php echo $_SESSION['map']=  $key['map'] ?>

        </div>
        </div>
    </div>
  </div>


  <hr>

  <!-- ======= Facilities Section ======= -->
  <section id="services" class="services justify-content-center" style=" background:linear-gradient(left.pink,blue)">
    <div class="container" >

      <div class="section-title">
        <h2>Facilities</h2>
        <p class="text-warning">Check Room's facilities</p>
      </div>

      <div class="row  p-2 d-flex"style="flex-wrap:wrap"data-aos="fade-up">
        <div class="col-md-3 col-6 mb-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box ">
            <div class="icon "><i class="fa fa-bed"></i></div>
            <div class="p-2">
            <h4><a href="">Bedroom</a></h4>
            <h1><?php echo $key['bedroom'] ?></h1>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-6 mb-2" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box ">
            <div class="icon"><i class="bi bi-fan"></i></div>
            <h4><a href="">Furnished</a></h4>
            <p><?php echo $key['furnished'] ?></p>
          </div>
        </div>

        <div class="col-md-3 col-6 mb-2" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-bath"></i></div>
            <h4><a href=""> Bathroom</a></h4>
           <h1><?php echo $key['bathroom'] ?></h1>
          </div>
        </div>

        <div class="col-md-3 col-6 mb-2" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Carpet Area</a></h4>
            <h1>1<?php echo $key['area'] ?>ft<sup>2</sup></h1>
             </div>
        </div>

        <div class="col-md-3 col-6  mb-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-motorcycle"></i></div>
            <h4><a href="">Parking Area</a></h4>
           <h1><?php echo $key['parking'] ?></h1>
          </div>
        </div>

        <div class="col-md-3 col-6 mb-2" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-lightbulb"></i></div>
            <h4><a href="">Utility Included</a></h4>
            <p><?php echo $key['utility'] ?></p>
          </div>
        </div>

        <?php
      }
      ?>

      </div>

    </div>
  </section><!-- End facility Section -->



 

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">
      <h1 class="text-light">Customer Reviews</h1>
      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor
                labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim
                dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->


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
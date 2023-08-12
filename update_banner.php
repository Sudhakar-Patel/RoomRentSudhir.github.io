<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Register page </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets1/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

    <?php
$id=$_REQUEST['q'];

$connect=mysqli_connect("localhost","root","","room_rent");

$q="select * from banners where id='$id'";
$r=mysqli_query($connect,$q);
//print_r($r);
while( $key=mysqli_fetch_assoc($r)){
   
?>
      
               
                    <div class="container p-3">
    <h1 class="text-center">Upadate Banner Page</h1>

    <form action="final_update_banner.php"method="post"enctype="multipart/form-data">
 
  <div class="form-group row pt-2" >
    <label for="image1" class="col-sm-2 col-form-label required">Insert Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image1" name="image"placeholder="choose images">
    </div>
  </div>
 
  <div class="form-group row pt-2">
    <label for="location" class="col-sm-2 col-form-labe requiredl">Enter location</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control required" id="location" name="location"value="<?php echo $key['location'] ?>" placeholder="Enter location">
      <input value="<?php echo   $key['id'];?>"type="hidden" class="form-control" id="name" name="id">
    </div>
  </div>
 
  <div class="form-group row p-2">
    <label for="price" class="col-sm-2 col-form-label required">Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="price" name="price"value="<?php echo $key['price'] ?>"placeholder="Enter Price">
    </div>
  </div>
 
  <div class="form-group row p-2">
    <label for="category" class="col-sm-2 col-form-label required">Category</label>
    <div class="col-sm-10">
      <input type="checkbox" name="category" id="category" value="bachelors"
      <?php echo($key['category']=="bachelors")?"checked":""?>>Bachelors
      <input type="checkbox" name="category" id="category" value="Families"
      <?php echo($key['category']=="families")?"checked":""?>>Families

    </div>
  </div>
  <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input required" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms" required>I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Update details</button>
                    </div>
                   
                  </form>

                
           


<?php
}
?>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/chart.js/chart.umd.js"></script>
  <script src="assets1/vendor/echarts/echarts.min.js"></script>
  <script src="assets1/vendor/quill/quill.min.js"></script>
  <script src="assets1/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets1/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>
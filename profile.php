


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Page</title>
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
    

<div class="">
                  <a class="icon text-primary" href="#" data-bs-toggle="dropdown"><i class="bi bi-person h1"></i>sudhakar patel<i id="user"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>My Account</h6>
                    </li>
                    <li><a class="dropdown-item" href="sign1.php">Login as Customer</a></li>
                    <li><a class="dropdown-item" href="sign2.php">Login as Seller</a></li>
                    <li><a class="dropdown-item"  onclick="profile()">Profile</a></li>
                   
                    <div class="card" id="profile" style="visibility:hidden;">
                      
                        <h3> sudhakar patel</h3>
                     <p>6266339885</p> 
                     <p>patelsudhakar2018@gmail.com</p> 
                    </div> 
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                     <!-- <li><a class="dropdown-item" href="#">This Year</a></li>  -->
                  </ul>
                </div>




                <button onclick="myFunction()">Click me</button>
                <p id="demo"></p>
                <script>
                  function myFunction(){
                    document.getElementById("demo").style.cssText="background:red";
                  }
                </script>

<script>
  function profile(){
document.getElementById("profile");
  }

</script>

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
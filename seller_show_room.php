<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customer details page</title>
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

 <!-- hamberger section----------------- -->
 <nav style="--bs-breadcrumb-divider: '>';" class="bg-light h2 fixed-top">
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-light"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item text-light"><a href="seller_add_room.php">Add Room</a></li>
      <li class="breadcrumb-item text-danger active">Your Room</li>
    </ol>
  </nav>
<div class="container mt-5">
<h1 class="text-center">Your Rooms Details</h1>

<div class="col-12 mt-5">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Sold Rooms <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
<tr >
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Image2</th>
        <th>Image3</th>
        <th>location</th>
        <th>facility</th>
        <th>price</th>
        <th>Category</th>
        <th>Owner name</th>
        <th>Contact</th>
        <!-- <th>Map</th> -->
        <th>Action</th>
</tr>
</thead>
<?php
session_start();
$owner_no=$_SESSION['owner_no'];
$connect=mysqli_connect("localhost","root","","room_rent");
$q="select * from rooms where owner_mobile=$owner_no ";
$r=mysqli_query($connect,$q);

while( $key=mysqli_fetch_assoc($r)){
   
?>
<tr>
    <td><?php echo $key['r_id'];?></td>
    <td><?php   echo $key['name'];?></td>
    <td >  <img style="width:200px;" src="<?php echo $key['image'];?>" alt=""> </td>
    <td >  <img style="width:200px;" src="<?php echo $key['image2'];?>" alt=""> </td>
    <td >  <img style="width:200px;" src="<?php echo $key['image3'];?>" alt=""> </td>
    <td><?php   echo $key['location'];?></td>
    <td>

<?php
echo "Bedroom:".$key['bedroom'].'<br>';
echo "Furnished:".$key['furnished'].'<br>';
echo "Bathroom:".$key['bathroom'].'<br>';
echo "Area:".$key['area'].'<br>';
echo "Parking:".$key['parking'].'<br>';
echo "utility:".$key['utility'];
?>

    </td>
    <td><?php   echo $key['price'];?></td>
    <td><?php   echo $key['category'];?></td>
    <!-- <td><?php   echo $key['map'];?></td> -->
    <td><?php   echo $key['owner_name'];?></td>
    <td><?php   echo $key['owner_mobile'];?></td>


    <td><a class="btn btn-success" href="update_seller_room.php?q=<?php echo $key['r_id'];?>">Update</a>
<a class="btn btn-danger" href="delete_rooms.php?q=<?php echo   $key['r_id'];?>">Delete</a></td>



</tr>
<?php } ?>

    </table>
    </div>








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
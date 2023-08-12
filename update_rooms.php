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
    
<div class="container">

<?php
$id=$_REQUEST['q'];

$connect=mysqli_connect("localhost","root","","room_rent");

$q="select * from rooms where r_id='$id'";
$r=mysqli_query($connect,$q);
//print_r($r);
while( $key=mysqli_fetch_assoc($r)){
   
?>

<div class="container p-3">
    <h1 class="text-center">Update Rooms</h1>

    <form action="final_update_room.php"method="post" enctype="multipart/form-data">
  <div class="form-group row pt-2">
    <label for="hname" class="col-sm-2 col-form-label">House Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="hname" name="hname" value="<?php echo   $key['name'];?>" placeholder="Enter House Name">
      <input value="<?php echo   $key['r_id'];?>"type="hidden" class="form-control" id="name" name="r_id">
    
    </div>
  </div>

  <div class="form-group row pt-2" >
    <label for="image1" class="col-sm-2 col-form-label required">Insert Image1</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image1" name="image"value='<img src="<?php echo $key['image'] ?>">'
      placeholder="choose images">
    </div>
     <label for="image2" class="col-sm-2 col-form-label">Insert Image2</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image2" name="image2"value='<img src="<?php echo $key['image2'] ?>">'placeholder="choose images">
    </div> 
    <label for="image3" class="col-sm-2 col-form-label">Insert Image3</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image3" name="image3" value='<img src="<?php echo $key['image3'] ?>">' placeholder="choose images">
    </div>
  </div>
   <div class="form-group row p-2">
    <label for="description" class="col-sm-2 col-form-label required">description</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control" id="description" name="description" value="<?php echo $key['description'] ?>"placeholder="Enter Description (BHK) area">
    </div>
  </div>
  <div class="form-group row pt-2">
    <label for="location" class="col-sm-2 col-form-labe requiredl">Enter location</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control required" id="location" name="location"value="<?php echo $key['location'] ?>" placeholder="Enter location">
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
      <input type="radio" name="category" id="category" value="bachelors"
      <?php echo($key['category']=="bachelors")?"checked":""?>
      >Bachelors
      <input type="radio" name="category" id="category" value="families"
      <?php echo($key['category']=="families")?"checked":""?>
      >Families
      <input type="radio" name="category" id="category" value="both"
      <?php echo($key['category']=="both")?"checked":""?>
      >Both
    </div>
  </div>

  <div class="form-group row p-2">
    <label for="bed" class="col-sm-2 col-form-label required">Bedroom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bed" name="bedroom"value="<?php echo $key['bedroom'] ?>"placeholder="(In Number)">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="furnish" class="col-sm-2 col-form-label required">Furnished</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="furnish" name="furnished"value="<?php echo $key['furnished'] ?>"placeholder="furnished already things">
    </div>
  </div>  
  <div class="form-group row p-2">
    <label for="bath" class="col-sm-2 col-form-label required">Bathroom</label>
    <div class="col-sm-10">
      <input type="radio" name="bathroom" id="bath" value="private"
      <?php echo($key['bathroom']=="private")?"checked":""?>>Private
      <input type="radio" name="bathroom" id="bath" value="share"
      <?php echo($key['bathroom']=="share")?"checked":""?>>Share
    </div>
  </div>

   <div class="form-group row p-2">
    <label for="area" class="col-sm-2 col-form-label required">Carpet Area</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="area" name="area"value="<?php echo $key['area'] ?>"placeholder="(In feet)">
    </div>
  </div> 
  <div class="form-group row p-2">
    <label for="park" class="col-sm-2 col-form-label required">Parking</label>
    <div class="col-sm-10" >
      <input type="radio" name="parking" id="park" value="yes"
      <?php echo($key['parking']=="yes")?"checked":""?>
      >Yes
      <input type="radio" name="parking" id="park" value="no"
      <?php echo($key['parking']=="no")?"checked":""?>
      >No
    </div>
  </div>
   <div class="form-group row p-2">
    <label for="utility" class="col-sm-2 col-form-label required">Utility</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="utility" name="utility"value="<?php echo $key['utility'] ?>"placeholder="(eg.about water,electricity)">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="map" class="col-sm-2 col-form-label">Map</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control" id="map" name="map"value='<?php echo $key['map']?>'
      placeholder="Enter google map embedded small address">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="oname" class="col-sm-2 col-form-label required">Owner's Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="oname" name="owner_name"value="<?php echo $key['owner_name'] ?>"placeholder="Enter Owner's Name">
    </div>
  </div>

  <div class="form-group row p-2">
    <label for="ocontact" class="col-sm-2 col-form-label required">Owner's Mobile No.</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="ocontact" name="owner_contact" value="<?php echo $key['owner_mobile'] ?>"placeholder="Enter Owner's Mobile no">
    </div>
  </div>


  <div class="form-group row p-4">
    <div class="col-sm-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" required for="gridCheck1">
          Check all details
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row p-3">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update Details</button>
    </div>
  </div>
</form>
</div>

<?php
}
?>
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
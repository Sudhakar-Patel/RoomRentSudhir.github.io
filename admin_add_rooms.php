<?php
include'admin_header.php';
?>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="admin.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item d-flex ">
        <a class="nav-link collapsed " data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem "></i>
          <a href="admin_rooms.php"><h4>Available Rooms</h4></a>
      </li><!-- End Icons Nav -->

      <li class="nav-item d-flex active1">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem"></i>
          <a href="admin_add_rooms.php"><h4>Add Rooms</h4></a>
      </li><!-- End Icons Nav -->

    

      <li class="nav-item d-flex">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem"></i>
          <a href="admin_request.php"><h4>Orders</h4></a>
      </li><!-- End Icons Nav -->

      <li class="nav-item d-flex">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem"></i>
          <a href="admin_customers.php"><h4>Customers Details</h4></a>
      </li><!-- End Icons Nav -->

      <li class="nav-item d-flex">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem"></i>
          <a href="admin_sold.php"><h4>Sales</h4></a>
      </li><!-- End Icons Nav -->

      <li class="nav-item d-flex">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem"></i>
          <a href="admin_add_banner.php"><h4>Add Banners</h4></a>
      </li><!-- End Icons Nav -->
      <li class="nav-item d-flex">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem"></i>
          <a href="admin_banners.php"><h4>Available Banners</h4></a>
      </li><!-- End Icons Nav -->
      <li class="nav-item d-flex">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem"></i>
          <a href="admin_messages.php"><h4>Messages</h4></a>
      </li><!-- End Icons Nav -->
     

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item active">Add Rooms</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
<div class="container p-3">
    <h1 class="text-center">Adding Rooms</h1>

    <form action="add_room_insert_form.php"method="post"enctype="multipart/form-data">
  <div class="form-group row pt-2">
    <label for="hname" class="col-sm-2 col-form-label required">House Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control " id="hname" name="hname" placeholder="Enter House Name">
    </div>
  </div>
  <div class="form-group row pt-2" >
    <label for="image1" class="col-sm-2 col-form-label required">Insert Image1</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image1" name="image"placeholder="choose images">
    </div>
     <label for="image2" class="col-sm-2 col-form-label">Insert Image2</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image2" name="image2"placeholder="choose images">
    </div> 
    <label for="image3" class="col-sm-2 col-form-label">Insert Image3</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image3" name="image3"placeholder="choose images">
    </div>
  </div>
   <div class="form-group row p-2">
    <label for="description" class="col-sm-2 col-form-label required">description</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control" id="description" name="description" placeholder="Enter Description (BHK) area">
    </div>
  </div>
  <div class="form-group row pt-2">
    <label for="location" class="col-sm-2 col-form-labe requiredl">Enter location</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control required" id="location" name="location" placeholder="Enter location">
    </div>
  </div>
 
  <div class="form-group row p-2">
    <label for="price" class="col-sm-2 col-form-label required">Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="price" name="price"placeholder="Enter Price">
    </div>
  </div>
 
  <div class="form-group row p-2">
    <label for="category" class="col-sm-2 col-form-label required">Category</label>
    <div class="col-sm-10">
      <input type="radio" name="category" id="category" value="bachelors">Bachelors
      <input type="radio" name="category" id="category" value="families">Families
      <input type="radio" name="category" id="category" value="both">Both
    </div>
  </div>

  <div class="form-group row p-2">
    <label for="bed" class="col-sm-2 col-form-label required">Bedroom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bed" name="bedroom"placeholder="(In Number)">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="furnish" class="col-sm-2 col-form-label required">Furnished</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="furnish" name="furnished"placeholder="furnished already things">
    </div>
  </div>  
  <div class="form-group row p-2">
    <label for="bath" class="col-sm-2 col-form-label required">Bathroom</label>
    <div class="col-sm-10">
      <input type="radio" name="bathroom" id="bath" value="private">Private
      <input type="radio" name="bathroom" id="bath" value="share">Share
    </div>
  </div>

   <div class="form-group row p-2">
    <label for="area" class="col-sm-2 col-form-label required">Carpet Area</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="area" name="area"placeholder="(In feet)">
    </div>
  </div> 
  <div class="form-group row p-2">
    <label for="park" class="col-sm-2 col-form-label required">Parking</label>
    <div class="col-sm-10">
      <input type="radio" name="parking" id="park" value="yes">Yes
      <input type="radio" name="parking" id="park" value="no">No
    </div>
  </div>
   <div class="form-group row p-2">
    <label for="utility" class="col-sm-2 col-form-label required">Utility</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="utility" name="utility"placeholder="(eg.about water,electricity)">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="map" class="col-sm-2 col-form-label">Map</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control" id="map" name="map"placeholder="Enter google map embedded small address">
    </div>
  </div>
  <div class="form-group row p-2">
    <label for="oname" class="col-sm-2 col-form-label required">Owner's Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="oname" name="owner_name"placeholder="Enter Owner's Name">
    </div>
  </div>

  <div class="form-group row p-2">
    <label for="ocontact" class="col-sm-2 col-form-label required">Owner's Mobile No.</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="ocontact" name="owner_contact"placeholder="Enter Owner's Mobile no">
    </div>
  </div>

  <div class="form-group row p-3">
    <div class="col-sm-12">
      <div class="form-check ">
        <input class="form-check-input"required type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Check all details
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row p-2">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">ADD Room</button>
    </div>
  </div>
</form>
</div>






<?php
include'admin_footer.php';
?>
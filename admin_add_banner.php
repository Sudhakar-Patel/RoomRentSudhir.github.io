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

      <li class="nav-item d-flex ">
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

      <li class="nav-item d-flex active1">
        <a class="nav-link collapsed " data-bs-target="#icons-nav" data-bs-toggle="collapse" >
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
          <li class="breadcrumb-item active">Add Banners</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
<div class="container p-3">
    <h1 class="text-center">Add Banner Page</h1>

    <form action="admin_banner_insert.php"method="post"enctype="multipart/form-data">
 
  <div class="form-group row pt-2" >
    <label for="image1" class="col-sm-2 col-form-label required">Insert Image1</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image1" name="image"placeholder="choose images">
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
      <input type="checkbox" name="category" id="category" value="bachelors">Bachelors
      <input type="checkbox" name="category" id="category" value="Families">Families

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
      <button type="submit" class="btn btn-primary">ADD Banner</button>
    </div>
  </div>
</form>
</div>






<?php
include'admin_footer.php';
?>
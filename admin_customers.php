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

      <li class="nav-item d-flex active1">
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
          <li class="breadcrumb-item active">Customers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <h1 class="text-center">Customer details</h1>

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
                  <h5 class="card-title">Customers <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
<tr >
        <th>ID</th>
        <th>Name</th>
        <!-- <th>Image</th> -->
        <th>User Name</th>
        <th>Contact</th>
        <th>Location</th>
        <th>Action</th>
        <!-- <th>Place Orders</th> -->
</tr>
</thead>
<?php
$connect=mysqli_connect("localhost","root","","room_rent");
$q="select * from signup";
$r=mysqli_query($connect,$q);

while( $key=mysqli_fetch_assoc($r)){
   
?>
<tr>
    <td><?php echo   $key['id'];?></td>
    <td><?php   echo $key['cname'];?></td>
    <td><?php echo   $key['username'];?></td>
    <td><?php   echo $key['contact'];?></td>
    <td><?php   echo $key['location'];?></td>
  
    <td><a class="btn btn-success" href="update_customer.php?q=<?php echo $key['id'];?>">Update</a>
<a class="btn btn-danger" href="delete_customer.php?q=<?php echo   $key['id'];?>">Delete</a></td>

</tr>
<?php } ?>

    </table>
    </div>





    <?php
include'admin_footer.php';
?>
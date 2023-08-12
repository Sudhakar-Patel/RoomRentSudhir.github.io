<?php
include 'admin_header.php';
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

      <li class="nav-item d-flex">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" >
          <i class="bi bi-gem"></i>
          <a href="admin_rooms.php"><h4>Available Rooms</h4></a>
      </li><!-- End Icons Nav -->

      <li class="nav-item d-flex">
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
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- orders Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
              <?php
$connect=mysqli_connect("localhost","root","","room_rent");
$q="select count(id) as total_id from orders";
$r=mysqli_query($connect,$q);

while( $key=mysqli_fetch_assoc($r)){
   
?>
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
                  <h5 class="card-title">Orders <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $key['total_id'] ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>
<?php
}
?>
              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
              <?php
$connect=mysqli_connect("localhost","root","","room_rent");
$q="select id from messages order by id desc limit 1";
$r=mysqli_query($connect,$q);

while( $key=mysqli_fetch_assoc($r)){
   
?>
                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> -->

                <div class="card-body">
                  <h5 class="card-title">Messages <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $key['id'] ?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>
<?php
}
?>
              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
            <?php
$connect=mysqli_connect("localhost","root","","room_rent");
$q="select count(id) as total_id from signup ";
$r=mysqli_query($connect,$q);

while( $key=mysqli_fetch_assoc($r)){
   
?>
              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul> -->
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $key['total_id']   ?></h6>
                      <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->

                    </div>
                  </div>

                </div>
              </div>
<?php
}
?>
            </div><!-- End Customers Card -->


      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

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


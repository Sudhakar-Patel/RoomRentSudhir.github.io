
  


<div class="container-fluid mt-5 justify-content-center"data-aos="fade-left">
  <h1 class="text-center text-light">Rooms for bachelors </h1>
  <div class="row d-flex ">


<!-- php section-------------------------- -->

  <?php

$connect=mysqli_connect("localhost","root","","room_rent");
if(!$connect){
    echo "connection failed:".mysqli_connect_error();
    exit;
}

// $_SESSION['category']='backelors';

 $query="select * from rooms where  category='bachelors' or category='both' ";

$result=mysqli_query($connect,$query);
if(!$result){
    echo "error:".mysqli_error($connect);
    exit;
    
}
while($key=mysqli_fetch_array($result)){



?>


    <div class="card col-md-4 col-6 text-center mb-2  " >
      <div class="card-body" data-aos="zoom-in" data-aos-delay="200">
        <img class="img-fluid"  src="<?php echo $key['image'] ?>" alt="">
      </div>
      <div class="card-footer">
        <h3>  Rs.<?php echo $key['price'] ?>/-</h3>
      <h6><?php echo $key['description'] ?></h6>
        <h4><?php echo $key['location'] ?></h4>
        <button class="btn btn-primary "><a class="text-light" href="rooms1.php?q=<?php echo $key['r_id'];?>">View Room</a></button>


      </div>
    </div>
    
    <?php
}
?> 
 <h2 class="text-end"><a href="rooms2.php"> Load More...</a></h2>

                     </div>
</div>

<!-- --------------- families rooms section------- -->


<div class="container-fluid  mt-5 justify-content-center"data-aos="fade-right">
  <h1 class="text-center text-light">Rooms for  families</h1>
  <div class="row ">


<!-- php section-------------------------- -->

  <?php
// session_start();
$connect=mysqli_connect("localhost","root","","room_rent");
if(!$connect){
    echo "connection failed:".mysqli_connect_error();
    exit;
}
$_SESSION['category']='families';
$query="select * from rooms where category='families'or category='both'";
$result=mysqli_query($connect,$query);
if(!$result){
    echo "error:".mysqli_error($connect);
    // exit;
    echo "error";
}
while($key=mysqli_fetch_array($result)){



?>


    <div class="card col-md-4 col-6 mb-2 text-center  " >
      <div class="card-body" data-aos="zoom-in" data-aos-delay="200">
        <img class="img-fluid"  src="<?php echo $key['image'] ?>" alt="">
      </div>
      <div class="card-footer">
        <h3>  Rs.<?php echo $key['price'] ?>/-</h3>
      <h6><?php echo $key['description'] ?></h6>
        <h4><?php echo $key['location'] ?></h4>
        <button class="btn btn-primary "><a class="text-light" href="rooms1.php?q=<?php echo $key['r_id'];?>">View Room</a></button>


      </div>
    </div>

    <?php
}
?>
                       <h2 class="text-end"><a href="rooms2.php?q=<?php echo $_SESSION['category']?>"> Load More...</a></h2>
</div>
</div>


</body> 



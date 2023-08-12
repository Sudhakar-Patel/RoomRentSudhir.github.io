<div class="container-fluid  "style="margin-top:-80px;">
    <div class="row">
    <?php
  
            $connect=mysqli_connect("localhost","root","","room_rent");
            if(!$connect){
                echo "connection failed:".mysqli_connect_error();
                exit;
            }
        ?>
      <div class="col-md-12 col-12 ">

      
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
              <?php
            $query="select * from banners where id=1";
            $result=mysqli_query($connect,$query);
            if(!$result){
                echo "error:".mysqli_error($connect);
                 exit;
                
            }
            while($key=mysqli_fetch_array($result)){
            
            ?>
              <img src="<?php echo $key['image'] ?>" class="d-block w-100"style="height:15cm;" alt="...">
              <div class="carousel-caption ">
                <h1>Rs.<?php echo $key['price'] ?>/-</h1>
                <h3><?php echo $key['location'] ?></h3>
                <!-- <button class="btn btn-primary text-light"><a href="">Visit Room</a></button> -->
                <!-- <p>Some representative placeholder content for the first slide.</p> -->
              </div>
              <?php
            }
            ?>
            </div>
            <div class="carousel-item">
            <?php
            $query="select * from banners where id=3";
            $result=mysqli_query($connect,$query);
            if(!$result){
                echo "error:".mysqli_error($connect);
                 exit;
                
            }
            while($key=mysqli_fetch_array($result)){
            
            ?>
              <img src="<?php echo $key['image'] ?>" class="d-block w-100" style="height:15cm;"alt="...">
              <div class="carousel-caption ">
              <h1>Rs.<?php echo $key['price'] ?>/-</h1>
                <h3><?php echo $key['location'] ?></h3>
                <!-- <button class="btn btn-primary text-light"><a href="">Visit Room</a></button> -->
              
                <!-- <p>Some representative placeholder content for the second slide.</p> -->
              </div>
              <?php
            }
            ?>
            </div>
            <div class="carousel-item">
            <?php
            $query="select * from banners where id=4";
            $result=mysqli_query($connect,$query);
            if(!$result){
                echo "error:".mysqli_error($connect);
                 exit;
                
            }
            while($key=mysqli_fetch_array($result)){
            
            ?>
              <img src="<?php echo $key['image'] ?>" class="d-block w-100"style="height:15cm;" alt="...">
              <div class="carousel-caption ">
              <h1>Rs.<?php echo $key['price'] ?>/-</h1>
                <h3><?php echo $key['location'] ?></h3>
                <!-- <button class="btn btn-primary text-light"><a href="">Visit Room</a></button> -->
              <!-- <p>Some representative placeholder content for the third slide.</p> -->
              </div>
              <?php
            }
      
            ?>
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

            </div>
            </div>
            </div>
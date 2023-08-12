

<!-- --------------------------- -->

<div class="container">
    <h1 class="text-center">Available Rooms</h1>
    <!-- <button id="change" onclick="dark_mode()" >dark</button> -->
</div>


<table class="table table-bordered table-hover text-center">
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

<?php
$connect=mysqli_connect("localhost","root","","room_rent");
$q="select * from rooms";
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


    <td><a class="btn btn-success" href="update_rooms.php?q=<?php echo $key['r_id'];?>">Update</a>
<a class="btn btn-danger" href="delete_rooms.php?q=<?php echo   $key['r_id'];?>">Delete</a></td>



</tr>
<?php } ?>

    </table>
    </div>











<?php

$connect=mysqli_connect("localhost","root","","room_rent");

$id=$_REQUEST['id'];
// $hname=$_REQUEST['hname'];
$image=$_REQUEST['image'];
$price=$_REQUEST['price'];
// $description=$_REQUEST['description'];
$location=$_REQUEST['location'];
// $map=$_REQUEST['map'];
$category=$_REQUEST['category'];
// $facility=$_REQUEST['facility'];
// $image2=$_REQUEST['image2'];
// $image3=$_REQUEST['image3'];

$name=$_FILES['image']['name'];
$type=$_FILES['image']['type'];
$size=$_FILES['image']['size'];
$tmp_name=$_FILES['image']['tmp_name'];
$error=$_FILES['image']['error'];


// $tmp_name2=$_FILES['image2']['tmp_name2'];

// $tmp_name3=$_FILES['image3']['tmp_name3'];


$folder="upload_img/".$name;

move_uploaded_file($tmp_name,$folder);
// move_uploaded_file($tmp_name2,$folder);
// move_uploaded_file($tmp_name3,$folder);


 
$query="update banners set price='$price',image='$folder',location='$location',category='$category'
 where id='$id'";
$result=mysqli_query($connect,$query);
if(mysqli_affected_rows($connect)>0) { 
    header("location:admin_banners.php?success");
}
else{
    echo "try again";
}
?>






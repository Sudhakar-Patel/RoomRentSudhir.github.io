<?php

$id=$_REQUEST['q'];
$connect=mysqli_connect("localhost","root","","room_rent");
$q="delete from banners where id='$id'";

mysqli_query($connect,$q);

if(mysqli_affected_rows($connect)>0) {
    header("location:admin_banners.php?success");
}
else{
    echo "try again";
}




?>
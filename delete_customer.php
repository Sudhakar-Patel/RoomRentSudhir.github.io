<?php

$id=$_REQUEST['q'];
$connect=mysqli_connect("localhost","root","","room_rent");
$q="delete from signup where id='$id'";

mysqli_query($connect,$q);

if(mysqli_affected_rows($connect)>0) {
    header("location:admin_customers.php");
}
else{
    echo "try again";
}




?>
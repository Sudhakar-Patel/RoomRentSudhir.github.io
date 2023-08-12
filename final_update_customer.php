<?php

$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact'];
$location=$_REQUEST['location'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];


$connect=mysqli_connect("localhost","root","","room_rent");
$query="update signup set cname='$name',email='$email',contact='$contact',location='$location',
username='$username',password='$password' where id='$id'";

mysqli_query($connect,$query);

if(mysqli_affected_rows($connect)>0) { 
    header("location:admin_customers.php?success");
}
else{
    echo "try again";
}
?>
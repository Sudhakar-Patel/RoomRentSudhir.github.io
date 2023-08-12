<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        color:red;
    }
</style>
<body>
    
    <?php

 session_start();

$connect=mysqli_connect("localhost","root","","room_rent");

$query="select * from rooms";

$result=mysqli_query($connect,$query);

$key=mysqli_fetch_assoc($result);
?>
<?php 
if($key){
$_SESSION['location']='kolaibahal';
?>
    <h1 class=""><a href="pr21.php"> <?php echo $_SESSION['location']  ?></a></h1>
    
    <?php
    }
    ?>
    welcome
</body>
</html>
<?php
session_start();
$_SESSION['location']='kabir nagar';
$_SESSION['category']='bachelors';
$_SESSION['category2']='both';
$_SESSION['category1']='families';
echo "<script>location.href='ex10.php'</script>";

?>
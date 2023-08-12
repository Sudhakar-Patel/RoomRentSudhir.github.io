<?php
session_start();
$_SESSION['location']='mandir hasoud';
$_SESSION['category']='bachelors';
$_SESSION['category1']='families';
$_SESSION['category2']='both';
echo "<script>location.href='ex10.php'</script>";

?>
<?php
session_start();
$_SESSION['person']='book_rooms.php';
echo "<script>location.href='login_form.php'</script>";


?>
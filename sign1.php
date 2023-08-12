<?php
session_start();
$_SESSION['person']='index.php';
echo "<script>location.href='login_form.php'</script>";

?>
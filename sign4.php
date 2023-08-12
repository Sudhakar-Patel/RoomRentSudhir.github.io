<?php
session_start();
$_SESSION['person1']='sign1.php';
echo "<script>location.href='signup_form.php'</script>";

?>
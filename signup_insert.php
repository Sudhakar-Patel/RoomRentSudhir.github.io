<?php

// if(!$connect){
//     echo "connection failed:".mysqli_connect_error();
//     exit;
// }
$name=$_POST['name'];
$email=$_REQUEST['email'];
$location=$_REQUEST['location'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$contact=$_REQUEST['contact'];

$connect=mysqli_connect("localhost","root","","room_rent");


// session_start();
// $login=$_SESSION['person1'];


 $query="insert into signup(cname,email,contact,location,username,password)value('$name','$email','$contact','$location','$username','$password')";

$result=mysqli_query($connect,$query);
// if(!$result){
//     echo "error:".mysqli_error($connect);
//     exit;
// }



  echo "<script>location.href='login_form.php'</script>";



// mysqli_close($connect);
?>
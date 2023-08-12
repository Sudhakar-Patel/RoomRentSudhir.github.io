<?php

// session_start();

$connect=mysqli_connect("localhost","root","","room_rent");
if(!$connect){
    echo "connection failed:".mysqli_connect_error();
    exit;
}

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];


$query="select * from signup where username='$username' AND password='$password'";

$result=mysqli_query($connect,$query);
if(!$result){
    echo "error:".mysqli_error($connect);
    exit;
}

$key=mysqli_fetch_assoc($result);
if($key){
    session_start();
    $_SESSION['cid']= $key['id'];
 echo "<script>location.href='seller_add_room.php'</script>";
     


}
else{
    echo "login failed!";
}


mysqli_close($connect);
?>
<?php

$connect=mysqli_connect("localhost","root","","room_rent");
if(!$connect){
    echo "connection failed:".mysqli_connect_error();
    exit;
}
$time=$_REQUEST['time'];
$msg=$_REQUEST['message'];

session_start();
$cid=$_SESSION['cid'];
$rid=$_SESSION['r'];

 $query="insert into orders(cid,rid,time,message)value('$cid','$rid','$time','$msg')";

$result=mysqli_query($connect,$query);
if(!$result){
    echo "error:".mysqli_error($connect);
    exit;
}


// <a href="order_placed.php?q=<?php echo $_SESSION['r'];
 echo "<script>location.href='order_placed.php'</script>";



mysqli_close($connect);
?>
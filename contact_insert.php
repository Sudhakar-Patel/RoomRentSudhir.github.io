<?php

$connect=mysqli_connect("localhost","root","","room_rent");
if(!$connect){
    echo "connection failed:".mysqli_connect_error();
    exit;
}
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$msg=$_REQUEST['message'];



 $query="insert into messages(name,email,subject,message)value('$name','$email','$subject','$msg')";

$result=mysqli_query($connect,$query);
if(!$result){
    echo "error:".mysqli_error($connect);
    exit;
}


// <a href="order_placed.php?q=<?php echo $_SESSION['r'];
 echo "<script>location.href='contact.php'</script>";



mysqli_close($connect);
?>
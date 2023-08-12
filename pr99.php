

<?php

$connect=mysqli_connect("localhost","root","","room_rent");
if(!$connect){
    echo "connection failed:".mysqli_connect_error();
    exit;
}
 

$no_of_result=mysqli_num_rows($result);
$results_per_page=5;
$no_of_page=ceil($no_of_result/$results_per_page);

 if(!isset($_GET['page'])){
$page=1;
 }
 else{
  $page=$_GET['page'];
 }

 $page_first_result=($page-1)*$results_per_page;
 $query="select * from rooms limit".$page_first_result.'.'.$results_per_page;
 $result=mysqli_query($connect,$query);
 
while($key=mysqli_fetch_array($result)){

for($page=1;$page<=$no_of_page;$page++){
  echo '<a href="rooms.php?page='.$page.'">'.$page.'</a>';
 }
}
?>
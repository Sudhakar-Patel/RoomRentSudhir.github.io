
<?php

$connect=mysqli_connect("localhost","root","","room_rent");

$id=$_REQUEST['r_id'];
$hname=$_REQUEST['hname'];
$image=$_REQUEST['image'];
$image2=$_REQUEST['image2'];
$image3=$_REQUEST['image3'];
$price=$_REQUEST['price'];
$description=$_REQUEST['description'];
$location=$_REQUEST['location'];
$map=$_REQUEST['map'];
$category=$_REQUEST['category'];
$bedroom=$_REQUEST['bedroom'];
$furnished=$_REQUEST['furnished'];
$bathroom=$_REQUEST['bathroom'];
$area=$_REQUEST['area'];
$parking=$_REQUEST['parking'];
$utility=$_REQUEST['utility'];

$owner_name=$_REQUEST['owner_name'];
$owner_contact=$_REQUEST['owner_contact'];


$name=$_FILES['image']['name'];
$type=$_FILES['image']['type'];
$size=$_FILES['image']['size'];
$tmp_name=$_FILES['image']['tmp_name'];
$error=$_FILES['image']['error'];

$name2=$_FILES['image2']['name'];
$type2=$_FILES['image2']['type'];
$size2=$_FILES['image2']['size'];
$tmp_name2=$_FILES['image2']['tmp_name'];
$error=$_FILES['image2']['error'];

$name3=$_FILES['image3']['name'];
$type3=$_FILES['image3']['type'];
$size3=$_FILES['image3']['size'];
$tmp_name3=$_FILES['image3']['tmp_name'];
$error3=$_FILES['image3']['error'];


$folder1="upload_img/".$name;
$folder2="upload_img2/".$name;
$folder3="upload_img3/".$name;

move_uploaded_file($tmp_name,$folder1);
move_uploaded_file($tmp_name2,$folder2);
move_uploaded_file($tmp_name3,$folder3);


$query="update rooms set name='$hname',image='$folder1',image2='$folder2',image3='$folder3',
price='$price',description='$description',location='$location',map='$map',bedroom='$bedroom',
bathroom='$bathroom',category='$category',parking='$parking',furnished='$furnished',area='$area',
utility='$utility',owner_name='$owner_name',owner_mobile='$owner_contact'
 where r_id='$id'";
$result=mysqli_query($connect,$query);
if(mysqli_affected_rows($connect)>0) { 
    header("location:admin_rooms.php?success");
}
else{
    echo "try again";
}
?>






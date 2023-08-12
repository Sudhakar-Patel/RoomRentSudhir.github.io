<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start page</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

</head>
<style>
.video-container{
    height:680px;
    width:100%;
    /* max-width:1000px; */
    position:relative;
    overflow:hidden;
}
video{
    opacity:.90;
    object-fit:cover;
    position:absolute;
    height:680px;
    width:100%;
    top:0;
    left:0;
    z-index:-1;
}
.callout{
    /* position:relative; */
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    height:100%;
    text-align:center;
    z-index:10;
    width:70%;
    margin:auto;

}
.btn1{
    border:5px solid white;
    border-radius:35px;
    padding:10px;
}
.btn1>a{
    text-decoration:none;
}
.btn1:hover{
    box-shadow:2px 2px 2px yellow;
    transform:scale(1.2);
}
.btn1>a:hover{

    
}
@media(max-width:600px){
.t1{
    font-size:60px;
}
}
@media(min-width:601px){
    .t1{
    font-size:150px;
}
}


</style>

<body>
    
<div class="video-container">
    <video src="assets\img\banner1.mp4" autoplay loop playsinline  muted  ></video>
    <div class="callout ">
        <h1 class="text-light">Find the perfect place to live </h1>
        <!-- <i class="bi bi-house"></i> -->

        <h1 class="text-light t1">
        Room<span class="text-warning">Rent</span></h1>
       <button class="btn border-warning btn1" style="background:transparent;"><a class="h1 text-light" href="index.php">Explore</a></button>
    </div>
</div>



<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
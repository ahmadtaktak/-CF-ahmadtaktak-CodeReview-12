<?php
require_once "action/db_connect.php";
if(isset($_GET["id"])){
  $id=$_GET["id"];
 $sql="SELECT * FROM events WHERE id=$id";
$result=mysqli_query($conn,$sql);
$layout = mysqli_fetch_assoc($result);
$print=""; 

$print.="<div class=' content card shadow p-3 mb-5 bg-body rounded' style='width:  height:200rem; '>
<img src='pictures/{$layout["picture"]}'  class='dd card-img-top' height='500'   '>
<div class='text-center card-body '>
<h1 class=' card-title text-center fst-italic fs-1'>{$layout["name"]}</h1>
  <p class='card-text fst-italic '>{$layout["discrption"]}</p><br>
  <p class='card-title '>Date: {$layout["date"]}</p>
  <p class='card-title '>price : {$layout["price"]}€</p>
  
  <div class='text-center'>
  <a href='delete.php?id={$layout["id"]}' class='btn btn-danger fs-3 col-3 m-2'>Delete</a>
 
  <a href='update.php?id={$layout["id"]}' class=' btn btn-warning fs-3 col-3 m-2 '>Update</a>
  
  </div>
</div>
</div>";
}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php"?> 
    <?php require_once "components/navbar.php"?> 
    <title>Document</title>
</head>
<style>

 .dd{
   width: 90%;
   margin:0px auto
 

 }

</style>
<body>
<div class="bakgraund"></div>
<div class="container">
    <div class="row">
 <?php echo $print?>
        </div>
        </div>
     
</body>
</html>
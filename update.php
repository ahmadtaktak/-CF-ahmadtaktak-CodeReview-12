<?php

require_once "action/db_connect.php";
if(isset($_GET["id"])){
    $id=$_GET["id"];
$sql="SELECT * FROM events WHERE id=$id ";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);

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
<body>
    

<div class="container ">

<div class="row">

<form class="row g-3 " action="action/a_update.php" method="post" enctype="multipart/form-data">


<div class="col-md-12">
    <label class="form-label">EventName:</label>
    <input  name="name"  value="<?php echo $row["name"]?>" class="form-control" >
  </div>

  <div class="col-md-4">
    <label  class="form-label">preic:</label>
    <input  class="form-control"  value="<?php echo $row["price"]?>" name="price" id>
  </div>
  
<div class="col-md-4">
    <label  class="form-label">Date of event:</label>
    <!-- <input type="date " id="birthday"   class="form-control"  name="date" > -->
    <input type="date" id="birthday" class="form-control"  value="<?php echo $row["date"]?>"  name="date" > 
  </div>

  <div class="col-12">
    <label  class="text-break">Decription</label>
    <input type="text" class="form-control" name="description"  value="<?php echo $row["discrption"]?>" placeholder="Decription">
  </div>


  <div class="col-12">
    <label  class="text-break">longitude</label>
    <input type="text" class="form-control" name="longitude"  value="<?php echo $row["longitude"]?>" placeholder="longitude">
  </div>

  <div class="col-12">
    <label  class="text-break">latitude</label>
    <input type="text" class="form-control" name="latitude"  value="<?php echo $row["latitude"]?>" placeholder="latitude">
  </div>



  <div class="col-12 ">
    <label  class="form-label">Picture:</label>
    <input type="file" class="form-control"  name="picture"  >

    <input type="hidden" class="form-control"  value="<?php echo $row["id"]?>" name="id" >

    <input type="hidden" class="form-control"  value="<?php echo $row["picture"]?>" name="picture" >


    <div class="col-12 text-center m-2 ">
    <button class=" col-5 btn btn-success fs-4" type="submit">Update event</button>
    </div>


    </form>
  </div>
  </div>
 


</body>
</html>
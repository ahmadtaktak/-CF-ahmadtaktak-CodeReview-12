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

<form class="row g-3  m-5" action="action/a_create.php" method="post" enctype="multipart/form-data">


<div class="col-md-10">
    <label class="form-label">EventName:</label>
    <input  name="name"  class="form-control" >
  </div>

  <div class="col-md-5">
    <label  class="form-label">preic:</label>
    <input  class="form-control"   name="price" id>
  </div>
  
<div class="col-md-5">
    <label  class="form-label">Date of event:</label>
    <input type="date" id="birthday" class="form-control"   name="date" >
  </div>

  <div class="col-10">
    <label  class="text-break">Decription</label>
    <input type="text" class="form-control" name="description"   placeholder="Decription">
  </div>

  <div class="col-10">
    <label  class="text-break">longitude</label>
    <input type="text" class="form-control" name="longitude"   placeholder="longitude">
  </div>

  <div class="col-10">
    <label  class="text-break">latitude</label>
    <input type="text" class="form-control" name="latitude"   placeholder="latitude">
  </div>


  <div class="col-10 ">
    <label  class="form-label">Picture:</label>
    <input type="file" class="form-control"  name="picture"  >

    <input type="hidden" class="form-control"  name="id" >

    <input type="hidden" class="form-control"   name="picture" >


    <div class="col-10 text-center m-2 ">
    <button class=" col-5 btn btn-success fs-4" type="submit">inssert</button>
    </div>


    </form>
  </div>
  </div>
 




</body>
</html>
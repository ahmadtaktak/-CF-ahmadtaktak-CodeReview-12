<?php
require_once "db_connect.php";
require_once "file_upload.php";
if($_POST){
    $name=$_POST['name'];
    $description=$_POST["description"];
    $date=$_POST["date"];
    $price=$_POST["price"];
    $longitude=$_POST["longitude"];
    $latitude=$_POST["latitude"];
    $picture=file_upload($_FILES["picture"]);
     
    $erroeMag="";

    $sql= "INSERT INTO events (name,discrption,date,price,longitude,latitude ,picture) VALUES('$name','$description',$date,'$price','$longitude','$latitude','$picture->fileName')";
    
    


if($conn->query($sql)===true){
    $class = "success";
    $message = "The entry below was successfully created <br>";
    $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
} else {
    $class = "danger";
    $message = "Error while creating record. Try again: <br>" . $conn->error;
    $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
}
$conn->close();
} else {
header("location: ../error.php");
}  




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>
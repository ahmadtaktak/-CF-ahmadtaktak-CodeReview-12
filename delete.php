<?php
require_once "action/db_connect.php";
if(isset($_GET["id"])){
 $id=$_GET["id"];
 $sql="SELECT * FROM events WHERE id =$id";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)==1){
 $row =mysqli_fetch_assoc($result);
 }else{
    header("location:error.php");
}


 



}else{
    header("location:error.php");
}

?>

<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <meta name="viewport"  content="width=device-width, initial-scale=1.0">
       <title>Delete Product</title>
       <?php require_once 'components/boot.php' ?>
      <!--  <style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 70% ;
           }    
           .img-thumbnail{
               width: 70px !important;
                height: 70px !important;
           }    
       </style>  -->
   </head>
   <body>
       
           <div class='h2 mb-3 text-center '> 
              <h4>Delete request</h4> 
                <img class='img-thumbnail rounded-pill '  src='pictures/<?php echo $row["picture"] ?>' alt="<?php echo $row["name"] ?>"></div >
           <h5 class="text-center">You have selected the data below: </h5>
      
             <h4 class="fs-4 text-center m-4 " > The event is : <?php echo   $row ["name"]?></h4>
                
           <h3  class="mb-4 text-center">Do You Really Want To Delete This event?</h3>
           <form action ="action/a_delete.php"  method="post">
               <input type="hidden"  name="id" value ="<?php echo $id ?>" />
               <input type="hidden"  name="picture"  value="<?php echo $row["picture"] ?>" />


               <div class=" text-center fs-4 m-5">
               <button class="btn btn-danger col-5 fs-4"  type="submit"> Yes, delete it! </button>
                <a href="index.php"><button class="col-5 fs-4 btn btn-warning"  type="button"> No, back to Home! </button></a >
                </div>
           </form>
    
   </body>
</html>
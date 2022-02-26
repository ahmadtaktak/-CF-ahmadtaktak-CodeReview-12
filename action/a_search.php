<?php

require_once "db_connect.php";

$search=$_GET["search"];

$sql="SELECT * from events WHERE name LIKE '$search%'";




$result =mysqli_query($conn,$sql);
 $rows=$result->fetch_all(MYSQLI_ASSOC); 
 if(mysqli_num_rows($result)> 0){
foreach($rows as $row ){
    echo "<div class='card p-2   m-4' style='width: 22rem;'>
    <img src='pictures/{$row["picture"]}' class='card-img-top' alt='...'height='200'>
    <div class='card-body'>
      <h5 class='card-title text-center'>{$row["name"]}</h5>
     <div class='text-center'>
     <p class='card-title '> {$row["date"]}</p>
      <a href='Details.php?id={$row["id"]}' >MorInfo</a></div>
      
    </div>
  </div>";
}
}else{
    echo "you dont have any thing...!";
}
?> 
<style>
a{
  text-decoration:none;
}



</style>
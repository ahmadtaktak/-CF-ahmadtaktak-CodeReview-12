<?php
require_once "action/db_connect.php";







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
<div class="bakgraund"></div>
<div class="container ">

          <div class="row" id="content"></div>

</div>



<script>
function loadDoc() {
let xhttp = new XMLHttpRequest();
xhttp.onload = function() {
    if (this.status == 200 ) {
        document.getElementById("content").innerHTML =this.responseText;
       
    }
};
var name=document.getElementById("search").value;
xhttp.open("GET", 'action/a_search.php?search='+name , true); //(method, URL, async)
xhttp.send();
}

loadDoc();

document.getElementById("search").addEventListener("keyup",loadDoc);
</script>    
</body>
</html>
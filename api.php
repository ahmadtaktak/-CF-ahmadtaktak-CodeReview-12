<?php
require_once 'rows.php';

 header('Content-Type: application/json; charset=utf-8');  

function api($data){
    $ahmad=json_encode($data);
   echo $ahmad;
}
api($rows);

?>
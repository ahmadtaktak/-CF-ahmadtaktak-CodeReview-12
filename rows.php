<?php
require_once "action/db_connect.php";

$sql="SELECT * from events";

$result =mysqli_query($conn,$sql);
 $rows=$result->fetch_all(MYSQLI_ASSOC); 
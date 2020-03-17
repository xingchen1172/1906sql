<?php
   $mysqli =new mysql("localhost","root","123123123","1906shop");
   if($mysqli->connect_errno){
       echo "Failed to connect to MySQL : {" . $mysqli->connect_errno.")".$mysqli->connect_error;  
   } 

   //准备sql语句
    $sql = "select * from p_users where id=1";

    while($row = $res->fetch_assoc())
{
    echo '<pre>';print_r($row);echo '</pre>';
}
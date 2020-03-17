<?php
$mysqli =new mysql("localhost","root","123123123","1906shop");
if($mysqli->connect_errno){
    echo "Failed to connect to MySQL : {" . $mysqli->connect_errno.")".$mysqli->connect_error;  
}
// echo $mysqli->host_info . "\n";
echo "连接成功";echo "<br>";

// $name = "xingchen";
$name1 = $_GET['name'];
echo "未经处理的参数:".$name;echo'<br>';
$name2 = htmlentities($name1);
echo "处理过后的参数:".$name2;echo '<br>';

//select * from p_users where ueser_name
// $sql = 'select * from p_users where user_name' . $name;
$sql = 'select * from p_users where user_name ='{$name2};

echo 'sql:'.$sql;echo "<br>";
$res = $mysqli->query($sql);
echo __LINE__;echo '<br>';
// $row = $res->fetch_assoc();
while($row = $res->ferch_assoc())
{
    var_dump($row);
    echo "<pre>";print_r($row);echo '</pre>';
    
}
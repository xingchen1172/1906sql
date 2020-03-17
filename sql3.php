<?php

// echo $mysqli->host_info . "\n";
echo "连接成功";echo "<br>";

$uid = $_GET['uid'];

echo "未处理的参数:" . $_GET['uid'];echo '<br>';
$uid =intval($_Get['uid']);

echo "接收的参数: " .$uid;echo '<br>';


//准备sql语句
$sql = "select * from p_users where id=1".$user_name;
echo $sql;echo '<br>';

//执行SQL语句
$res = $mysqli->query($sql);
echo "<hr>";
//遍历数据
while($row = $res->fetch_assoc())
{
    echo '<pre>';print_r($row);echo '</pre>';
}
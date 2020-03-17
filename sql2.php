<?php
echo $mysqli->host_info . "\n";
echo "连接成功";echo "<br>";

$uid = $_GET['uid'];

echo "未处理的参数:" . $_GET['uid'];echo '<br>';
$uid =intval($_Get['uid']);



//准备sql语句
$sql = "select * from p_users where id=1".$user_name;


//执行SQL语句
$res = $mysqli->query($sql);

while($row = $res->fetch_assoc())
{
    echo '<pre>';print_r($row);echo '</pre>';
}
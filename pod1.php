<?php

    $str = '1234';
    echo '$str:'.$str;
    echo intval($str);die;

  $user = "xingchen";
  $pass = "123456";
  $dbh = new PDO('mysql:host=localhost;dbname=test',$user,$pass);
//   var_dump($dbh);
//准备SQL语句
$id = $_GET['id'];
echo "未处理的参数".$id;echo '<br>';
$id = intval($_GET['id']);
echo "处理的参数".$id;

$sql = "select * from p_users where id={$id}"; 

//发送查询
$res = $dbh->query($sql);

while($row = $res->fetch(PDO::FETCH_ASSOC))
{
    echo '<pre>';print_r($row);echo '</pre>';
    echo '<hr>';
}
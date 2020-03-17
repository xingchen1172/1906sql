<?php

  $user = "xingchen";
  $pass = "123456";
  $dbh = new PDO('mysql:host=localhost;dbname=test',$user,$pass);

  //准备SQL语句
  $sql = "select * from p_users (user_name,email) values (:name,:email)";

  //发送查询
  $res = $dbh->query($sql);

  $name = "test010";
  $email = "test010@qq.com";

 //预处理
 $stmt = $dbh->prepare($sql);
 $stmt->bindParam(':name',$name);
 $stmt->bindParam(':email',$email);

 $stmt->execute();

 $id = $dbh->lastInsertId();   //获取自增id
 var_dump($id);
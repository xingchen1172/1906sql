<?php
    $user = 'xingchen';
    $pass = '123456';
    $dbh = new PDO('mysql:host=localhost;dbname=1906',$user,$pass);

    //准备SQL语句
    $sql = "insert into p_users ('user_name','email') value ('test009',''test009.com)";

    //执行SQL语句
    $res = $dbh->exec($sql);
    $id = $dbh->lastInsertId();  //返回自增ID
    var_dump($res);
    echo '自增ID:' .$id;
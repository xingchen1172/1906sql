<?php

$redis = new Redis();
$redis->connect('127.0.0.1');
$redis->auth('123456');

//初始化座位数据
$key = 'ss:seats';
for($i=1;$i<=100;$i++){
    $redis->zAdd($key,0,$id);  //选中的座位
}
    $id = intval($_GET['id']);

   die;

    $key = 'ss:seats';

    $redis->zAdd($key,time(),$id);  //选中的座位

    $response = [
        'errno' =>  '0',
        'msg'   =>  'ok'
    ];

    echo json_encode($response);
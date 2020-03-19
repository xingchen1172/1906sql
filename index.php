<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p>Hello 1906</p>

  <button id="btn1">获取用户信息</button>
  <p id="info"></p>
  <div id="div1"></div>
   <button id="btn2">BAIDU</button>

    <hr>
    <button id="btn3">随机图片</button>
    <img src="images/a1.jpg" id="img1">

    <script>
    //获取节点
    var btn1 = document.getElementById("btn1");

    btn1.addEventListener('mouseover',function(e)){
      alert('231231');
    }

    //给节点绑定事件
    btn1.addEventListener('click',function(e)){
      alert(222);

      var httpRequest = new XMLHttpRequest();
    console.log(httpRequest);

    //处理服务器响应
    httpRequest.onreadystatechange = function(){

      // $.ajax({
      //   'url':'',
      //   'type':'get',
      //   'dataType':'json',
      //   success:function(d){
      //     var user_info = d.user_info;
      //   }
      // });

      //Process the server response  here
      if(httpRequest.readySteate === XMLHttpRequest.DONE){
        if(httpRequest.status === 200){
          alert("服务器处理成功");
        }else{

        }
      }else{

      }
    };

    httpRequest.open('GET','/api.php',true);
    httpRequest.send();

    }

    
  </script>
</body>
</html>
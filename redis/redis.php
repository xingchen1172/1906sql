<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>在线选座</title>
</head>
<body>
    <?php
      $redis = new Redis();
      $redis->connect("127.0.0.1");
      $redis->auto('123456');

      $total = 100;
      for($i=1;$i<=$total;$i++)
      {
          echo "&nbsp;&nbsp;<button class='seat'>{$i}</button>&nbsp&nbsp;";
          if($i%10 == 0){
              echo "<br>";
          }
      }
    
    ?>
</body>
<script>
    var seats = document.getElementsByClassName("seat");
      //consele.log(seats);

    for(var i=0;i<seats.length;i++){
        seats[i].style.backgroundColor = '';      //默认颜色
        seats[i].addEventListener('click',function(e)){
            var ys = confirm("确定要选中此座位吗?"+this.innerHTML)
            console.log(ys);
            if(ys){
                //发送ajax请求后端
                this.style.backgroundColor = 'red';  //选中的座位变红
                var xhr = new XMLHttpRequest();
                
                var seat_id = this.innerHTML;
                xhr.open('GET','/seats.php?id='+seat_id,true);
                xhr.send();
                xhr.onreadystatechange = function(){
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status === 200){
                        // alert("ok");
                        alert(xhr.responseText);
                    }else{

                    }
                }else{

                }

            }
            }
        }
    }
</script>
</html>
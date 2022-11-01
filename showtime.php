<?php
// session_start();
// require('check_header.php');
require('link.php');
$time="SELECT * FROM regist_time ORDER BY t_time DESC";
$result=mysqli_query($connect,$time);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="showtime.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body >
<div  class="header">ที่ทำการไปรษณีย์อำเภอท่าคันโท</div>
    <br>

<h1  class="heading">เวลาการเข้างาน</h1>
<br>
<div class="center">
<form action="showtimeprivate.php" method="post">
<input type="text" name="datetime" placeholder="วันที่,รหัสพนักงาน,ชื่อ"id="txt"class="center" onfocus="show(this)">

</form>
</div>
<script>
$(function(){
    $("#txt").keyup(function(){
        let keyword=$("#txt").val();
        $("#show").html('');
        $.ajax({
            url:"showtimeprivate.php",
            method:"POST",
            data:{myid:keyword},
            success:function(data){
                $("#show").html(data);
            }
        });
    });
});
</script>
<br>
<div id="show"></div>
   <br>
   <p align=center>
   <a href="page_header.php" target="" rel="" class="btn btn-dark"><---กลับไปหน้าก่อนหน้า</a>
    </p>
   <!--<div align="center">
       <a href="submitdata.php" target="" rel="">กลับไปหน้าลงเวลา</a>
   </div>
   <div align="center">
<a href="logout.php" target="" rel=""class="btn btn-dark " >ออกจากระบบ</a>
</div>-->

</body>
</html>
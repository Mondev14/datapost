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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap.css">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="showtime.css">
</head>
<body >
<div  class="header">ที่ทำการไปรษณีย์อำเภอท่าคันโท</div>
    <br>

<h1  class="heading">เวลาการเข้างาน</h1>
<br>
<div class="center">
<form action="showtimeprivate.php" method="post">
<input type="text" name="datetime" placeholder="วันที่,รหัสพนักงาน,ชื่อ"id=""class="center" onfocus="show(this)">
<input type="submit" value="ค้นหา">
</form>
</div>
<script>
function show(obj){
    obj.style.background="white";
    obj.style.color="black";
}
</script>
<br>

    <div class="scroll">
   <table class="container-fluid">
<thead >
    <tr align="center">
        <th class="text-center">รหัสพนักงาน</th>
        <th class="text-center">คำนำหน้า</th>
        <th class="text-center">ชื่อ</th>
        <th class="text-center">นามสกุล</th>
        <th class="text-center">ตำแหน่ง</th>
        <th class="text-center">เวลาเข้างาน</th>
        <th class="text-center">เวลาออกงาน</th>
        <th class="text-center">พิกัด</th>
    </tr>
</thead>
<tbody >
<tr align="center" style="height: 100px;" >
    <?php while($line=mysqli_fetch_array($result,MYSQLI_BOTH)){;?>
<td><?php echo $line[1];?></td>
<td><?php echo $line[2];?></td>
<td><?php echo $line[3];?></td>
<td><?php echo $line[4];?></td>
<td><?php echo $line[5];?></td>
<td><?php echo $line[9];?></td>
<td><?php echo $line[10];?></td>
<td style="width:200px; height:100px;"><iframe src='https://www.google.com/maps?q=<?php echo $line[11];?>,<?php echo $line[12];?>&hl=es;z=14&output=embed' style="width:250px;height:100px"></iframe></td>
</tr>
<?php }?>
</tbody>
   </table>
</div>

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
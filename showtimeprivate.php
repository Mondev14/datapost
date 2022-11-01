<?php
require('link.php');
$datetime= $_POST['myid'];
$time="SELECT * FROM regist_time WHERE id like '%$datetime%' || firstname like '%$datetime%' || checktime like '%$datetime%' ORDER BY t_time DESC";
$result=mysqli_query($connect,$time);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="showtimeprivate.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap.css">

    <title>Document</title>
</head>
<body>

<br>
<br>
<div class="scroll">
   <table  class="container-fluid">
<thead class="" >
    <tr>
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
<tbody>
<tr >
    <?php while($line=mysqli_fetch_array($result,MYSQLI_BOTH)){;?>
<td><?php echo $line[1];?></td>
<td><?php echo $line[2];?></td>
<td><?php echo $line[3];?></td>
<td><?php echo $line[4];?></td>
<td><?php echo $line[5];?></td>
<td><?php echo $line[9];?></td>
<td><?php echo $line[10];?></td>
<!-- <td><?php echo $line[11]."&nbsp".$line[12]?></td> -->
<td style="width:200px; height:80px;"><iframe src='https://www.google.com/maps?q=<?php echo $line[11];?>,<?php echo $line[12];?>&hl=es;z=14&output=embed'style="width: 200px; height: 80px;"></iframe></td>
</tr>
<?php } ?>
</tbody>
   </table>
   </div>
   <br>
  

</body>
</html>
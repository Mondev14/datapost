<?php
require('link.php');
$word="SELECT * FROM private_data ORDER BY id ASC";
$result=mysqli_query($connect,$word);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
 <link rel="stylesheet" href="showdata.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap.css">
    <title>Document</title>
</head>
<body>
<div class="header">ที่ทำการไปรษณีย์อำเภอท่าคันโท</div>
<br>
<h1 class="heading">ข้อมูลพนักงาน</h1>


<br>
<div class="scroll">
   <table border="2" class="container-fluid">
<thead class="table-danger" >
    <tr class="typeheader">
    <th class="text-center">รูป</th>
        <th class="text-center"id="el" >รหัสพนักงาน</th>
        <!--<th class="text-center" id="el">คำนำหน้า</th>-->
        <th class="text-center">ชื่อ-นามสกุล</th>
       <!-- <th class="text-center">นามสกุล</th>-->
        <th class="text-center">ตำแหน่ง</th>
        <th class="text-center">เบอร์โทร</th>
        <th class="text-center">อีเมล์</th>
        <th>ลบข้อมูลพนักงาน</th>
    </tr>
</thead>
<tbody class="" align="center">
<?php while($line=mysqli_fetch_array($result,MYSQLI_BOTH)){;?>
<tr>
        <td><img src="<?php echo "img/".$line[7];?>" alt=""></td>
<td class="typeletter"><?php echo $line[2];?></td>
<td class="typeletter"><?php echo $line[3],$line[4]."&nbsp;&nbsp;".$line[5];?></td>
<td class="typeletter"><?php echo $line[6];?></td>
<td class="typeletter"><?php echo $line[8];?></td>
<td class="typeletter"><?php echo $line[9];?></td>
<div class="size">
<td class="typeletter"><a href="minus.php?minus=<?php echo $line[2];?> "  target="" class="btn btn-dark text-light" >ลบข้อมูล</a></td>
    </div>
    
</tr>
<?php }?>
</tbody>
   </table> 
    </div>
   <br>
   <div align="center" class="md-1">
<a href="page_header.php" target="" rel="" >กลับไปหน้าก่อนหน้า</a>
</div>
   <br>
   <br>
</body>
</html>
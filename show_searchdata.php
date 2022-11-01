<?php
require('link.php');
$name = $_POST["id"];
//echo gettype($name);
$mysql="SELECT * FROM newdata WHERE id  like '%$name%' ORDER BY id ASC";
//echo $mysql;
$result=mysqli_query($paramid,$mysql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
</head>
<body>
    <div align="center">
    <img src="https://file.thailandpost.com/upload/content/pickup_5e7abeea8b66f.jpg" alt="" width="300" hight="200">
</div>
    <br>
    <br>
    <h1 align="center">แสดงผลข้อมูลการค้นหาข้อมูลของพนักงาน</h1>
    <br>
    <div class="container" >
    
<br>
<br>
    </form>
    <table border="1" class="container">
<thead>
<tr align="center" class="bg-danger">
    <th class="text-white" >รหัสพนักงาน</th>
    <th class="text-white">ชื่อ</th>
    <th class="text-white">นามสกุล</th>
    <th class="text-white">เวลาการเข้างาน</th>
</tr>

</thead>
<tbody align="center">
 <?php while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){?>
    <tr>
<td><?php echo $row[0];?></td>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td><?php echo $row[3];?></td>
</tr>
 
<?php }?>
</tbody>


    </table>
   
</body>
</html> 
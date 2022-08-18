<?php
require('link.php');
$values=$_GET["word"];
$plus="SELECT*FROM newdata WHERE id=$values";
$process=mysqli_query($connect,$plus);
$sult=mysqli_fetch_array($process,MYSQLI_BOTH);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลเวลาเข้าปฎิบัติงาน</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body align="center">
    <br>
    <h1 align="center">แก้ไขข้อมูลเวลาเข้าปฎิบัติงานในที่ทำการไปรษณีย์</h1>
    <br>
    <form action="editdata.php" method="post" class="text-center" >
        <input type="hidden" name="code" id="">
  
        <div class="container">
        <div class="text-center">
            <div>
                <label for="">รหัสพนักงาน</label>
                <input type="id" name="id" id="" value="<?php echo $sult[0]; ?>">
            </div>
            <div>
<label for="">ชื่อพนักงาน</label>
<input type="text" name="firstname" id=""value="<?php echo $sult[1]; ?>">
</div>
<div class="text-center">
<label for="">นามสกุล</label>
<input type="text" name="lastname" id="" value="<?php echo $sult[2]; ?>">
</div>
<!-- <div>
<input type="datetime-local" name="tt" id="">
</div> -->
<div>
    <input type="submit" class="btn btn-success" value="อัพเดตข้อมูล">
</div>
<br>

    </form>
  <a href="express.php" target="" align="center" class=" btn btn-primary">ไปหน้าแสดงผลข้อมูล-></a>
  <br>
  <br>
  <br>
  <div>
  
</div>
  <br>
  <br>

</body>
</html>

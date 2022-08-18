<?php date_default_timezone_set("asia/bangkok")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลเวลาเข้าปฎิบัติงาน</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
<style>
    body{
        background-color:pink;
    }
</style>
</head>
<body align="center">
    <br>
    <h1 align="center">บันทึกเวลาเข้าปฎิบัติงานของพนักงานไปรษณีย์</h1>
    <br>
    <form action="show.php" method="post" class="text-center" >
        <div class="container">
        <div class="text-center">
            <div>
                <label for="">รหัสพนักงาน</label>
                <input type="id" name="id" id="">
            </div>
            <div>
<label for="">ชื่อพนักงาน</label>
<input type="text" name="firstname" id="">
</div>
<div class="text-center">
<label for="">นามสกุล</label>
<input type="text" name="lastname" id="">
</div>

<!-- <div>
<input type="datetime-local" name="tt" id="">
</div> -->
<div>
    <input type="submit" class="btn btn-success" value="บันทึกข้อมูล">
</div>
<br>

    </form>
  <a href="express.php" target="" align="center" class=" btn btn-primary">ไปหน้าแสดงผลข้อมูล-></a>
  <br>
  <br>
  <br>
  <div>
  <img src="https://inwfile.com/s-m/rap58q.jpg" alt=""width="300" hight="200" >
</div>
  <br>
  <br>

</body>
</html>
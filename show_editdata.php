<?php

require('link.php');
$t=$_GET["edit"];
//echo $t;
 $calldata="SELECT * FROM private_data WHERE id=$t";
$asql=mysqli_query($connect,$calldata);
$result=mysqli_fetch_array($asql,MYSQLI_BOTH);
//print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="show_edit.css">

</head>

<body>

<h1  class="text-red">แบบแก้ไขข้อมูลพนักงาน</h1>
<form action="update.php" method="post" >
 
<div>
<label for="">ชื่อผู้ใช้</label>
<input type="ID" name="ID" id="" value="<?php echo $result[0];?>">
</div>

<div   >
<label for="">รหัสผ่าน</label>
<input type="password" name="password" id="password"value="<?php echo $result[1];?>">
<input type="checkbox" name="" id="" onclick="showpass()">
<script>
    function showpass(){
    var p = document.getElementById('password');
                                   if(p.type=='password'){
                                    p.type ='text';
                                   }else if(p.type=='text'){
                                    p.type ='password';
                                   }

}
</script>
</div>

<div   >
<label for="">รหัสพนักงาน</label>
<input type="ืname" name="code" id=""value="<?php echo $result[2];?>">
</div>

<div >
<label for="">คำนำหน้า</label>
<input type="text" name="pname" id="" placeholder="นาย นางสาว นาง"value="<?php echo $result[3];?>">
</div>

<div   >
<label for="">ชื่อ</label>
<input type="text" name="name" id=""value="<?php echo $result[4];?>">
</div>

<div   >
<label for="">นามสกุล</label>
<input type="text" name="nname" id=""value="<?php echo $result[5];?>">
</div>

<div  >
<label for="">ตำแหน่ง</label>
<input type="text" name="posit" id="" value="<?php echo $result[6];?>">
</div>

<div   >
<label for="pic">รูปโปรไฟล์</label>
<input type="file" name="pic" id="" value="<?php echo $result[7];?>">
</div>

<div   >
<label for="">เบอร์โทร</label>
<input type="text" name="tel" id="" value="<?php echo $result[8];?>">
</div>

<div  >
<label for="">อีเมล์</label>
<input type="text" name="mail" id="" value="<?php echo $result[9];?>">
</div>

<div   >
<input type="submit" value="อัพเดตข้อมูล" class="btn btn-success">

</div>

</form>

</body>
</html>
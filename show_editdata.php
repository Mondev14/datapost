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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Document</title>
<link rel="stylesheet" href="show_edit.css">

</head>

<body>

<h1  class="text-red">แบบแก้ไขข้อมูลพนักงาน</h1>
<form action="update.php" method="post" >
 <div id="contain">
 <div class="input-group mt-3 mb-3">
<label for="" class="input-group-text">ชื่อผู้ใช้</label>
<input type="text" name="ID" id="" value="<?php echo $result[0];?>" class="form-control">
</div>

<div class="input-group mb-3">
<label for="" class="input-group-text">รหัสผ่าน</label>
<input type="password" name="password" id="password"value="<?php echo $result[1];?>" class="form-control">
</div>
<div class="input-group mb-3">
    <div class="input-group-text">
    <input type="checkbox" name="" id="" onclick=" check()">
    </div>
<label for="" class="input-group-text"><i data-feather="eye-off"></i></label>
</div>
<script>
function check(){
    var p = document.getElementById('password');
                                   if(p.type=='password'){
                                    p.type ='text';
                                   }else if(p.type=='text'){
                                    p.type ='password';
                                   }

}
</script>

<div  class="input-group mb-3" >
<label for="" class="input-group-text">รหัสพนักงาน</label>
<input type="text" name="code" id=""value="<?php echo $result[2];?>" class="form-control">
</div>

<div class="input-group mb-3" >
<label for="" class="input-group-text">คำนำหน้า</label>
<input type="text" name="pname" id="" placeholder="นาย นางสาว นาง"value="<?php echo $result[3];?>" class="form-control">
</div>

<div  class="input-group mb-3" >
<label for="" class="input-group-text">ชื่อ</label>
<input type="text" name="name" id=""value="<?php echo $result[4];?>" class="form-control">
</div>

<div  class="input-group mb-3" >
<label for="" class="input-group-text">นามสกุล</label>
<input type="text" name="nname" id=""value="<?php echo $result[5];?>" class="form-control">
</div>

<div class="input-group mb-3" >
<label for="" class="input-group-text">ตำแหน่ง</label>
<input type="text" name="posit" id="" value="<?php echo $result[6];?>" class="form-control">
</div>

<div  class="input-group mb-3" >
<label for="pic" class="input-group-text">รูปโปรไฟล์</label>
<input type="file" name="pic" id="" value="<?php echo $result[7];?>" class="form-control">
</div>

<div class="input-group mb-3"  >
<label for="" class="input-group-text">เบอร์โทร</label>
<input type="text" name="tel" id="" value="<?php echo $result[8];?>" class="form-control">
</div>

<div class="input-group mb-3" >
<label for="" class="input-group-text">อีเมล์</label>
<input type="text" name="mail" id="" value="<?php echo $result[9];?>" class="form-control">
</div>

<div class="input-group mb-3"  >
<input type="submit" value="อัพเดตข้อมูล" class="btn btn-success">

</div>
 </div>
</form>
<script>
  feather.replace()
</script>
</body>
</html>
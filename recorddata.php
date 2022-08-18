<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap">
    <link rel="stylesheet" href="recorddata.css">
    <style>
    </style>
</head>

<body>
<h1  class="header">แบบลงทะเบียนพนักงาน</h1>
<br>

<form action="basedata.php" method="post" >
<div class="data"  >
<label for="" id="rc">ชื่อผู้ใช้</label>
<input type="ID" name="ID" id=""required>
</div>

<div class="data"  >
<label for=""id="rc">รหัสผ่าน</label>
<input type="password" name="password" id="password" required>
</div>
<div class="data" class="text" >
<input type="checkbox" name="" id="" onclick=" check()">
<label for="">check</label>
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

<div class="data"  >
<label for="">รหัสพนักงาน</label>
<input type="name" name="code" id=""required>
</div>

<div class="data">
<label for="">คำนำหน้า</label>
<select name="pname" id="">
    <option value="นาย">นาย</option>
    <option value="นาง">นาง</option>
    <option value="นางสาว">นางสาว</option>
</select>
</div>

<div class="data"  >
<label for="">ชื่อ</label>
<input type="text" name="name" id=""required>
</div>

<div class="data"  >
<label for="">นามสกุล</label>
<input type="text" name="nname" id=""required>
</div>

<!--<div class="data"  >
<label for=""id="rc">ตำแหน่ง</label>
<input type="text" name="posit" id=""required>
</div>-->
<div class="data">
<label for="">ตำแหน่ง</label>
<select name="posit" id="">
    <option value="---">---</option>
    <option value="หัวหน้าไปรษณีย์">หัวหน้าไปรษณีย์</option>
    <option value="พนักงานรับฝากพัสดุและคัดแยก">พนักงานรับฝากพัสดุและคัดแยก</option>
    <option value="พนักงานนำจ่ายพัสดุ">พนักงานนำจ่ายพัสดุ</option>
    <option value="นักศึกษาฝึกงาน">นักศึกษาฝึกงาน</option>
    </select>
</div>

<div class="data"  >
<label for="" id="pic"></label>
<input type="file" name="pic" id=""required>
</div>

<div class="data"  >
<label for="">เบอร์โทร</label>
<input type="tel" name="tel" id=""required>
</div>

<div class="data"  >
<label for="">อีเมล์</label>
<input type="email" name="mail" id=""required>
</div>

<div class="data"  >
<input type="submit" value="บันทึกข้อมูล"  name="submit" class="btn btn-success">
</div>
</form>

</body>
</html>
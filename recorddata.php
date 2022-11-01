<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="reccord.css">
    <style>
    </style>
</head>

<body>
<div id="img">
<img src="img/logopost.png" alt="">
</div>
<div class="part-head">
<h1 align="center">แบบลงทะเบียนพนักงาน</h1>
</div>
<div class="form"  style="width:fit-content;" >
<form action="basedata.php" method="post">
<div class="input-group mt-3 mb-3"  >
<label for="" id="rc" class="input-group-text">ชื่อผู้ใช้</label>
<input type="text" name="ID" class="form-control" id=""required>
</div>

<div class="input-group mb-3"  >
<label for=""id="rc" class="input-group-text">รหัสผ่าน</label>
<input type="password" name="password" id="password" class="form-control" required>
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

<div class="input-group mb-3"  >
<label for="" class="input-group-text">รหัสพนักงาน</label>
<input type="text" name="code" class="form-control" id=""required>
</div>

<div class="input-group mb-3">
<label for="" class="input-group-text">คำนำหน้า</label>
<select name="pname" id="" class="form-control" required>
    <option value="นาย">นาย</option>
    <option value="นาง">นาง</option>
    <option value="นางสาว">นางสาว</option>
</select>
</div>

<div class="input-group mb-3"  >
<label for="" class="input-group-text">ชื่อ</label>
<input type="text" name="name" class="form-control" id=""required>
</div>

<div class="input-group  mb-3"  >
<label for="" class="input-group-text">นามสกุล</label>
<input type="text" name="nname" class="form-control" id=""required>
</div>

<div class="input-group mb-3">
<label for="" class="input-group-text">ตำแหน่ง</label>
<select name="posit" id="" class="form-control" required>
    <option value="---">---</option>
    <option value="หัวหน้าไปรษณีย์">หัวหน้าไปรษณีย์</option>
    <option value="พนักงานรับฝากพัสดุและคัดแยก">พนักงานรับฝากพัสดุและคัดแยก</option>
    <option value="พนักงานนำจ่ายพัสดุ">พนักงานนำจ่ายพัสดุ</option>
    <option value="นักศึกษาฝึกงาน">นักศึกษาฝึกงาน</option>
    </select>
</div>

<div class="input-group mb-3"  >
<input type="file" name="pic" class="form-control" id=""required>
</div>

<div class="input-group mb-3"  >
<label for="" class="input-group-text">เบอร์โทร</label>
<input type="tel" name="tel" class="form-control" id=""required>
</div>

<div class="input-group mb-3"  >
<label for="" class="input-group-text">อีเมล์</label>
<input type="text" name="mail" class="form-control" id=""required>
</div>

<div class=" mb-3 text-center"  >
<input type="submit" value="บันทึกข้อมูล"  name="submit" class="btn btn-success ">
<input type="reset" value="ล้างค่า" class="btn btn-dark text-light">
</div>
</form>
</div>
<script>
  feather.replace()
</script>
</body>
</html>
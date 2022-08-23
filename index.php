



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<link rel="stylesheet" href="form.css">

    <title>Document</title>
</head>
<body class="normal" id="body">
    
   
    <script>
let color=document.getElementById("body");
 function pagecolor2(){
color.classList.toggle("unnormal");
 }

    </script>
    <div class="image"></div>
    <h1>ลงชื่อเข้าใช้</h1>
    <form  action="login.php" method="post">
                            <div class="sm">
                        <label for="">ชื่อผู้ใช้</label>
                      <input class="form-control" type="text" placeholder="username"name="username" id="username">
                        <label for="">รหัสผ่าน</label>
                      <input class="form-control" type="password" placeholder="password" name="password" id="password">
                     
</div>
<div class="function">
<input type="radio" name="" onclick ="show()">
<label for=""id="hide">ซ่อนหรือแสดง </label>
</div>
<div class="text-center">
<input type="submit" name="submit" align="center" class="btn btn-success btn-md " value="เข้าสู่ระบบ">
</div>

<div class="text-center">
<input type="reset" value="ล้างข้อมูล" align="center" class="btn btn-warning btn-md ">
</div>
<script>
function show(){
var p = document.getElementById('password');
 if(p.type=='password'){
  p.type ='text';
 }else if(p.type=='text'){
  p.type ='password';
 }

}
</script>

</div>
                            <div id="register-link" class="text">
                                <a href="recorddata.php" class="text-white" id="regist">**ลงทะเบียน</a>
                            </div>
                            <div class="pic"></div>
                        </form>
                        
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
<link rel="stylesheet" href="index.css">

    <title>Document</title>
</head>
<body class="normal" id="body"  >
 <div class="img">
 <img src="img/logopost.png" alt="" id="img">
 </div>
    <h1>ลงชื่อเข้าใช้</h1>
  <div class="outfrom mt-3" style="width:fit-content;" >
    <form action="login.php" method="post" >
        <div class="input-group mb-3">
            <label for="" class="input-group-text">ชื่อผู้ใช้</label>
            <input type="text" name="username" id="" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="" class="input-group-text">รหัสผ่าน</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-text">
            <input type="checkbox" name="" id="" class="" onclick="show()">
            </div>
            <label for="" class="input-group-text"><i data-feather="eye-off" class="eye"></i></label>
        </div>
        <div class="mb-3 text-center">
        <input type="submit" value="ลงชื่อเข้าใช้" class="btn btn-success" name="submit">
        <input type="reset" value="ล้างค่า" class="btn btn-dark text-light">
        </div>
    </form>
  </div>
 <div id="reccord" class="mb-5">
 <a href="recorddata.php" class="text-light"><i data-feather="log-in"></i> <span>ลงทะเบียนพนักงาน</span></a>
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
<script>
  feather.replace()
</script>

                        
</body>
</html>
<?php
session_start();
require('check_admin.php');
require('link.php');
$_SESSION['USER'];
$u_ser = $_SESSION['USER'];
$call="SELECT * FROM private_data where users='$u_ser' ";
$sql=mysqli_query($connect,$call);
$last=mysqli_fetch_array($sql,MYSQLI_BOTH);
$cc=$last[2];
date_default_timezone_set('Asia/bangkok');
$date2=date("  Y-m-d H:i:s");
$date3=date('d-m-Y');
?>
<?php 
require('link.php');
$get=$cc;
$pull="SELECT * FROM regist_time WHERE id like '%$get%'ORDER BY t_time DESC ";
$kiw=mysqli_query($connect,$pull);
$lin=mysqli_fetch_array($kiw,MYSQLI_BOTH);



//echo DateThai("15-07-2021");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="    https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<title>Document</title>
<link rel="stylesheet" href="submitdata.css">

</head>
<body onload="getlocation();">
  
<div >
    <div class="header">ที่ทำการไปรษณีย์อำเภอท่าคันโท</div>
    <br>
<div>
    <h1 id="heading">ลงเวลาการเข้าปฏิบัติงาน</h1>
</div>
    <br>
 
    <div class="container" align="center">
<img src="<?php echo"img/".$last[7]; ?>" alt="" width="200px" height="250px" class="pic">
<br>
<br>
<div>
<form action="sconnect.php" method="post" class="myform" >
       <div class="form-group"  class="botton">
<label for="" class="fw-bolder" id ="lt"></label>
<input type="hidden" name="registtime1" id="regist" placeholder="เช่น 123456" value="<?php echo$last["id"]; ?>">
<input type="hidden" name="registtime2" id="" value="<?php echo $date2; ?>" readonly>
<input type="hidden" name="registtime3" id="" value="<?php echo $date3; ?>"readonly>
<input type="hidden" name="latitude">
<input type="hidden" name="longitude">
<input type="submit" value="ลงเวลาเข้างาน" class="btn btn-success" id="botton">
</div>
   </form>
    </div>
    <!---->
    <div>
   <form action="timeout.php" method="post">
   <div class="form-group"  class="bot">
<label for="" class="fw-bolder" id ="lt"></label>
<input type="hidden" name="ID" id="regist" placeholder="เช่น 123456" value="<?php  echo$last["id"];?>">
<input type="hidden" name="DATETIME" id="" value="<?php echo $date2; ?>" readonly>
<input type="submit" value="ลงเวลาออกงาน" class="btn btn-danger" id="botton">
</div>
   </form>
    </div>
    
    <a href="show_editdata.php?edit=<?php echo $last["id"];?>" target="" id="edit" rel="" class="btn btn-primary text-light">แก้ไขข้อมูล</a>
<br>
    <script type="text/javascript">
function getlocation(){
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showposition,showError);
  }
}
function showposition(position){
  document.querySelector('.myform input[name="latitude"]').value=position.coords.latitude;
  document.querySelector('.myform input[name="longitude"]').value=position.coords.longitude;
}
function showError(error){
  switch(error.code){
    case error.PERMISSION_DENIED:
      alert('คุณต้องอนุญาตให้ google เข้าถึงตำแหน่งคุณ');
      location.reload();
      break;
  }
}
</script>
   <div class="data" >
<?php echo$last[3]; ?>
<?php echo$last[4]; ?>
&nbsp; 
<?php echo$last[5]; ?>
<br>
<?php echo"ตำแหน่ง:".$last[6]; ?>
<br>
<?php echo"เบอร์โทร:".$last[8]; ?>
<br>
<?php echo"อีเมล์ :".$last[9]; ?>
    </div>
<br>
<div  class="container" align="center">
<a href="logout.php" class="btn btn-dark " >ออกจากระบบ</a>
</div>
<br>
<br>
<div class="scroll">
<table  class="container ">
    <thead>
        <tr align="center" >
            <!--<th>รหัส</th>-->
            <th class="name">คำนำหน้า</th>
            <th class="name">ชื่อ&nbsp;-&nbsp;นามสกุล</th>
            <th>ตำแหน่ง</th>
            <th class="name">เวลาเข้างาน</th>
            <th class="name">เวลาออกงาน</th>
            <th class="name">พิกัด</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($kiw as $lin){?>
       <tr align="center">
       <td ><?php echo $lin["beforename"];?></td>
       <td class="name"><?php echo $lin["firstname"]."&nbsp".$lin["lastname"];?></td>
       <td ><?php echo $lin["position"];?></td>
       <td ><?php echo $lin["t_time"];?></td>
       <td ><?php echo $lin["aftertime"];?></td>
       <td class="map"><iframe src='https://www.google.com/maps?q=<?php echo $lin["prelatitude"];?>,<?php echo $lin["prelongitude"];?>&hl=es;z=14&output=embed' class="map"></iframe></td>
        </tr>
       <?php } ?>
       
       </tbody>
</table>
        </div>
</body>
</html>




<?php
require('link.php');



 $a=$_POST["ID"];
 $b=$_POST["password"];
 $c=$_POST["code"];
 $p=$_POST["pname"];
 $d=$_POST["name"];
 $e=$_POST["nname"];
 $f=$_POST["posit"];
 $g=$_POST["pic"];
 $h=$_POST["tel"];
 $i=$_POST["mail"];
 

// if($f=='หัวหน้าไปรษณีย์'){
//     $level= "header";
// }else if($f=='เจ้าหน้าที่รับฝากพัสดุ'){
//     $level= "admin";
// }else if($f=='เจ้าหน้าที่นำจ่ายพัสดุ'){
//     $level= "admin";
// }
switch($f){
    case"หัวหน้าไปรษณีย์";
    $level= "header";
    break;
    case"พนักงานรับฝากพัสดุและคัดแยก";
    $level= "admin";
    break;
    case"พนักงานนำจ่ายพัสดุ";
    $level= "admin";
    break;
    case"นักศึกษาฝึกงาน";
    $level= "admin";
    break;
    case"พนักงานรับฝากพัสดุหน้าเคาน์เตอร์";
    $level= "admin";
    break;
    case"admin";
    $level= "header";
    break;
    default:
    echo "<script>alert('สถานะของคุณถูกแก้ไข')</script>";
    header('location:index.php');
    break;}




 $list="INSERT INTO private_data(users,passwordd,id,acro,firstname,lastname,position,img,phone,email,levell) VALUES('$a','$b','$c','$p','$d','$e','$f','$g','$h','$i','$level')";
 $sult=mysqli_query($connect,$list);
 if($sult){
    echo"<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
    header('refresh:0; url=submitdata.php');
 }else{
     echo"no pass";
 }

?>
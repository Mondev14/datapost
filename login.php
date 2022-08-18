<?php
session_start();
require('link.php');
$_SESSION['USER']=$_POST['username'];
$_SESSION['PASSWORD']=$_POST['password'];
$username=$_POST['username'];
$password=$_POST['password'];
echo $username,$password;
if(isset($_POST['submit']) && $username && $password){
 // echo"success";

$query="SELECT*FROM private_data where users='$username' AND passwordd='$password'";
$result=mysqli_query($connect,$query);

if(mysqli_num_rows($result)==1){
  $row=mysqli_fetch_array($result);
  $name=$row['firstname'];
  $status=$row['levell'];
  //echo $name,$status;
  switch($status){
    case"header":$_SESSION['header_name']=$name;
    header('location:page_header.php');
    break;
    case"admin":$_SESSION['admin_name']=$name;
    header('location:submitdata.php');
    break;
    default:
    echo "<script>alert('สถานะของคุณถูกแก้ไข')</script>";
    header('location:form.php');
    break;
  }

}else{
  echo"<script>alert('ชื่อหรือรหัสผ่านของคุณไม่ถูกต้องง')</script>";
  header('refresh:0; url=form.php');
  
}



}else{
  Header('location:form.php');
  echo"error";
}

?>
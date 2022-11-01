<?php
require('link.php');
echo "สวัสดีครับ";
echo"<br>";
$a= $_POST["ID"];
echo"<br>";
$b=$_POST["password"];
echo"<br>";
$c=$_POST["code"];
echo"<br>";
$d=$_POST["pname"];
echo"<br>";
$e=$_POST["name"];
echo"<br>";
$f=$_POST["nname"];
echo"<br>";
$g=$_POST["posit"];
echo"<br>";
$h=$_POST["pic"];
echo"<br>";
$i=$_POST["tel"];
echo"<br>";
$j=$_POST["mail"];
$sql="UPDATE private_data SET users='$a',passwordd=$b,id='$c',acro='$d',firstname='$e',lastname='$f',position='$g',img='$h',phone='$i',email='$j'
WHERE id=$c";
$up_sgtime="UPDATE regist_time SET id='$c',beforename='$d',firstname='$e',lastname='$f',position='$g',img='$h',phone='$i',email='$j'WHERE id='$c'";
$result=mysqli_query($connect,$sql);
$result2=mysqli_query($connect,$up_sgtime);
if($result){
    header("location:submitdata.php");
    exit(0);
    //echo"success";
}else{
    echo"error";
}
?>
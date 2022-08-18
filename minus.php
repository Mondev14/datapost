<?php
require('link.php');
$r=$_GET["minus"];
echo $r;
 $call="DELETE FROM private_data WHERE id=$r";
 $result=mysqli_query($connect,$call);
 if($result){
    
     header("location:showdata.php"); //ให้กลับหน้าแรกอัตโนมัติ
     exit(0);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<a href="recorddata.php" target="" rel="">ย้อนกลับไปหน้าบันทึกข้อมูล</a>-->
</body>
</html>
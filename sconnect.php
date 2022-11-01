<?php
require('link.php');
$ID= $_POST["registtime1"];
$datetime= $_POST["registtime2"];
$checktime= $_POST["registtime3"];
$lagitude=$_POST["latitude"];
$longitude=$_POST["longitude"];
$g="SELECT * FROM private_data where id LIKE '%$ID%' ";
$msql=mysqli_query($connect,$g);
// echo $datetime;
// echo "<br>";
// echo $checktime;
// echo "<br>";
// echo$latitude;
// echo "<br>";
// echo $longitude;
// echo "<br>";
 $row=mysqli_fetch_array($msql,MYSQLI_BOTH);
 //print_r($row);
 
$id= $row[2];
 echo"<br>";
 $beforename=$row[3];
 $firstname=$row[4];
 $lastname=$row[5];
echo"<br>";
$position=$row[6];
$img=$row[7];
echo "<br>";
$phone=$row[8];
"<br>";
$email=$row[9];
echo"<br>";
$record="INSERT INTO regist_time(id,beforename,firstname,lastname,position,img,phone,email,t_time,prelatitude,prelongitude,checktime) VALUES('$id','$beforename','$firstname','$lastname','$position','$img','$phone','$email','$datetime','$lagitude','$longitude','$checktime')";
$total=mysqli_query($connect,$record);
if($total){
    header("location:submitdata.php");
    exit(0);
}

?>
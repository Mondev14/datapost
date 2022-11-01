<?php
require('link.php');
$o=$_POST["id"];
$A=$_POST["firstname"];
$B=$_POST["lastname"];
//echo $o;


$table="INSERT INTO newdata(id,fname,lname) VALUES('$o','$A','$B')";

$incude=mysqli_query($paramid,$table);
if($incude){
    header("location:st.php"); //ให้กลับหน้าแรกอัตโนมัติ
    exit(0);
}
?>
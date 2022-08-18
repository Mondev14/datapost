<?php
require('link.php');
$id = $_POST["ID"];
$outdatetime = $_POST["DATETIME"];
echo $id;
echo "<br>";
echo $outdatetime;
 $query = "SELECT MAX(t_time) as /*workout นี้เป็น index */  workout FROM regist_time WHERE id='$id' ";
//ดึงข้อมูลที่มีค่าสูงสุดมาเปรียบเทียบ
 $result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
$show = $row['workout'];


//echo $date2;
$update="UPDATE regist_time SET aftertime ='$outdatetime' WHERE t_time ='$show'";
$query=mysqli_query($connect,$update);
if($query){
 header('location:submitdata.php');
exit(0);
}else{
    echo "error";
}





?>
<?php
require('link.php');
$ID= $_GET["pass"];
$PRINT="DELETE FROM newdata WHERE id=$ID";
$SHOW=mysqli_query($connect,$PRINT);
if($SHOW){
    
        header("location:express.php"); //ให้กลับหน้าแรกอัตโนมัติ
        exist:[0];
    }else{
        echo "ไม่สำเร็จ";
    };


?>
<?php //เซ็คเพื่อไม่ให้ย้อนกลับได้เมื่อออกจกระบบแล้ว
if(!$_SESSION['admin_name']){

    session_destroy();
    header('location:form.php');
}



?>
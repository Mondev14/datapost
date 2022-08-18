<?php
if(!$_SESSION['header_name']){

session_destroy();
header('location:form.php');
}



?>
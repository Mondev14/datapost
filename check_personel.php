<?php
if(!$_SESSION['personel_name']){

session_destroy();
header('location:index.php');
}



?>
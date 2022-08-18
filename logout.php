<?php
session_start();
session_destroy();

echo "<script>alert('ออกจากระบบเรียบร้อย')</script>";
Header('Refresh:0; url=form.php');


?>
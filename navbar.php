<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="js/bootstrap.bundle.js"></script> <!--link ใช้กับnavbar,dropdown-->
</head>
<body>
<!--navbar-togle-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-success mt-0 fixed-top">
    <div class="container-fluid">
        <a href="http://" class="navbar-brand">post</a> <!--ชื่อแบรนด์-ชื่อเว็ป-->
       <botton class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbartoggle">
        <span class="navbar-toggler-icon"></span> <!--icon-->
       </botton>
       <div class="collapse navbar-collapse " id="navbartoggle">
        <ul class="navbar-nav " >
            <li class="nav-item pe-5"><a href="http://" class="nav-link">home</a></li>
            <li class="nav-item pe-5"><a href="http://"  class="nav-link">about</a></li>
            <li class="nav-item pe-5"><a href="http://"  class="nav-link">help</a></li>
            <li class="nav-item dropdown"><!--navbar-dropdown-->
  <a href="http://" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">product</a>
  <ul class="dropdown-menu">
    <li ><a href="http://"class="dropdown-item bg-success text-light">ตู้เสื้อผ้า</a></li>
    <li><a href="http://"class="dropdown-item bg-success text-light">ชั้นวางรองเท้า</a></li>
  </ul>
                </li>
        </ul>
       </div>
    </div>
        
</body>
</html>
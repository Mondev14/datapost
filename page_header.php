<?php
session_start();
require('link.php');
require('check_header.php');

$_SESSION['USER'];
$u_ser = $_SESSION['USER'];
$call="SELECT * FROM private_data where users='$u_ser' ";
$sql=mysqli_query($connect,$call);
$last=mysqli_fetch_array($sql,MYSQLI_BOTH);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--  <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">-->
<style>
 
    *{
        box-sizing:border-box;
    }
    html{
    box-sizing:border-box;
    height:100vh;
    width:100vw;
   }
    #header{
        border:solid 5px #ff0000;
    background-color:#ff0000;
    height: 100px;
    font-family: sarabun;
color:white;
font-size :30px;
padding-top:30px;
background-image:url('img/p21.png');
background-position:top left;
background-size:150px;
background-repeat:no-repeat;

}

.ii{
font-family: sarabun;
font-size :25px;
color:black;
font-weight:bolder;
}

#pic{
border: solid 2px black;
}
h1{
font-family: sarabun;
font-size:15px;


}
.center{
    display: block;
}
h2{
    font-family:sarabun;
    font-size:15px;
}

@media screen and (max-width:720px){
*{
    box-sizing:border-box;
}
.container{
display:flex;
flex-direction:column;

width: 250px;



}
#a,#b{
    margin-bottom:10px;
    text-align: center;
}
#header{
    font-size:23px;
    font-family:sarabun;
    text-align:center;
    padding-left:10px;
}
.data{
    font-size:20px;
    font-family:sarabun;
    text-align:center;
}
h2{
    text-align:center;
    font-size:15px;
}

}


</style>
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <div align="center" >
    <h1 id="header">&nbsp;ที่ทำการไปรษณีย์อำเภอท่าคันโท </h1>
</div>
    <br>
    <br>
    <div>
    <div>
        <div align="center" class="data">
<img id="pic"src="<?php echo"img/".$last[7]; ?>" alt="" hight="200px" width="200px;" >
<div class="ii">
<?php echo $last[3];?>
<?php echo $last[4];?>
&nbsp;
<?php echo $last[5];?>
<br>
<?php echo $last[6];?> 
<br>
<?php echo $last[8];?> 
</div>
<br>
<div class="container">
    <a href="showdata.php" class="btn btn-danger" id="a"><h2>ข้อมูลพนักงาน</h2></a>
 
    <a href="showtime.php" class="btn btn-success " id="b"><h2>เวลาเข้างานของพนักงาน</h2></a>

<a href="logout.php" target="" rel=""class="btn btn-dark " id="c" ><h2>ออกจากระบบ</h2></a>
<br>


</div>
</div>

</body>
</html>
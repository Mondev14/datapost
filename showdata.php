<?php
require('link.php');
$word="SELECT * FROM private_data ORDER BY id ASC";
$result=mysqli_query($connect,$word);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
 <link rel="stylesheet" href="showdata.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap.css">
 
    <title>Document</title>
</head>
<body>
<div class="header">ที่ทำการไปรษณีย์อำเภอท่าคันโท</div>
<br>
<h1 class="heading">ข้อมูลพนักงาน</h1>
<br>
<div class="container">
<div class="row">
    <?php while($line=mysqli_fetch_array($result,MYSQLI_BOTH)){?>
   <div class="col-lg-3 col-md-4 flex-wrap">
        <div class="card mb-3 ">
            <div class="card-body">
<div class="text-center">
<img src="<?php echo "img/".$line['img'];?>" alt="" class="card-img-top ">
</div>

                <p class="text-center mt-3" id="name"><?php echo $line['acro'],$line['firstname']."&nbsp".$line['lastname']; ?></p>
                <p class="text-center "><?php echo "รหัสพนักงาน"."&nbsp".":"."&nbsp".$line['id']?></p>
                <p class="text-center"><?php echo "ตำแหน่ง"."&nbsp".":"."&nbsp".$line['position']?></p>
           <p class="text-center"><?php echo "เบอร์โทรศัพท์"."&nbsp".":"."&nbsp".$line['phone']?></p>
           <p class="text-center"><?php echo "อีเมล์"."&nbsp".":"."&nbsp".$line['email']?></p>
            </div>
        </div>
    </div>

    <?php } ?>
</div>
</div>
   <br>
   <div align="center" class="md-1">
<a href="page_header.php" target="" rel="" class="btn btn-dark text-light" >กลับไปหน้าก่อนหน้า</a>
</div>
   <br>
   <br>
</body>
</html>
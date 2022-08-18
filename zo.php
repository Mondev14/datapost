<?php require('link.php');
$data="SELECT*FROM private_data ORDER BY id ASC";
$sql=mysqli_query($connect,$data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
}<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        *{
            box-sizing:border-box;
        }
        .container{
            display:flex;
            flex-direction:row;
            justify-content:center;

        }
        .card{
            width: 45rem;
        }
        table .table{
          
            
        }
        .card{
            background-color:#ff0000;
        }
        tr{
            color:white;
        }
        .container{
            margin-top:50px;
            display:flex;
            flex-direction:row;
            justify-content:center;
           
        }
 
    </style>
</head>
<body>

     <!--<td><input type="button" value="แก้ไข" class="btn btn-primary text-light"data-bs-toggle="modal" data-bs-target="#exampleModal"></td>-->
    <!--/*data-bs-toggle="modal" data-bs-target="#exampleModal" == ลิ้งในการกด modal*/-->
    <!-- data-bs-target="#exampleModal" == อ้างอิงมาจาก id ของ modal*/-->

  
    <!-- Button trigger modal -->
 <div class="container">
 <input type="button" value="เข้าสู่ระบบ" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
 </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Showdata</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        hello world
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
    </div>
</div>
</body>
</html>
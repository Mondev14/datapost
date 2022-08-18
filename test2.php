<?php
// if(isset($_POST["submit"])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
// $latutude=$_POST['latitude'];
// $longitude=$_POST['longtitude'];
// echo $name;
// echo"<br>";
// echo$email;
// echo "<br>";
// echo "ละจิจูด".$latutude;
// echo "<br>";
// echo "ลองจิจูด". $longitude;
// }

$pet=["dog"=>"maa","cat"=>"mea","pig"=>"moo"];
foreach($pet as $index => $value){
    echo $index."->".$value."<br>";
}
// $i=1;
// for($i;$i<=10;$i++){
//     echo $i."<br>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <?php $year=2000; for($year;$year<=2022;$year++){?>
        <option value=""><?php echo "ปี ค.ศ.".$year?></option>
        <?php }?>
    </select>
    <select name="" id="">
    <?php $y=1; for($y;$y<=12;$y++){?>
        <option value=""><?php echo "เดือนที่".$y?></option>
        <?php }?>
        
    </select>
    <select name="" id="">
    <?php $d=1; while($d<=31){?>
        <option value=""><?php echo "วันที่".$d++?></option>
        <?php }?>
        
    </select>
    <select name="" id="">
    <?php $n=1; while($n<=25){?>
        <option value=""><?php echo "ลำดับที่".$n++?></option>
        <?php }?>
        
    </select>
<?php  function number(){
    $s=5;
    $y=10;
   echo $s+$y;
}
 number()?>
</body>
</html>
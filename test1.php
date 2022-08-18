<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap">
  <title>Document</title>
</head>
<body onload="getlocation();">
  <br>
  <br>
  <form class="myform" action="#" method="post" autocomplete="off" align="center">
<label for="">name</label>
<input type="text" name="name" id=""><br>
<label for="">email</label>
<input type="email" name="email" id="">
<br>
<input type="text" name="latitude" id="">
<input type="text" name="longtitude" id=""><br>
<br>
<br>
<input type="submit" value="submit" name="submit">
<script type="text/javascript">
function getlocation(){
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showposition,showError);
  }
}
function showposition(position){
  document.querySelector('.myform input[name="latitude"]').value=position.coords.latitude;
  document.querySelector('.myform input[name="longtitude"]').value=position.coords.longitude;
}
function showError(error){
  switch(error.code){
    case error.PERMISSION_DENIED:
      alert('คุณต้องอนุญาตให้ google เข้าถึงตำแหน่งคุณ');
      location.reload();
      break;
  }
}
</script>

</script>
  </form>
</body>
</html>
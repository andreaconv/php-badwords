<?php 

$paragrafo = $_GET['paragrafo'];
$password = $_GET['password'];
$paragrafoCensurato = str_replace($password,'***',$paragrafo);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <title>Badwords</title>
  <style>
    span{
      color: red;
    }
  </style>
</head>
<body>

  <div class="container py-5">
    <h1>Paragrafo inserito</h1>
    <p><?php echo $paragrafo ?></p>
    <span>Il paragrafo qui sopra è lungo <?php echo strlen($paragrafo) ?> caratteri</span>
  
    <h2>La parola da censurare è <span><?php echo $password ?></span></h2>
  
    <h1>Paragrafo censurato</h1>
    <p><?php echo $paragrafoCensurato ?></p>

  </div>
  
</body>
</html>
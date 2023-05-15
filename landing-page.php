<?php 

$paragrafo = $_GET['paragrafo'];
$password = $_GET['password'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
  <style>
    span{
      color: red;
    }
  </style>
</head>
<body>

  <h1>Paragrafo inserito</h1>
  <p><?php echo $paragrafo ?></p>
  <span>Il paragrafo qui sopra è lungo <?php echo strlen($paragrafo) ?> caratteri</span>

  <h2>La parola da censurare è <span><?php echo $password ?></span></h2>
  
</body>
</html>
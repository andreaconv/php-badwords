<?php 

$paragrafo = $_GET['paragrafo'];
$censura = $_GET['password'];

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
  
</body>
</html>
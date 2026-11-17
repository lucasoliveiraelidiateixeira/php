<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>gerador de tabuada</h2>
  <form method="POST">
     <p>informe um numero:</p>
     <input type="number" name="numero" required>
     <input type="submit" name="gerar" value="gerar tabuada">

<?php

  if(isset($_POST["gerar"])){
  $numero = (int) $_POST["numero"];
  echo "<h3> tabuada do $numero </h3>";
  for($i = 1; $i < 11; $i++){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
  }
  }

 ?>
  </form>
</body>
</html>
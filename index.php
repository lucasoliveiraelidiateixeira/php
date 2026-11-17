<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .ap{color: green;


    }

    .rep{color: red;

    }

    .rec{color: orange;

    }
  </style>
</head>
<form method ="POST">
  <label for="nota1">nota1:</label><br>
  <input type="text" id="nota1" name="nota1"><br>
  <label for="nota2">nota2:</label><br>
  <input type="text" id="nota2" name="nota2"> <br>
  <input type="submit" value="calcular">
</form>
<body>
  <h2>teste</h2>
  <?php
  echo"programa de media ";
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $media = ($nota1 + $nota2) /2;
  echo"a media é:". $media;
  echo "testando o php... heloo world";

  if ($media>6){
    echo "<p class = ap>aprovado</p>";
  }else if($media<3){
    echo "<p class = rep>reprovado</p>";
  }else{
    echo "<p class = rec>recuperação</p>";
  }
    

  ?>
</body>
</html>
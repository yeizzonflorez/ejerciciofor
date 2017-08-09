<?php
$i="1";
$b="10";
$cont="1";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    <title>Ejercicio 4</title>
  </head>
  <body>
  <div class="container">
    <h1>Multiplicacion de todos los numeros que van de:</h1>
    <h2>Numero 1: <?php echo $i ?></h2>
    <h2>Numero 2: <?php echo $b ?></h2>
    <?php

    for ($i=$i ; $i <= $b ; $i++) {
      $cont=$cont*$i;
      echo "$cont </br>";

    }
    ?>
  </div>

  </body>
</html>

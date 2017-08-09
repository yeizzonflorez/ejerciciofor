<?php
$i="5";
$b="10";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <div class="container">
      <h1>Numeros impares que hay entre :</h1>
      <h2>Numero 1: <?php echo $i ?></h2>
      <h2>Numero 2: <?php echo $b ?></h2>
      <?php

      for ($i =$i; $i <= $b; $i++) {
          if (($i%2)==1) {
            echo "$i <br>";

          }

      }

      ?>
    </div>

  </body>
</html>

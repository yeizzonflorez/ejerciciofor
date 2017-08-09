<?php
$a="2";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    <title>Ejercicio 6</title>
  </head>
  <body>
  <div class="container">
    <h1>Tabla del : <?php echo $a ?></h1>
    <?php
      for ($i=1; $i < 10; $i++) {
        $cont=$a*$i;

        echo "$a * $i = $cont <br>";
      }
    ?>
  </div>
  </body>
</html>

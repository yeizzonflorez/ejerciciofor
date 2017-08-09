<?php
$a="5";

 ?>


<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio 5</title>
  </head>
  <body>
<div class="container">
  <h1>Ingresar un numero y muestre ese numero en asteriscos.</h1>
   <h2>El numero ingresado es : <?php echo $a ?></h2>
  <?php
for ($i=1; $i<= $a; $i++) {

echo "*";
}

   ?>

</div>

  </body>
</html>

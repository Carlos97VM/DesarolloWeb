<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="Css/Estilos.css">
  <meta charset="UTF-8">
  <title>Par o impar</title>
</head>
<body>
  <?php
   $numero=$_GET["numero"];
  if($numero>0)
  {
   if($numero%2==0)
      echo "<h3>El Numero $numero es par</h3>";
    else
        echo "<h3>El Numero $numeroes impar</h3>";
  }
  else
    echo "<h3>El Numero <span class='white'>$numero</span>No es entero positivo</h3>";
?>
<hr>
<a class="button" href="index.html">VOLVER</a>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="Css/Estilos.css">
  <meta charset="UTF-8">
  <title>Par o impar</title>
</head>
<body>
  <?php
   $numero=$_GET["numero"];
  if($numero>0)
  {
   if($numero%2==0)
      echo "<h3>El Numero $numero es par</h3>";
    else
        echo "<h3>El Numero $numeroes impar</h3>";
  }
  else
    echo "<h3>El Numero <span class='white'>$numero</span>No es entero positivo</h3>";
?>
<hr>
<a class="button" href="index.html">VOLVER</a>
</body>
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="estilos.css">
  <meta charset="UTF-8">
  <title>Par o impar</title>
</head>
<body>
  <?php
   $numero=$_GET["numero"];
  if($numero>0)
  {
   if($numero%2==0)
      echo "<h3>El Numero <span class='white'>$numero</span>es par</h3>";
    else
        echo "<h3>El Numero <span class='white'>$numero</span>es impar</h3>";
  }
  else
    echo "<h3>El Numero <span class='white'>$numero</span>No es entero positivo</h3>";
?>
<hr>
<a class="button" href="Tarea-5.php">VOLVER</a>
</body>
</html>
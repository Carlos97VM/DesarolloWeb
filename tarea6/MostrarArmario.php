<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="Orange">
	<?php
  include('estante.php');
  session_start();
if (!isset($_SESSION['e']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
 	 $_SESSION['e']->mostrar();
  }
?>
<hr>
<a href="index.html">Volver</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="Orange">
	<?php
  include('estante.php');
  session_start();
if ($_SESSION['e']!=null)
  {
  	$_SESSION['e']->eliminar($_POST['txtFila']);
  	echo "Eliminado";
  }
?>
<hr>
<a href="index.html">Volver</a>
</body>
</html>
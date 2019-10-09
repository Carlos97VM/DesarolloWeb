<<<<<<< HEAD
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
=======
<?php
  include('estante.php');
  session_start();
if (!isset($_SESSION['p']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
  	$_SESSION['e']->eliminar($_POST['txtFila']);
  }
?>
<meta http-equiv="refresh" content="2;URL=index.php">
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

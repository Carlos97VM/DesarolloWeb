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
if (!isset($_SESSION['e']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
 	 $_SESSION['e']->mostrarFila($_POST['txtFila']);
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
if (!isset($_SESSION['e']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
 	 $_SESSION['e']->mostrarFila($_POST['txtFila']);
  }
?>
<meta http-equiv="refresh" content="10;URL=index.php">
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

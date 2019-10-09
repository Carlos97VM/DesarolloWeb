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
 	 $_SESSION['e']->mostrar();
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
 	 $_SESSION['e']->mostrar();
  }
?>
<meta http-equiv="refresh" content="5;URL=index.php">
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

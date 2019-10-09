<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="Orange">
	<?php
  include('Estante.php');
  session_start();
  if (!isset($_SESSION['e']))
  {
    $_SESSION['e']= new Estante();
  }
  $_SESSION['e']->insertar($_POST['txtFila'],$_POST['txtElemento']);

?>
<hr>
<a href="index.html">Volver</a>
</body>
</html>
=======
<?php
  include('Estante.php');
  session_start();
  if (!isset($_SESSION['e']))
  {
    $_SESSION['e']= new Estante();
  }
  $_SESSION['e']->insertar($_POST['txtFila'],$_POST['txtElemento']);

?>

<meta http-equiv="refresh" content="2;URL=index.php">

>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

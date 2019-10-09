<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>Pregunta 12</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
</head>
<body>
	<?php 
require("operaciones.php");

?>
<a href="index.html">Volver Menu</a><hr>
<?php 
$nf=$_GET['txtFibonaci'];
$obj = new OperacionesLab2("","$nf","","","","");
$obj->CalcularFibonaciAsc($nf);

?>

</body>
=======
<!DOCTYPE html>
<html>
<head>
	<title>Pregunta 12</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
</head>
<body>
	<?php 
require("operaciones.php");

?>
<a href="index.html">Volver Menu</a><hr>
<?php 
$nf=$_GET['txtFibonaci'];
$obj = new OperacionesLab2("","$nf","","","","");
$obj->CalcularFibonaciAsc($nf);

?>

</body>
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
</html>
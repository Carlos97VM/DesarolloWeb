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
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Pregunta 6</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
</head>
<body>
	<center>
		<?php 
	$N = $_GET['txtCadena'];
	$C = $_GET['txtCiudad'];
	echo "Su nombre es: <strong>$N</strong>";?>
	<br>
	<?php 
	echo "Vive en <span id='red'>$C</span>"?>
	</center>
	<hr>
	<a href="index.html">VOLVER</a>
</body>
</html>
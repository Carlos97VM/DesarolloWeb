<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Area de un triangulo</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
</head>
<body>
	<center>
		<?php 
		$b=$_GET["base"];
		$h=$_GET["haltura"];
		$a=($b*$h)/2;
		echo "<h3>El area del triangulo Es: $a m2</h3>";
	 ?>
	</center>
	 <hr>
	 <a class="button" href="index.html">VOLVER</a>
</body>
</html>
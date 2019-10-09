<!DOCTYPE html>
<html>
<head>
	<title>Resultado de Seciones</title>
</head>
<body bgcolor="Orange">
	<a href="fsumarSesiones.html">Volver</a>
	<center>
		<h1><i>Resultado de Sesiones</i></h1>
	</center>
	<hr>
	<center>
		<?php session_start();
$n=$_SESSION["txtn"];
$sum=0;
for ($i=1;$i<=$n;$i++)
{
	$valor=$_POST["txtnro".$i];
	$sum+=$valor;
}
echo "La Suma es",$sum;
?>
	</center>
</body>
</html>
//Configurar tiempo de Session->xampp->tmp->INI
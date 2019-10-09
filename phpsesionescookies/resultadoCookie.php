<!DOCTYPE html>
<html>
<head>
	<title>Resultado de Seciones</title>
</head>
<body>
	<a href="fsumarCookies,html">Volver</a>
	<center>
		<h1><i>Resultado de Cookies</i></h1>
	</center>
	<hr>
	<center>
		<?php
$n=$_COOKIE["cookien"];
$sum=0;
for ($i=1;$i<=$n;$i++)
{
	$valor=$_POST["txtnro".$i];
	$sum+=$valor;
}
echo "La Suma es :::",$sum;
?>
	</center>
</body>
</html>
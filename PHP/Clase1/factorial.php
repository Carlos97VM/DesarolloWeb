<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Factorial</title>
</head>
<body>
	--uso de Programacion en el servidor

	--Cliente ----------> Servidor
	--    ^____________________|
	<?<php
		$n = 5;
		$r = 1;
		for ($i=1; $i <= $n ; $i--) { 
			# code...
			$r = $r * $i;
		}
		echo $r;
	?>
</body>
</html>
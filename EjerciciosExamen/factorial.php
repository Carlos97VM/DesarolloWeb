<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Factorial</title>
</head>
<body>

	<?php
		function factorial ($n){
		$r = 1;
		for ($i=1; $i<=$n ; $i++) { 
			$r *=$i;
		}
		return $r;
		}
		?>
</body>
</html>
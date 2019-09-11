<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Factorial</title>
</head>
<body>

	<?php
		$n = 5;
		$r = 1;
		for ($i=1; $i<=$n ; $i--) { 
			$r = $r * $i; ?>
		<?php echo $r }?>
</body>
</html>
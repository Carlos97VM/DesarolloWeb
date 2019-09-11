<!DOCTYPE html>
<html>
<head>
	<title>Datos</title>
</head>
<body>
	<?php 
		$n = $_POST['txtn'];
		for ($i = 1 ; $i <= $n ; $i++){
	?>
		<form action="suma.php" method="POST">
			<label for="Datos">Numero <?php echo $i; ?> </label>
		<input type="text" name="Datos"><br>
	<?php }
	 ?>
	 <input type="submit" name="enviar">
	 </form>
</body>
</html>
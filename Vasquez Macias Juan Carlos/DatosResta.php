<!DOCTYPE html>
<html>
<head>
	<title>Datos</title>
</head>
<body>
<center>
		<?php 
	$n=$_POST['datos'];

	?>
	<form action="Resta.php" method="POST">
	<?php 
	for ($i=0; $i < $n; $i++) { 
	?>
	<input type="text" name="sumando<?php echo $i?>">

	<?php }?>
	<br>
	<?php 
	for ($i=0; $i < $n; $i++) { 
	?>
	<input type="text" name="restando<?php echo $i?>">

	<?php }?>
	<br>
	<input type="submit" value="Calcular">
</center>

</form>
</body>
</html>
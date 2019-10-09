<!DOCTYPE html>
<html>
<head>
	<title>Datos</title>
</head>
<body>
	<?php 
	$n=$_POST['txtn'];
	?>
	<form action="suma.php" method="POST">
	<?php 
	for ($i=0; $i < $n; $i++) { 
	?>

	<input type="text" name="n<?php echo $i?>"><br/>

	<?php
 	} 
	?>
	<input type="hidden" name="txtn" value="<?php echo $n ?>">
	<input type="submit" value="sumar">

</form>
</body>
</html>
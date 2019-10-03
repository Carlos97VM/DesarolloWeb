<?php
session_start();
if ($_SESSION['nivel']==1) { ?>
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insertar Habitacion</title>
</head>
<body>

	<center>
		<h1>Insertar Habitacion</h1>
		<a href="../index.php">Volver</a>
		<hr>
		<form action="insertar.php" method="POST">
			<label for="txtHabitacion">Habitacion: </label>
			<input type="text" name="txtHabitacion"><br><br>
			<label for="txtPrecio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio: </label>
			<input type="text" name="txtPrecio"><br><br>
			<input type="submit" value="Añadir">
		</form>
	</center>
	<hr>
</body>
</html>
<?php }
else {
	header("Location:habitaciones.php");
}
 ?>
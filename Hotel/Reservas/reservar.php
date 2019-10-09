<<<<<<< HEAD
<?php 
session_start();
if ($_SESSION['nivel']==0) { 
	
	?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Reservas</title>
 </head>
 <body>
 	<?php
 		include('../conexion.php'); 
 		$sql = "SELECT id,habitacion from tipohabitacion";
 		$result=$con->query($sql);

 	 ?>
 	<center>
 		<h1>Reservar Habitacion</h1>
 		<a href="../index.php">VOLVER</a>
 		<hr>
 		<form action="reserva.php" method="POST">
 			<label for="txtHabitacion">Habitacion</label>
 			<select name="txtHabitacion" >
 				<?php while ($d=$result->fetch_assoc()) {?>
 				    <option value=" <?php echo $d['id']; ?> "><?php echo $d['habitacion']; ?></option>
 			<?php 	} ?>
 			</select><br><br>
 			<label for="txtFecha">Fecha</label>
 			<input type="date" name="txtFecha"><br><br>
 			<label for="txtDia">Dias</label>
 			<input type="number" name="txtDia" min="0"><br><br>
 			<input type="submit" value="Añadir">


 		</form>
 	</center>
 </body>
 </html> 
<?php }
	else {
		header("Location:../index.php");
	}
=======
<?php 
session_start();
if ($_SESSION['nivel']==0) { 
	
	?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Reservas</title>
 </head>
 <body>
 	<?php
 		include('../conexion.php'); 
 		$sql = "SELECT id,habitacion from tipohabitacion";
 		$result=$con->query($sql);

 	 ?>
 	<center>
 		<h1>Reservar Habitacion</h1>
 		<a href="../index.php">VOLVER</a>
 		<hr>
 		<form action="reserva.php" method="POST">
 			<label for="txtHabitacion">Habitacion</label>
 			<select name="txtHabitacion" >
 				<?php while ($d=$result->fetch_assoc()) {?>
 				    <option value=" <?php echo $d['id']; ?> "><?php echo $d['habitacion']; ?></option>
 			<?php 	} ?>
 			</select><br><br>
 			<label for="txtFecha">Fecha</label>
 			<input type="date" name="txtFecha"><br><br>
 			<label for="txtDia">Dias</label>
 			<input type="number" name="txtDia" min="0"><br><br>
 			<input type="submit" value="Añadir">


 		</form>
 	</center>
 </body>
 </html> 
<?php }
	else {
		header("Location:../index.php");
	}
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
 ?>
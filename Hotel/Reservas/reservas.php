<?php 
session_start();
if ($_SESSION['nivel']==0) { 
	include('../conexion.php');
	$sql = "SELECT t.habitacion,r.fecha,r.dias FROM tipohabitacion t INNER JOIN reservas r on t.id=r.id_tipohabitacion";
 	$resultado=$con->query($sql);
	?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Reservas</title>
 </head>
 <body>
 	<center>
 		<h1>Reservas</h1>
 		<a href="../index.php">VOLVER</a>
 		<hr>
 		<table border="1">
 		<tr>
 			<td>Habitacion</td>
 			<td>Fecha</td>
 			<td>Dia</td>
 		</tr>
 		<?php while ($d=$resultado->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $d['habitacion']; ?></td>
					<td><?php echo $d['fecha']; ?></td>
					<td><?php echo $d['dias']." dias"; ?></td>
					
					<?php } ?>
				</tr>
 		</table>
 	</center>
 </body>
 </html> 
<?php }
	else {
		header("Location:../index.php");
	}
 ?>
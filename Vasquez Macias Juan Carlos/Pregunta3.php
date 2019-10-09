<?php 
session_start();
if ($_SESSION['nivel']==0) { 
	include('../conexion.php');
	$sql = "SELECT nombres, apellidos, correo FROM usuarios";
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
 		<h1>Registrados</h1>
 		<a href="../index.php">VOLVER</a>
 		<hr>
 		<table border="1">
 		<tr>
 			<td>Nombres</td>
 			<td>Apellidos</td>
 			<td>Correo</td>
 		</tr>
 		<?php while ($d=$resultado->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $d['nombres']; ?></td>
					<td><?php echo $d['apellidos']; ?></td>
					<td><?php echo $d['correro']; ?></td>
					
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
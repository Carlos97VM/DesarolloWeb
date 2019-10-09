<?php 
session_start();
if (isset($_SESSION['nombre'])) {
include('../conexion.php');
$sql = "SELECT id,habitacion,precio From tipohabitacion";
$resultado=$con->query($sql);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Habitaciones</h1>
		<a href="../index.php">Volver</a>
	</center>
	<hr>
	<center>
		<table border="1">
			<tr>
				<td>Tipo</td>
				<td>Precio</td>
				<?php if ($_SESSION['nivel']==1) { ?>
					<td colspan="2">Operaciones</td>
				<?php } ?>
			</tr>
			<?php while ($d=$resultado->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $d['habitacion']; ?></td>
					<td><?php echo $d['precio']; ?></td>
					<?php if ($_SESSION['nivel']==1) { ?>
					<td> <a href="feditar.php?id=<?php echo $d['id'] ;  ?>">Editar</a> </td>
					<td> <a href="eliminar.php?id=<?php echo $d['id'] ;  ?>">Eliminar</a> </td>
					<?php } ?>
				</tr>
			    
		<?php	} ?>
		</table>
		<hr>
		<center>
			<?php  
  			if ($_SESSION['nivel']==1) {?>
				<a href="finsertar.php">Insertar</a>
			<?php } ?>
		</center>
	</center>
</body>
</html>
	

<?php }

 else {
 	 	header("location:login.php");
 	 } 
 ?>
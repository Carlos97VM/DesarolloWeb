<<<<<<< HEAD
<?php 
include ('conexion.php');	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>.</title>
</head>
<body>
	<h2>Enviados</h2>
	<table class="table table-hover">
	<thead>
		<tr>
			<th><input type="checkbox" class="form-control small" disabled ></th>
			<th >Para:</th>
			<th >Asunto</th>
			<th>Tipo</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		
		$sql="SELECT id,asunto,tipo,correo,mensaje FROM correos";
		$result=$con->query($sql);
 			while ($fila=$result->fetch_assoc()) 
 			{
 				?>
				<tr >
					<td><input id="<?php echo $fila['id'];?>" type="checkbox" class="form-control" onclick="MostrarBorrar(this.id)"></td>
					<td><a href="javascript:llamar('mostrarMensajeE.php?id=<?php echo $fila['id']; ?>')"><?php echo $fila['correo']; ?></a></td>
					<td><a href="javascript:llamar('mostrarMensajeE.php?id=<?php echo $fila['id']; ?>')"><?php echo $fila['asunto']; ?></a></td>
					<td><?php echo $fila['tipo'] ?></td>
					<td><input id="actualizar<?php echo $fila['id']; ?>" type="button" class="btn btn-danger" style="display:none;" value="Borrar"></td>
 				</tr>
 		<?php }
 		$con->close();
 		 ?>	
	</tbody>
</table> 
</body>
=======
<?php 
include ('conexion.php');	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>.</title>
</head>
<body>
	<h2>Enviados</h2>
	<table class="table table-hover">
	<thead>
		<tr>
			<th><input type="checkbox" class="form-control small" disabled ></th>
			<th >Para:</th>
			<th >Asunto</th>
			<th>Tipo</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		
		$sql="SELECT id,asunto,tipo,correo,mensaje FROM correos";
		$result=$con->query($sql);
 			while ($fila=$result->fetch_assoc()) 
 			{
 				?>
				<tr >
					<td><input id="<?php echo $fila['id'];?>" type="checkbox" class="form-control" onclick="MostrarBorrar(this.id)"></td>
					<td><a href="javascript:llamar('mostrarMensajeE.php?id=<?php echo $fila['id']; ?>')"><?php echo $fila['correo']; ?></a></td>
					<td><a href="javascript:llamar('mostrarMensajeE.php?id=<?php echo $fila['id']; ?>')"><?php echo $fila['asunto']; ?></a></td>
					<td><?php echo $fila['tipo'] ?></td>
					<td><input id="actualizar<?php echo $fila['id']; ?>" type="button" class="btn btn-danger" style="display:none;" value="Borrar"></td>
 				</tr>
 		<?php }
 		$con->close();
 		 ?>	
	</tbody>
</table> 
</body>
>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
</html>
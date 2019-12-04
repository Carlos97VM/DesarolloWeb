<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Laboratorio AJAX</title>
	<link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<h2>Recibidos</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th><input type="checkbox" class="form-control small"></th>
			<th >De:</th>
			<th >Asunto</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		include ('conexion.php');
		$sql="SELECT id,asunto,mensaje FROM correos";
		$result=$con->query($sql);

 			while ($fila=$result->fetch_assoc()) 
 			{
 				?>
				<tr >
					<td><input id="<?php echo $fila['id'];?>" type="checkbox" class="form-control" onclick="MostrarBorrar(this.id)"></td>
					<td><a href="javascript:llamar('mostrarMensaje.php?id=<?php echo $fila['id']; ?>')">Juan Carlos</a></td>
					<td><a href="javascript:llamar('mostrarMensaje.php?id=<?php echo $fila['id']; ?>')"><?php echo $fila['asunto']; ?></a></td>
					<td><input id="actualizar<?php echo $fila['id']; ?>" onclick="borrar(' <?php echo $fila['id']; ?> ');" type="button" class="btn btn-danger" style="display:none;" value="Borrar"  ></td>
 				</tr>
 		<?php }
 		$con->close();
 		 ?>	
	</tbody>
</table> 
</body>
=======
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Laboratorio AJAX</title>
	<link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<h2>Recibidos</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th><input type="checkbox" class="form-control small"></th>
			<th >De:</th>
			<th >Asunto</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		include ('conexion.php');
		$sql="SELECT id,asunto,mensaje FROM correos";
		$result=$con->query($sql);

 			while ($fila=$result->fetch_assoc()) 
 			{
 				?>
				<tr >
					<td><input id="<?php echo $fila['id'];?>" type="checkbox" class="form-control" onclick="MostrarBorrar(this.id)"></td>
					<td><a href="javascript:llamar('mostrarMensaje.php?id=<?php echo $fila['id']; ?>')">Juan Carlos</a></td>
					<td><a href="javascript:llamar('mostrarMensaje.php?id=<?php echo $fila['id']; ?>')"><?php echo $fila['asunto']; ?></a></td>
					<td><input id="actualizar<?php echo $fila['id']; ?>" onclick="borrar(' <?php echo $fila['id']; ?> ');" type="button" class="btn btn-danger" style="display:none;" value="Borrar"  ></td>
 				</tr>
 		<?php }
 		$con->close();
 		 ?>	
	</tbody>
</table> 
</body>
>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
</html>
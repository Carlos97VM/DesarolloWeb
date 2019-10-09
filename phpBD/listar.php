<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		

<?php include ("conexion.php");
$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$resultado=$con->query($sql);
?>
<table>
	<tr>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>CU</th>
	<th>CI</th>
	<th>Operaciones</th>
</tr>
<?php 
while ($fila=$resultado->fetch_assoc())
{
 ?><tr>
 	<td><?php echo $fila['nombres']; ?></td>
	<td><?php echo $fila['apellidos']; ?></td>
	<td><?php echo $fila['cu']; ?></td>
	<td><?php echo $fila['ci']; ?></td>
	<td><a href="feditar.php?txtId=<?php echo $fila['id'] ?>">editar</a> <a href="eliminar.php?txtId=<?php echo $fila['id'] ?>">eliminar</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
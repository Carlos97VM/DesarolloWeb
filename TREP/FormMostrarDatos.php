<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Datos</title>
</head>
<body><?php session_start();
include ("conexion.php");
$sql="SELECT * from actas ";
?>
	<table>
	<tr>
		<th>Pais</th>
		<th>Numero departamento</th>
		<th>Departamento</th>
		<th>Provincia</th>
		<th>Numero municipio</th>
		<th>Municipio</th>
		<th>Circunscripcion</th>
		<th>Localidad</th>
		<th>Recinto</th>
		<th>Numero Mesa</th>
		<th>Codigo Mesa</th>
		<th>Eleccion</th>
		<th>Inscritos</th>
		<th>CC</th>
		<th>FPV</th>
		<th>MTS</th>
		<th>UCS</th>
		<th>MAS - IPSP</th>
		<th>21F</th>
		<th>PDC</th>
		<th>MNR</th>
		<th>PAN-BOL</th>
		<th>Votos Validos</th>
		<th>Blancos</th>
		<th>Nulos</th>
	</tr>
<?php 
while ($fila=$resultado->fetch_assoc())
{
 ?><tr>
 	<td><img src="images/<?php echo $fila['fotografia']; ?>" alt=""></td>
	
 	<td><?php echo $fila['nombres']; ?></td>
	<td><?php echo $fila['apellidos']; ?></td>
	<td><?php echo $fila['cu']; ?></td>
	<td><?php echo $fila['carrera']; ?></td>
	
	<td><?php echo $fila['ci']; ?></td>
	<td>
		<?php if ($_SESSION['nivel']==1)
		{ ?> 
		<a href="feditar.php?txtId=<?php echo $fila['id'] ?>">editar</a> <a href="eliminar.php?txtId=<?php echo $fila['id'] ?>">eliminar</a>
		<?php } ?>
	</td>
</tr>
<?php
}
?>
</table>
</body>
</html>
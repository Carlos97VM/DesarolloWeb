<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php session_start();
if (isset($_SESSION['correo']))
{
	$orden=$_GET['orden'];
include ("conexion.php");
$sql="SELECT alumnos.id,nombres,apellidos,cu,ci,carrera from alumnos left join carreras on idcarrera=carreras.id ";
if (isset($orden))
   $sql.="order by ".$orden;



//echo $sql;
$resultado=$con->query($sql);
echo "correo:".$_SESSION['correo'];
if ($_SESSION['nivel']==1)
	echo "Administrador";
else
	echo "Alumno";
?>
<a href="cerrar.php">cerrar sesion</a>
<table>
	<tr>
		<th>Fotografia</th>
	<th><a href="listar.php?orden=nombres">Nombres</a></th>
	<th><a href="listar.php?orden=apellidos">Apellidos</a></th>
	<th><a href="listar.php?orden=cu">CU</a></th>
	<th><a href="listar.php?orden=carrera">Carrera</a></th>
	<th><a href="listar.php?orden=ci">CI</a></th>
	<th>Operaciones</th>
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
<a href="finsertar.php">Insertar ALumno</a>
<?php }
else 
{
	echo 'acceso denegado ingrese a <a href="flogin.html"> este enlace para entrar</a>';
}
 ?>

</body>
</html>
<?php 
include ("conexion.php");
$nombres=$_GET['txtNombres'];
$apellidos=$_GET['txtApellidos'];
$edad=$_GET['txtEdad'];
	$sql="insert into persona(nombres,apellidos,edad) values ('$nombres','$apellidos',$edad)";
	$resultado=$con->query($sql);
if ($resultado)
	echo "Se inserto con exito";
else
	echo "Ocurrio un error";
?> 	 
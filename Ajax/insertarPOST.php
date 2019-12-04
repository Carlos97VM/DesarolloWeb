<?php 
include ("conexion.php");
$nombres=$_POST['txtNombres'];
$apellidos=$_POST['txtApellidos'];
$edad=$_POST['txtEdad'];
	$sql="insert into persona(nombres,apellidos,edad) values ('$nombres','$apellidos',$edad)";
	$resultado=$con->query($sql);
if ($resultado)
	echo "Seinserto con exito";
else
	echo "Ocurrio un error";
?> 	 
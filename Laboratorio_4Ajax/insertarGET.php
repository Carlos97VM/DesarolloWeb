<<<<<<< HEAD
<?php 
include ("conexion.php");
$nombres=$_GET['txtNombres'];
$apellidos=$_GET['txtApellidos'];
$correo=$_GET['txtCorreo'];
$password=$_GET['txtPassword'];
	$sql="insert into personas(Nombre,Apellidos,Correo,Password) values ('$nombres',
	'$apellidos','$correo','password')";
	$resultado=$con->query($sql);
if ($resultado)
	echo "Se inserto con exito";
else
	echo "Ocurrio un error";
	

=======
<?php 
include ("conexion.php");
$nombres=$_GET['txtNombres'];
$apellidos=$_GET['txtApellidos'];
$correo=$_GET['txtCorreo'];
$password=$_GET['txtPassword'];
	$sql="insert into personas(Nombres,Apellidos,Correo,Password) values ('$nombres',
	'$apellidos','$correo','password')";
	$resultado=$con->query($sql);
if ($resultado)
	echo "Se inserto con exito";
else
	echo "Ocurrio un error";
	

>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
?> 	
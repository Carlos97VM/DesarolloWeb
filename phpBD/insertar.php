<?php session_start();
if (isset($_SESSION['correo']))
{
	if ($_SESSION['nivel']==1)
		{	include ("conexion.php");
	$Nom=$_POST['txtNombres'];
	$Ape=$_POST['txtApellidos'];
	$Ci=$_POST['txtCI'];
	$Cu=$_POST['txtCU'];
	$ID_carrera=$_POST['sCarrera'];
	$nombreTemporal=$_FILES['imgFotografia']['tmp name']
	$sql="insert into alumnos(nombres,apellidos,cu,ci) values ('$Nom','$Ape','$Cu','$Ci')";
	$resultado=$con->query($sql);
}
else
{
	echo 'usted no tiene permiso para hacer esta accion ';
}
}	
else 
{
	echo 'acceso denegado ingrese a <a href="flogin.html"> este enlace para entrar</a>';
}
?>
<?php  session_start();
if (isset($_SESSION['nombre']) and $_SESSION['nivel']==1 )
{
include('../conexion.php');
$id=$_GET["id"];
$sql="DELETE FROM  tipohabitacion WHERE id=$id";
$con->query($sql);
header("Location:habitaciones.php");
if ($con->connect_error)
	echo "no se pudo editar0".$con->connect_error;

} ?>
<hr>
<a href="index.php">VOLVER</a>
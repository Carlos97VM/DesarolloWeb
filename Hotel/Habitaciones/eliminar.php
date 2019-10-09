<<<<<<< HEAD
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
=======
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
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
<a href="index.php">VOLVER</a>
<<<<<<< HEAD
<?php  session_start();
if (isset($_SESSION['nombre']) and $_SESSION['nivel']==1 )
{
include('../conexion.php');
$habitacion=$_POST["txtHabitacion"];
$precio=$_POST["txtPrecio"];

$id=$_POST["id"];

$sql="UPDATE  tipohabitacion SET habitacion='$habitacion',precio=$precio WHERE id=$id";
// echo $sql;
$con->query($sql);
if ($con->connect_error)
	echo "no se pudo editar0".$con->connect_error;

} ?>
<hr>
<a href="index.php">VOLVER</a>
=======
<?php  session_start();
if (isset($_SESSION['nombre']) and $_SESSION['nivel']==1 )
{
include('../conexion.php');
$habitacion=$_POST["txtHabitacion"];
$precio=$_POST["txtPrecio"];

$id=$_POST["id"];

$sql="UPDATE  tipohabitacion SET habitacion='$habitacion',precio=$precio WHERE id=$id";
// echo $sql;
$con->query($sql);
if ($con->connect_error)
	echo "no se pudo editar0".$con->connect_error;

} ?>
 <meta http-equiv="refresh" content="1;URL=habitaciones.php">   
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

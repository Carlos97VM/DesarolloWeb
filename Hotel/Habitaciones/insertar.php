<<<<<<< HEAD
<?php include('../conexion.php');
$habitacion=$_POST["txtHabitacion"];
$precio=$_POST["txtPrecio"];

$sql="INSERT INTO tipohabitacion(habitacion,precio) values ('$habitacion',$precio)";
$con->query($sql);
if ($con->connect_error)
	echo "no se pudo insertar".$con->connect_error;

 ?>
<hr>
 <a href="index.php">Volver</a>  
=======
<?php include('../conexion.php');
$habitacion=$_POST["txtHabitacion"];
$precio=$_POST["txtPrecio"];

$sql="INSERT INTO tipohabitacion(habitacion,precio) values ('$habitacion',$precio)";
$con->query($sql);
if ($con->connect_error)
	echo "no se pudo insertar".$con->connect_error;

 ?>
<hr>
 <a href="index.php">Volver</a>  
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

<?php include('../conexion.php');
$fecha=$_POST['txtFecha'];
$habitacion=$_POST["txtHabitacion"];
$dia=$_POST["txtDia"];

$sql="INSERT INTO reservas(fecha,id_tipohabitacion,dias) values ('$fecha','$habitacion',$dia)";
$con->query($sql);
header("location:reservar.php");
if ($con->connect_error)
	echo "no se pudo insertar".$con->connect_error;

 ?> 

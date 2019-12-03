<?php 
$con =new mysqli("localhost", "root", "","bd_laboratorio4");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
else
	print "Coneccion Exitosa".'<br>';
?>
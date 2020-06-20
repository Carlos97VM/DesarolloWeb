<?php 
$con =new mysqli("localhost", "root", "","bd_prueba");
if ($con->connect_error)
 die ("Coneccion Fallida".$con->connect_error);
?>
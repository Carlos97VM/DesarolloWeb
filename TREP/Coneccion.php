<?php 
$con =new mysqli("localhost", "root", "","convertcsv.sql");
if ($con->connect_error)
 die ("conexion fallida".$con->connect_error);
?>
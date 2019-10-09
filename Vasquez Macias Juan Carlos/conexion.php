<?php 
	$server="localhost";
	$user="root";
	$pass="";
	$bd="bd_banco";
	$con=new mysqli($server,$user,$pass,$bd);
	if ($con->connect_error) die("Conexion Fallada ".$con->connect_error);
?>
<<<<<<< HEAD
<?php 
	$server="localhost";
	$user="root";
	$pass="";
	$bd="bd_hotel";
	$con=new mysqli($server,$user,$pass,$bd);
	if ($con->connect_error) die("Conexion Fallada ".$con->connect_error);
=======
<?php 
	$server="localhost";
	$user="root";
	$pass="";
	$bd="bd_hotel";
	$con=new mysqli($server,$user,$pass,$bd);
	if ($con->connect_error) die("Conexion Fallada ".$con->connect_error);
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
?>
<<<<<<< HEAD
<?php 
$con =new mysqli("localhost","root","","bd_laboratorio4");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
else
	print "Coneccion Exitosa".'<br>';
=======
<?php 
$con =new mysqli("localhost", "root", "","bd_laboratorio4");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
else
	print "Coneccion Exitosa".'<br>';
>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
?>
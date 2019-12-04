<?php 
include ("conexion.php");
	$sql="select nombres,apellidos,edad from persona limit 1";
	$resultado=$con->query($sql);
	$fila=$resultado->fetch_assoc();
	?>
<ul>
	<li>Nombre:<?php echo $fila['nombres'] ?></li>
	<li>Apellido:<?php echo $fila['apellidos'] ?></li>
	<li>Edad:<?php echo $fila['edad'] ?></li>
</ul>
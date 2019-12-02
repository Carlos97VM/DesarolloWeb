<?php 
include ('conexion.php');
	$correo = $_POST['destinario'];
	$asunto = $_POST['asunto'];
	$mensaje= $_POST['mensaje'];
	if (!empty($correo) && !empty($asunto) && !empty($mensaje)) {
		$insertar ="INSERT INTO correos(tipo,correo,asunto,mensaje,estado) Values ('E','$correo','$asunto','$mensaje',1) ";
		$con->query($insertar);
	}
	$id = $_GET['id'];
	if (!empty($id)) {
		$borrar = "DELETE FROM correos WHERE id=$id";
		$con->query($borrar);
	}
 ?>

<?php 
	$id=$_GET['id'];

	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$obj= new metodos();
	if($obj->eliminarDatosNombre($id)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}
 ?>
<?php 
session_start();
include('conexion.php');
$email=$_POST['txtUser'];
$password=sha1($_POST['txtPassword']);
	$sql="SELECT nombres, apellidos, nivel FROM usuarios WHERE correo='$email' AND password='$password'" ;
	$result=$con->query($sql);
	if($fila=$result->fetch_assoc())
	{
		$_SESSION['nombre']=$fila['nombre'];
		$_SESSION['apellidos']=$fila['apellidos'];
		$_SESSION['nivel']=$fila['nivel'];
		header("location:index.php");
	}
	else
	{
			?>
			<center>
				<div style="background-color: red;" align="center">
					Datos de Autentificacion Equivocados
				</div>
			</center>
			<?php
	}
	

 ?>
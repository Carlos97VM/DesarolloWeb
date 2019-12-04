<?php 
session_start();
include('conexion.php');
$email=$_POST['txtUser'];
$password=md5($_POST['txtPassword']);
	$sql="SELECT nombre,email,password,nivel FROM users WHERE email='$email' AND password='$password'" ;
	$result=$con->query($sql);
	if($fila=$result->fetch_assoc())
	{
		$_SESSION['nombre']=$fila['nombre'];
		$_SESSION['nivel']=$fila['nivel'];
		header("location:index.php");
	}
	else
	{
			echo '<script>alert("Email o contraseña incorrecta")</script>';
			echo "<script>location.href='login.php'</script>";
	}
	

 ?>
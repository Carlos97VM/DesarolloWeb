<?php session_start(); 
    include('conexion.php');
    $correo=$_POST["txtCorreo"];
    $password=sha1($_POST["txtPassword"]);
	$sql = "Select correo,nivel from usuarios WHERE correo='$correo' AND password='$password' ";
	$resultado=$con->query($sql); 
	if ($fila = $resultado->fetch_assoc())
		{
		$_SESSION['correo']=$fila['correo'];
		$_SESSION['nivel']=$fila['nivel'];
		echo "Bienvenido: ".$_SESSION['correo'];
		header("Location:listar.php");
		}
		else
		{	
		 echo "Error datos incorrectos de inicio de sesion";
		header("Location:flogin.html");
		} 
?>

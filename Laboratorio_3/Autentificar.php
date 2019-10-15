<?php 
$Usuario=$_POST['txtUser'];
$Password=$_POST['txtPassword'];
$user = $_POST['chkUser'];
$password = $_POST['chkPassword'];
	if($user=='user')
	{
		setcookie('Usuario'.$Usuario,time()+3600);
	}
	if($password=='password')
	{
		setcookie('Password'.$Password,time()+3600);
	}
	header("Location:FDatos.php");
 ?>
<?php 
include('conexion.php');
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$email = $_POST['txtEmail'];
$password = sha1($_POST['txtPass']);
$rpassword = sha1($_POST['txtRpass']);
$sexo = $_POST['txtSexo'];
$nivel = $_POST['txtNivel'];
	if ($password == $rpassword)
	{
		$sql = "INSERT INTO users(nombre,apellido,email,password,sexo,nivel)
				VALUES ('$nombre','$apellido','$email','$password','$sexo','$nivel')";
		$con->query($sql);
		echo '<script> alert("Registro añadido correctamente")</script>>';
		echo "<script>location.href='login.php'</script>";
	}
	else
	{
		echo '<script> alert("Contraseñas Incorrectas")</script>>';
		echo "<script>location.href='registrarse.php'</script>";	
	}
 ?>
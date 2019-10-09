<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
</head>
<body>
	<center><h1>Formulario de registro</h1></center>
	<hr>
	<center>
		<form action="registro.php" method="POST">
			<label for="txtNombre">Nombres</label>
			<input type="text" name="txtNombre"><br><br>
			<label for="txtApellido">Apellidos</label>
			<input type="text" name="txtApellido"><br><br>
			<label for="txtEmail">Email</label>
			<input type="text" name="txtEmail"><br><br>
			<label for="txtPass">Contraseña</label>
			<input type="password" name="txtPass"><br><br>
			<label for="txtRpass">Repetir Contraseña</label>
			<input type="password" name="txtRpass"><br><br>
			<label for="txtSexo">Sexo: </label>
			<input type="radio" name="txtSexo" value="Masculio" >Masculino
			<input type="radio" name="txtSexo" value="Femenino" >Femenino<br><br>
			<input type="text" hidden="" name="txtNivel" value="0">
			<input type="submit" value="Registrar">
		</form>
	</center>
	<hr>
	<a href="login.php">Volver</a>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
</head>
<body>
	<center><h1>Formulario de registro</h1></center>
	<hr>
	<center>
		<form action="registro.php" method="POST">
			<label for="txtNombre">Nombres</label>
			<input type="text" name="txtNombre"><br><br>
			<label for="txtApellido">Apellidos</label>
			<input type="text" name="txtApellido"><br><br>
			<label for="txtEmail">Email</label>
			<input type="text" name="txtEmail"><br><br>
			<label for="txtPass">Contraseña</label>
			<input type="password" name="txtPass"><br><br>
			<label for="txtRpass">Repetir Contraseña</label>
			<input type="password" name="txtRpass"><br><br>
			<label for="txtSexo">Sexo: </label>
			<input type="radio" name="txtSexo" value="Masculio" >Masculino
			<input type="radio" name="txtSexo" value="Femenino" >Femenino<br><br>
			<input type="text" hidden="" name="txtNivel" value="0">
			<input type="submit" value="Registrar">
		</form>
	</center>
	<hr>
	<a href="login.php">Volver</a>
</body>
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
</html>
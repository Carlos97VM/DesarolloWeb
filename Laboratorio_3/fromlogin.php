<!DOCTYPE html>
<html>
<head>
	<title>Lab 3</title>
</head>
<body>
	<center>
		<form action="Autentificar.php" method="POST">
				<label for="txtUser">Usuario   </label>
				<input type="text" name="txtUser" value="<?php 
				if(isset($_COOKIE['Usuario'])){
					echo $_COOKIE['Usuario'];
				}
				 ?>"><br>
				<label for="txtPassword">Contraseña</label>
				<input type="password" name="txtPassword" value="<?php 
				if(isset($_COOKIE['Passwrd'])){
					echo $_COOKIE['Password'];
				}
				 ?>"><br><br>
				
				<input type="checkbox" name="chkUser" value="user" <?php  
					if(isset($_COOKIE['Usuario'])){
						echo 'checked="checked"';
					}
				?>>recorda Usuario<br>
				<input type="checkbox" name="chkPassword" value="password" <?php  
					if(isset($_COOKIE['Password'])){
						echo 'checked="checked"';
					}
				?>>recorda Contraseña<br>
				<input type="submit" value="Ingresar"><br><br>
			</form>
	</center>
	<?php 
	
 	?>
</body>
</html>
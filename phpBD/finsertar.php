<?php session_start();
if (isset($_SESSION['correo']))
{
	include ("conexion.php");
$sql="SELECT id,carrera  from carreras ";
$resultado=$con->query($sql);

?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="insertar.php" method="POST">
		<label for="txtNombres">Nombres:</label>
		<input type="text" name="txtNombres"><br>
		<label for="txtApellidos">Apellidos:</label>
		<input type="text" name="txtApellidos"><br>
		<label for="txtCI">CI:</label>
		<input type="text" name="txtCI"><br>
		<label for="txtCU">CU:</label>
		<input type="text" name="txtCU"><br>
		<label for="sCarrera">Carrera</label>
		<select name="sCarrera" id>
		<?php while ($carreras = $resultado->fetch_assoc())
		{?>
			<option value="<?php echo $carreras['id'] ?>"><?php echo $carreras['carrera'] ?></option>
		<?php }?>
		
		</select>		
		<input type="submit">
		<form>
	</form>
<?php }
else 
{
	echo 'acceso denegado ingrese a <a href="flogin.html"> este enlace para entrar</a>';
}
 ?>
}	
	
</body>
</html>
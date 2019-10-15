<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php session_start();
if (isset($_SESSION['correo']))
{
if ($_SESSION['nivel']==1)
{	
include ("conexion.php");
	$id=$_GET['txtId'];
$sql="SELECT id,nombres,apellidos,cu,ci from alumnos where id=$id";
//echo $sql;
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
?>

	<form action="editar.php" method="POST">
		<label for="txtNombres">Nombres:</label>
		<input type="text" name="txtNombres" value="<?php echo $fila['nombres'];?>"><br>
		<label for="txtApellidos">Apellidos:</label>
		<input type="text" name="txtApellidos"  value="<?php echo $fila['apellidos'];?>"><br>
		<label for="txtCI">CI:</label>
		<input type="text" name="txtCI"  value="<?php echo $fila['ci'];?>"><br>
		<label for="txtCU">CU:</label>
		<input type="text" name="txtCU"  value="<?php echo $fila['cu'];?>"><br>
		<input type="hidden" name="txtid" value="<?php echo $id;?>"> 
		<input type="submit">
		<form>
	</form>
<?php 
 }
 else
 {
 	echo 'usted no tiene permiso para hacer esta accion ';
 }
}

else 
{
	echo 'acceso denegado ingrese a <a href="flogin.html"> este enlace para entrar</a>';
}

 ?>
	
</body>
</html>
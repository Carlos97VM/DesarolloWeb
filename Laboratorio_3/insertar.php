<!DOCTYPE html>
 <html>
 <head>
 	<title>Insertar</title>
 </head>

 <body>
 	<?php $n=$_POST['NAlumnos'];
 	include ("conexion.php");
	$sql="SELECT *  from carrera ";
	$resultado=$con->query($sql);?>
	<table border="1" cellspacing="2">
		<form>
		<tr>
			<th>Id</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cu</th>
			<th>Sexo</th>
			<th>Carrera</th>
		</tr>
	<?php 
	for ($i=0; $i < $n; $i++) { 
	?><tr>
			<td><input type="text" name="txtID<?php echo $i?>"></td>
			<td><input type="text" name="txtNombres<?php echo $i?>"></td>
			<td><input type="text" name="txtApellidos<?php echo $i?>"></td>
			<td><input type="text" name="txtCU<?php echo $i?>"></td>
			<td><input type="radio" name="txtSexoM<?php echo $i?>" value="Masculino">Masculino
				<input type="radio" name="txtSexoF<?php echo $i?>" value="Femenino">Femenino</td>
				<input type="hidden" name="txtSexo" value="<?php echo $n ?>">
			<td><select name="Carrera">
			<?php while ($Carrera = $resultado->fetch_assoc())
			{?>
				<option value="<?php echo $carreras['Carrera'] ?>"><?php echo $Carrera['Carrera'] ?>Carrera</option>
			<?php }?></select></td>
		</tr>
	<?php }?>

		</form>
	</table>
	<br><br>
	<hr>
	
	<button name="Introducir">Introducir
</body>
</html>
 <?php 
	include ("conexion.php");
	$ID=$_POST['ID'];
	$Nom=$_POST['txtNombres'];
	$Ape=$_POST['txtApellidos'];
	$Sexo=$_POST['txtSexo'];
	$Cu=$_POST['txtCU'];

	for($i = 0 ; $i < $s ; $i++){
		$sql="insert into alumnos(ID,Nombres,Apellidos,Cu,Sexo,CodigoCarrera) values ('ID','$Nom','$Ape','$Cu','$Sexo')";
		$resultado=$con->query($sql);

	}
	echo "Datos Insertados ";
?>
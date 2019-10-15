<!DOCTYPE html>
 <html>
 <head>
 	<title>Insertar</title>
 </head>

 <body>
 	<?php $n=$_POST['NAlumnos'];?>
	<table border="1" cellspacing="2">
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
	?>
		<tr>
			<td><input type="text" name="txtID<?php echo $i?>"></td>
			<input type="hidden" name="txtID" value="<?php echo $n ?>">
			<td><input type="text" name="txtNombres<?php echo $i?>"></td>
			<input type="hidden" name="txtNombres" value="<?php echo $n ?>">
			<td><input type="text" name="txtApellidos<?php echo $i?>"></td>
			<input type="hidden" name="txtApellidos" value="<?php echo $n ?>">
			<td><input type="text" name="txtCU<?php echo $i?>"></td>
			<input type="hidden" name="txtCU" value="<?php echo $n ?>">
			<td><input type="radio" name="txtSexo<?php echo $i?>" value="Masculino">Masculino
				<input type="radio" name="txtSexo<?php echo $i?>" value="Femenino">Femenino</td>
				<input type="hidden" name="txtSexo" value="<?php echo $n ?>">
			<td><select name="sCarrera" id>
			<?php while ($carreras = $resultado->fetch_assoc())
			{?>
				<option value="<?php echo $carreras['id'] ?>"><?php echo $carreras['carrera'] ?>Carrera</option>
			<?php }?></td>
		</tr>
	<?php }?>
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
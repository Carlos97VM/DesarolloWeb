<!DOCTYPE html>
 <html>
 <head>
 	<title>Insertar</title>
 </head>
 <body>
 	<?php 
	$n=$_POST['NAlumnos'];
	?>
	<?php 
	for ($i=0; $i < $n; $i++) { 
	?>

	<input type="text" name="n<?php echo $i?>"><br/>
 	<center>
 		<form action="insertar.php" method="POST">
 		<label for="txtID">ID:</label>
		<input type="text" name="txtID<?php echo $i?>"><br>
		<label for="txtNombres">Nombres:</label>
		<input type="text" name="txtNombres<?php echo $i?>"><br>
		<label for="txtApellidos">Apellidos:</label>
		<input type="text" name="txtApellidos<?php echo $i?>"><br>
		<label for="txtCU">CU:</label>
		<input type="text" name="txtCU<?php echo $i?>"><br>
		<label for="txtSexo">CI:</label>
		<input type="radio" name="txtSexo<?php echo $i?>" value="Masculino">Masculino<br>
		<label for="txtSexo">CI:</label>
		<input type="radio" name="txtSexo<?php echo $i?>" value="Femenino">Femenino<br>
		<label for="sCarrera">Carrera</label>
		<select name="sCarrera" id>
		<?php while ($carreras = $resultado->fetch_assoc())
		{?>
			<option value="<?php echo $carreras['id'] ?>"><?php echo $carreras['carrera'] ?></option>
		<?php }?>
		
		</select>		
		<input type="submit" name="Enviar" value="Enviar">Enviar
			<?php
 	} 
	?>
		<form>
	</form>
 	</center>
 	<?php 
	include ("conexion.php");
	$ID=$_POST['ID'];
	$Nom=$_POST['txtNombres'];
	$Ape=$_POST['txtApellidos'];
	$Sexo=$_POST['txtSexo'];
	$Cu=$_POST['txtCU'];
	$sql="insert into alumnos(ID,Nombres,Apellidos,Cu,Sexo,CodigoCarrera) values ('ID','$Nom','$Ape','$Cu','$Sexo')";
	$resultado=$con->query($sql);
 ?>
 </body>
 </html>
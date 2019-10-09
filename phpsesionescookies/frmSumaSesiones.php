<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Sesiones</title>
</head>
<body>
	<a href="fsumarSesiones.html"></a>
	<center>
		<h1><i>Suma de Sesiones</i></h1>
	</center>
	<hr>
	<center>
		<?php session_start();
$n=$_GET["txtn"];
?>
<form action="resultadoSesiones.php" method="POST" >
<?php	
for ($i=1;$i<=$n;$i++)
{ 
	?>
	<label for="txtnro<?php echo $i; ?>"><?php echo $i; ?></label>
	<input type="text" name="txtnro<?php echo $i ?>"/><br/>
<?php
}
?>
<?php $_SESSION["txtn"]=$n ?>
<input type="submit" value="Enviar"><br/>

</form>
	</center>
</body>
</html>
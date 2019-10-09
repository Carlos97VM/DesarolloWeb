 <!DOCTYPE html>
 <html>
 <head>
 	<title>INDEX</title>
 	<link rel="stylesheet" type="text/css" href="estilos.css">
 </head>
 <body>
 <?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Index</title>
 </head>
 <body>
 	<div id="contenedor">
	<div id="arriba">
		<div id="uno"><img src="usfx.png" id="img"></div>
		<div id="dos"><h1 class="tit1">UNIVERSIDAD DE SAN FRANCISCO XAVIER</h1>
	
		<span class="tit2">Facultad De Tecnologia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span id="red">Sucr</span><span id="yellow">e Bol</span><span id="green">ivia</span>
		<br><br>
		<p class="centrar">Carreras: Ing de Sistemas<br>
		Semestre 2-2019 <br>Alumno<span id="azul">Juan Carlos Vasquez Macias</span> CU <span id="azul">35-4789</span>
		</p>
		</div>
		<div id="tres"><img src="tecnologia.png" id="img"></div>

	</div>
	<div id="izquierda">
		<h1>Estos son los datos de autentificacion</h1>
		<br>
		<p>
			Nombre: <?php echo $_SESSION['nombre']; ?> 
		</p>
		<p>
			Apellidos: <?php echo $_SESSION['apellidos']; ?> 	
		</p>
		<p>
			Nivel: <?php echo $_SESSION['nivel']; ?>
		</p>
		<p>
			<h2>Nivel: <?php if ($_SESSION['	nivel']==1) 
 				{
 					echo 'Carlos Usuario Principal';
				}else {echo 'Cliente' ;}
 					?></h2>
		</p>
	</div>
	<div id="derecha">
		<center>
		<ul class="menu">
			<li><a href="index.php" style="background-color: red;">Inicio</a></li>
			<li><a href="Pregunta3.php" style="background-color: yellow;"title="">Pregunta 3</a></li>
			<li><a href="Pregunta4.php" style="background-color: green;"title="">Pregunta 4</a></li>
			<li><a href="Pregunta5.php" title="">Pregunta 5</a></li>
		</ul>
		</center>
	</div>
	<div id="pie"><p>TODOS LOS DERECHOS RESERVADOS</p></div>
</div>
<?php } 
 	else 
 	header("location:login.html");

 ?>
 </body>
 </html>
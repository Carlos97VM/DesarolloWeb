<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Eercicio 2doParcial</title>
 </head>
 <body>
 	<center>
 		<h1>Bienvenido al Hotel</h1>
 		<h2>Usuario : <?php echo $_SESSION['nombre']; ?></h2>
 		<h2>Nivel: <?php if ($_SESSION['nivel']==1) 
 		{
 			echo 'Administrador';
		}else {echo 'Cliente' ;}
 		?></h2>
 	</center>
 	<hr>
 	<div id="contenedor">
 		<div id="izquierda">
 			<ul>
				<li><h3><a href="javascript:llamar('presentacion.html')">Presentacion</a></h3></li>
 				<li><h3><a href="javascript:llamar('habitaciones.php')"> Habitaciones</a></h3></li>
 				<?php if($_SESSION['nivel']==1) 
 				{ ?>
 				<li><h3><a href="javascript:llamar('Reservas/reservas.php')"> Reservas</a></h3></li>
 				<?php } ?>
 				<li><h3><a href="salir.php"> Salir</a></h3></li>
 			</ul>
 		</div>
 		<div id="derecha">
 			<p>
 				Bienvenidos Al Hotel ,Tarabuco ,<br> aquí encontrara acogida ,<br> un servicio de primer orden,<br> haremos que su estada sea lo más grata posible
 			</p>
 		</div>
 	</div>
 </body>
 </html>
 <?php  } 
 	else {
 	 	header("location:login.php");
 	 }
 ?>
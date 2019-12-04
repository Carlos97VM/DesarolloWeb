<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Laboratorio AJAX</title>
	<link rel="stylesheet" href="styles.css">
	<script src="ajax.js"></script>
</head>
<body>
	<br>
	
		<center>
			<div class="text-center h5"><b>Universidad Mayor Real y Pontificia de San  Francisco Xavier de Chuquisaca <br>
				Facultad de Tecnología <br>
				Carrera de ingeniería de Sistemas <br>
				Materia SIS 256</b>
			</div>
		<p class="text-center h6"><b>Alumno:</b> Juan Carlos Vasquez Macias</p></center>
	
	<div id="contenedor">
			<ul class="menu">
				<li><a href="javascript:llamar('recibidos.php')"  id="bandeja">Bandeja de entrada</a></li>
				<li><a href="javascript:llamar('redactar.html')"  id="redactar">Redactar</a></li>
				<li><a href="javascript:llamar('enviados.php')"  id="enviados">Enviados</a></li>
			</ul>
	</div>
	<!-- Resultado -->
	<div id="contenido">
		<h2>Recibidos</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th><input type="checkbox" class="form-control"></th>
			<th >De:</th>
			<th >Asunto</th>
		</tr>
	</thead>

</table> 
	</div>
</body>
</html>
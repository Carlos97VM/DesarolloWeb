<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tarea-5||SIS-256</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<h1 class="main">Tarea 5</h1>
	<div class="menu-fixed">
		<ul class="menu">
					<li><a href="#ejemplo1">Enunciado 1</a></li>
					<li><a href="#enun2">Enunciado 2</a></li>
					<li><a href="#ejemplo3">Enunciado 3</a></li>
					<li><a href="#ejemplo4">Enunciado 4</a></li>
					<li><a href="#ejemplo5">Enunciado 5</a></li>
				</ul>
	</div>
	<hr>
	<div class="main" id="ejemplo1" >
		<h3>Enunciado 1</h3>
		<p>1. Realizar un programa en php que a través de un formulario pida un número y dibuje
		una tabla de una columna con el número de filas indicado.</p>
		<form action="01.php" method="POST">
			<label for="num"> Introducir un número: </label>
			<input type="number" name="num" min="1">
			<input type="submit" value="Enviar">
		</form>
	</div>
	<hr>
	<div id="enun2" class="main">
		<h3  >Enunciado 2</h3>
		<p>
			2. Realizar un programa en php que a través de un formulario que pida dos números y
			dibuje una tabla de multiplicar con el número de celdas y el tamaño indicado.
		</p>
		<form action="02.php" method="POST">
			<label for="filas"> Nº de filas: </label>
			<input type="text" name="filas">
			<label for="altura"> Altura: </label>
			<input type="text" name="altura">
			<label for="columnas"> Nº de columnas: </label>
			<input type="text" name="columnas">
			<label for="Anchura">Anchura: </label>
			<input type="text" name="anchura">
			<input type="submit" value="Enviar">
		</form>
	</div>
	<hr>
	<div class="main" id="ejemplo3">
		<h3>Enunciado 3</h3>
		<p>
			Programa en PHP que solicite mediante formulario por GET el valor de b y h luego
			llamar a la página area.php que calcula el área de un triangulo cuya formula es
			a=(b*h)/2.
		</p>
		<form action="area.php" method="GET">
			<label for="b"> Base : </label>
			<input type="text" name="b">
			<label for="h">Altura : </label>
			<input type="text" name="h">
			<input type="submit" value="Calcular area">
		</form>
	</div>
	<hr>
	<div class="main" id="ejemplo4">
		<h3>Enunciado 4</h3>
		<p>
			Programa en PHP que solicite mediante formulario por GET el valor de n (del 1 al 7)
			que llame a la página dia.php recupere el valor introducido y en base a ese al valor
			introducido muestre una lista de selección con los días de la semana mostrando
			seleccionado el dia seleccionado. ejemplo para n=3 (Miercoles)
		</p>
		<form action="dia.php" method="GET">
			<label for="numero"> Introducir un valor del dia de la semana: </label>
			<input type="number" name="numero" min="1" max="7">
			<input type="submit" value="enviar">
		</form>
	</div>
	<hr>
	<div class="main" id="ejemplo5">
		<h3>Enunciado 5</h3>
		<p>
			 Dado un número entero positivo determine si es par o impar.
		</p>
		<form action="05.php" method="GET">
			<label for="numero"> Introducir un número: </label>
			<input type="number" name="numero">
			<input type="submit" value="enviar">
		</form>
	</div>
	<hr>
	<div id="copyright">
			<b>Nombre:</b> <span>Grover Taboada Rodas <br> <span><b>Carreras:</b></span> Ing. de Sistemas---Ing. Ciencias de la computacion</span>
	</div>
</body>
</html>
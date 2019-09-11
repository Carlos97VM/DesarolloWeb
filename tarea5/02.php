<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="estilos.css">
	<meta charset="UTF-8">
	<title>Num 2</title>
</head>
<body>
	<?php 
	$filas=$_POST["filas"];
	$columnas=$_POST["columnas"];
	$altura=$_POST["altura"];
	$anchura=$_POST["anchura"];
	echo "<table  " ;
	echo "<tr>";
	echo "<th style='height: {$altura}px' >X</th>";
    for ($j = 1; $j <= $columnas; $j++) {
        echo "<th style='width: {$anchura}px'>$j</th>";
    }
    echo "</tr>";
	for ($i = 1; $i <= $filas; $i++) {
        echo "<tr style='height: {$altura}px'>";
        echo "<th style='width: {$anchura}px'>$i</th>";
        for ($j = 1; $j <= $columnas; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
	echo "</table>";
	 ?>
	 <hr>
	  <a class="button" href="index.html">VOLVER</a>
</body>
</html>
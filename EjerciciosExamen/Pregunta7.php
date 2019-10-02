<!DOCTYPE html>
<html>
<head>
	<title>Suma</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
</head>
<body>
	<center>
		<?php  
			$A = $_GET['txta'];
			$B = $_GET['txtb'];
			$r = $A + $B;?>
			<table border="1" bgcolor="green">
				<tr>
					<th><?php echo $A?></th>
					<th> + </th>
					<th><?php echo $B?></th>
					<th> = </th>
					<th> <?php echo $r?></th>
				</tr>
			</table>
	</center>
	<hr>
	<a  href="index.html">VOLVER</a>
</body>
</html>
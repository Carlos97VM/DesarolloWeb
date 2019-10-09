<!DOCTYPE html>
<html>
<head>
	<title>Tablas</title>
</head>
<body>
	<table>
	<tr>
		<th>M1</th>
		<th>+</th>
		<th>M2</th>
		<th>=</th>
		<th>M</th>
	</tr>
	<?php
		for ($i=0; $i < 10000; $i++) { 
			# code...
		?>
		<tr>
			<td>1</td>
			<td>+</td>
			<td><?php echo $i ?></td>
			<td>=</td>
			<td><?php echo $i + 1?></td>
		</tr>
		<?php }?>
</table>
</body>
</html>
<head>
	<link rel="stylesheet" type="text/css" href="Css/colores.css">
</head>
<?php
$filas=$_GET['nFilas'];
$columna=$_GET['nColumas'];
 ?>
 <table border="1">
 <?php	
 for($i=0;$i<$filas;$i++){
 	echo '<tr>';
	for ($j=0;$j<$columna;$j++){
	?>	
	<th class="<?php 
	if (($i+$j)%2==0) 
		echo "rojo";
		else 
		echo "amarillo";
		echo "verde"; ?>
		">
		<?php
		if ($j%2==0)
		{
			switch($i%3)
			{
			case 0:?> <td class="<?php echo "rojo";?>">
			  break;<?php
			case 1:?><td class="<?php echo "amarillo";?>">
			  break;<?php 
			case 2:?><td class="<?php echo "verde";?>">
			  break;<?php
			  }  

		}
		else
		{
			switch($i%3)
			{
			case 0:?> <td class="<?php echo "rojo";?>">
			  break;<?php
			case 1:?><td class="<?php echo "amarillo";?>">
			  break;<?php 
			case 2:?><td class="<?php echo "verde";?>">
			  break;<?php
			  }

		}
		?>
	</th>
	<?php	
	}
	echo "</tr>";
}
?>
</table>
<hr>
<a href="index.html">Volver</a>  
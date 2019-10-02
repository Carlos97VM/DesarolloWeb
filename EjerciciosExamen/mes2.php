<?php $n=$_GET['txtn'];
$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

?>
<select name="" >
	<?php foreach ($meses as $indice=>$mes)
	{
		?>
	<option value="<?php echo $indice+1; ?>" <?php if ($n==$indice+1) echo 'selected="selected"' ?>><?php echo $mes ?>
	</option>
	<?php } ?>
</select>

<<<<<<< HEAD
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
=======
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
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

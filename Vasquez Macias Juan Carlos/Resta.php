<?php 
	$n=$_COOKIE['txtn'];
	?>
	<table border="1">
		<tr>
			<?php for($i=0, $i<$n;$i++){

			} ?>
			<td>
				<?php echo $_POST['sumando'.$i]-$_POST['restando'.$i] ?>
			</td>
		</tr>
	</table>
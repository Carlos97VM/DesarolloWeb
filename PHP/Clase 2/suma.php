<?php 
	$s = $_POST['txtn'];
	$suma = 0;
	for($i = 0 ; $i < $s ; $i++){
		$suma+=$_POST['s'.$i];
	}
	echo "La SUMA ES: ".$suma;
?>
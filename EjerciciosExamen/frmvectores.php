<?php
session_start();
	if(isset($_SESSION['numero']))
	{
		$n=$_SESSION['numero'];
		echo "n= ".$n;
?>

<form name="vector" action="multiplicarvector.php" method="get">
<?php
echo 'VECTOR A <BR>';
for($i=0;$i<$n;$i++){
	echo $i;
	echo '<input type="input" name="txtA'.$i.'" value=" "/>';

	echo '<br>';
	}
echo 'VECTOR B <BR>';
for($i=0;$i<$n;$i++){
	echo $i;
	
	echo '<input type="input" name="txtB'.$i.'" value=" "/>';
	//echo '<input type="hidden" name="txt'.$i.'" value=" "/>';
	}
	?>

<input type="submit" name="enviar" value="Enviar" />

</form>
<?php
}
else{
	echo 'No existe la sesion de N';
}
?>
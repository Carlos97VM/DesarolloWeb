<<<<<<< HEAD
<?php
session_start();
$n=$_SESSION['numero'];
?>

<?php

echo 'EL RESULTADO ES DE LA MULTIPLICACION ES: <BR>';
for($i=0;$i<$n;$i++){
	$vector1[$i]=$_GET['txtA'.$i];
	$vector2[$i]=$_GET['txtB'.$i];
	$vectorR[$i]=$vector1[$i]*$vector2[$i];
	}
for($i=0;$i<$n;$i++){

	echo $vectorR[$i].'<br>';
	}
	//session_destroy();  //Si queremos destruir la sesion
?>
<hr>
<a href="index.html">VOLVER</a>
=======
<?php
session_start();
$n=$_SESSION['numero'];
?>

<?php

echo 'EL RESULTADO ES DE LA MULTIPLICACION ES: <BR>';
for($i=0;$i<$n;$i++){
	$vector1[$i]=$_GET['txtA'.$i];
	$vector2[$i]=$_GET['txtB'.$i];
	$vectorR[$i]=$vector1[$i]*$vector2[$i];
	}
for($i=0;$i<$n;$i++){

	echo $vectorR[$i].'<br>';
	}
	//session_destroy();  //Si queremos destruir la sesion
?>
<hr>
<a href="index.html">VOLVER</a>
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

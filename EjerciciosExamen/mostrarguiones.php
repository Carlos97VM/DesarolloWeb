<<<<<<< HEAD
<?php 
	include('utiles.php');
	$cadena=$_GET['txtCadena'];	
	$nroguiones=$_GET['txtNroGuiones'];
	$inv= new Utiles($cadena);

	echo $inv->aumentarguionesinvertir($nroguiones);
	echo $inv->aumentarguiones($nroguiones);
 ?>
<hr>
=======
<?php 
	include('utiles.php');
	$cadena=$_GET['txtCadena'];	
	$nroguiones=$_GET['txtNroGuiones'];
	$inv= new Utiles($cadena);

	echo $inv->aumentarguionesinvertir($nroguiones);
	echo $inv->aumentarguiones($nroguiones);
 ?>
<hr>
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
<a href="index.html">VOLVER</a>
<<<<<<< HEAD
<?php 
	include('utiles.php');
	$cadena=$_GET['txtCadena'];	
	$nroguiones=$_GET['txtNroGuiones'];
	$inv= new Utiles($cadena);

	echo $inv->aumentarguionesinvertir($nroguiones);
	
=======
<?php 
	include('utiles.php');
	$cadena=$_GET['txtCadena'];	
	$nroguiones=$_GET['txtNroGuiones'];
	$inv= new Utiles($cadena);

	echo $inv->aumentarguionesinvertir($nroguiones);
	
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
 ?>
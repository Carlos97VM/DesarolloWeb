<<<<<<< HEAD
<?php
include "armario3filas.php";
$t1=$_GET['txtn1'];
$t2=$_GET['txtn2'];
$t3=$_GET['txtn3'];
$armario=new armario3filas();
$armario->set_tope1($t1);
$armario->set_tope2($t2);
$armario->set_tope3($t3);
session_start();
$_SESSION['estante']=$armario;
?>
=======
<?php
include "armario3filas.php";
$t1=$_GET['txtn1'];
$t2=$_GET['txtn2'];
$t3=$_GET['txtn3'];
$armario=new armario3filas();
$armario->set_tope1($t1);
$armario->set_tope2($t2);
$armario->set_tope3($t3);
session_start();
$_SESSION['estante']=$armario;
?>
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
<meta http-equiv='refresh' content ='2;URL=menu.php'>
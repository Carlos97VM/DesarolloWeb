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
<meta http-equiv='refresh' content ='2;URL=menu.php'>
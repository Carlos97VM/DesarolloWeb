<?php
session_start();
include('cadena.php');
$cadena=new cadena();
$cadena->setcad($_SESSION['micadena']);
echo $cadena->mostrar();
//echo $_SESSION['micadena'];
?>
<?php
include "armario3filas.php";
$armario=new armario3filas();
session_start();
if(isset($_SESSION['estante']))
{
    $armario=$_SESSION['estante'];

    if($_GET["opcion"]=="mostrarArmario"){
        $armario->mostrarArmario();
    }
}
?>
<a href="menu.php">Regresar</a>
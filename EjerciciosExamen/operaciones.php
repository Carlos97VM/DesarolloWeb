<?php
include "armario3filas.php";
$armario=new armario3filas();
session_start();
if(isset($_SESSION['estante']))
{
    $armario=$_SESSION['estante'];
    if($_POST["txtOp"]=="insertar"){
        $fila=$_POST["txtn"];
        $Libro=$_POST["txtelemento"];
        $armario->insertarLibro($fila,$Libro);
        echo "<meta http-equiv='refresh' content ='2;URL=menu.php'>";
    }
    if($_POST["txtOp"]=="mostrarFila"){
        $fila=$_POST["txtn"];
        echo "Los elementos de la fila: $fila <br>" ;
        $armario->mostrar($fila);
        echo '<a href="menu.php">Regresar Menu</a>';
    }

}
?>
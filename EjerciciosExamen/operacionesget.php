<<<<<<< HEAD
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
=======
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
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
<a href="menu.php">Regresar</a>
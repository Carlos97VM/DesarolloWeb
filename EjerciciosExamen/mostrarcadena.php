<<<<<<< HEAD
<?php
session_start();
include('cadena.php');
$cadena=new cadena();
$cadena->setcad($_SESSION['micadena']);
echo $cadena->mostrar();
//echo $_SESSION['micadena'];
=======
<?php
session_start();
include('cadena.php');
$cadena=new cadena();
$cadena->setcad($_SESSION['micadena']);
echo $cadena->mostrar();
//echo $_SESSION['micadena'];
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
?>
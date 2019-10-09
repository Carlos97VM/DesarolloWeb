<<<<<<< HEAD
<?php 
require("operaciones.php");
$a=$_POST['txtA'];
$b=$_POST['txtB'];
$c=$_POST['txtC'];
?>
<a href="Formulario11.html">Volver Menu</a><hr>
<?php 
$obj = new OperacionesLab2("","","$a","$b","$c");
$obj->CalcularMenor($a, $b, $c);
?>
=======
<?php 
require("operaciones.php");
$a=$_POST['txtA'];
$b=$_POST['txtB'];
$c=$_POST['txtC'];
?>
<a href="Formulario11.html">Volver Menu</a><hr>
<?php 
$obj = new OperacionesLab2("","","$a","$b","$c");
$obj->CalcularMenor($a, $b, $c);
?>
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276

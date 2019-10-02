<?php 
require("operaciones.php");

?>
<a href="Formulario11.html">Volver Menu</a><hr>
<?php 
$n=$_GET['txtFibonaci'];
$obj = new OperacionesLab2("$n","","","","");
$obj->CalcularFibonaci($n);

?>
<?php 
require("operaciones.php");
?>
<a href="Formulario11.html">Volver Menu</a><hr>
<?php 
$cadena=$_GET['txtCadena'];
$obj = new OperacionesLab2("","$cadena","","","");
$obj->Piramide($cadena);

?>
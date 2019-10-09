<?php include ("conexion.php");


//$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$Nom=$_POST['txtNombres'];
$Ape=$_POST['txtApellidos'];
$Ci=$_POST['txtCI'];
$Cu=$_POST['txtCU'];

$sql="insert into alumnos(nombres,apellidos,cu,ci) values ('$Nom','$Ape','$Cu','$Ci')";
//echo $sql;
$resultado=$con->query($sql);
?>
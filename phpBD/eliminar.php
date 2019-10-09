<?php include ("conexion.php");

$id=$_GET['txtId'];
$sql="DELETE FROM alumnos where id=$id";
//echo $sql;
$resultado=$con->query($sql);

?>
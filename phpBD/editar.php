<?php include ("conexion.php");


//$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$Nom=$_POST['txtNombres'];
$Ape=$_POST['txtApellidos'];
$Ci=$_POST['txtCI'];
$Cu=$_POST['txtCU'];
$id=$_POST['txtid'];
$sql="update alumnos set nombres='$Nom',apellidos='$Ape',cu='$Cu',ci='$Ci' where id=$id";
//echo $sql;
$resultado=$con->query($sql);
?>
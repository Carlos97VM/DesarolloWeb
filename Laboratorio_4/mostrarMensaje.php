<<<<<<< HEAD
<?php 
$id=$_GET['id'];
include ('conexion.php');
$sql="SELECT id,asunto,mensaje FROM correos Where id=$id";
$result=$con->query($sql);
$fila=$result->fetch_assoc();
echo '<b>De:</b> : Juan Carlos Vasquez Macias<br>';
echo '<b>Asunto: </b>';
echo $fila['asunto'];
echo '<hr>';
echo '<b>Mensaje: </b> ';
echo $fila['mensaje'];
$sql2="UPDATE correos SET tipo='R' WHERE id=$id";
$con->query($sql2);
=======
<?php 
$id=$_GET['id'];
include ('conexion.php');
$sql="SELECT id,asunto,mensaje FROM correos Where id=$id";
$result=$con->query($sql);
$fila=$result->fetch_assoc();
echo '<b>De:</b> : Juan Carlos Vasquez Macias<br>';
echo '<b>Asunto: </b>';
echo $fila['asunto'];
echo '<hr>';
echo '<b>Mensaje: </b> ';
echo $fila['mensaje'];
$sql2="UPDATE correos SET tipo='R' WHERE id=$id";
$con->query($sql2);
>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
?>
<<<<<<< HEAD
<?php 
$id=$_GET['id'];
include ('conexion.php');
$sql="SELECT id,asunto,mensaje,tipo,correo FROM correos Where id=$id";
$result=$con->query($sql);
$fila=$result->fetch_assoc();
echo '<b>De:</b> : Juan Carlos Vasquez Macias<br>';
echo '<b>Para: </b>'.$fila['correo'].'<br>';
echo '<b>Asunto: </b>';
echo $fila['asunto'];
echo '<hr>';
echo '<b>Mensaje: </b> ';
echo $fila['mensaje'];
=======
<?php 
$id=$_GET['id'];
include ('conexion.php');
$sql="SELECT id,asunto,mensaje,tipo,correo FROM correos Where id=$id";
$result=$con->query($sql);
$fila=$result->fetch_assoc();
echo '<b>De:</b> : Juan Carlos Vasquez Macias<br>';
echo '<b>Para: </b>'.$fila['correo'].'<br>';
echo '<b>Asunto: </b>';
echo $fila['asunto'];
echo '<hr>';
echo '<b>Mensaje: </b> ';
echo $fila['mensaje'];
>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
?>
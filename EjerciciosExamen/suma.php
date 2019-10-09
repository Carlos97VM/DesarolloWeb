<<<<<<< HEAD
<br>
<?php 
$n=$_POST['txtn'];
$suma=0;
$valor="";

for ($i=0; $i < $n; $i++) { 
$valor=$_POST['n'.$i];
$dato=$_POST['n'.$i]+1;
echo "Valor en la poscision $i : ".$valor;?>
<br><?php
$suma =$valor * $dato;
$dato = $suma;
?><br><?php
 } 
echo "la multiplicacion es: " .$suma;

?>
<br>
<br>
=======
<br>
<?php 
$n=$_POST['txtn'];
$suma=0;
$valor="";

for ($i=0; $i < $n; $i++) { 
$valor=$_POST['n'.$i];
$dato=$_POST['n'.$i]+1;
echo "Valor en la poscision $i : ".$valor;?>
<br><?php
$suma =$valor * $dato;
$dato = $suma;
?><br><?php
 } 
echo "la multiplicacion es: " .$suma;

?>
<br>
<br>
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
<a href="index.html">VOLVER</a>
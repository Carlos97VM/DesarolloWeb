<<<<<<< HEAD

	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
<?php 
$n=$_GET['txtn'];
?>
<form action="suma.php" method="POST">
<?php 
for ($i=0; $i < $n; $i++) { 
?>

<input type="text" name="n<?php echo $i?>"><br/>

<?php
 } 
?>
<input type="hidden" name="txtn" value="<?php echo $n ?>">
<input type="submit" value="Multiplicar">

=======

	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
<?php 
$n=$_GET['txtn'];
?>
<form action="suma.php" method="POST">
<?php 
for ($i=0; $i < $n; $i++) { 
?>

<input type="text" name="n<?php echo $i?>"><br/>

<?php
 } 
?>
<input type="hidden" name="txtn" value="<?php echo $n ?>">
<input type="submit" value="Multiplicar">

>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
</form>
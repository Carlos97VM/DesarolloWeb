<<<<<<< HEAD
<?php 
include ("conexion.php");
$sql="SELECT Nombre,Apellidos,Correo,Password  from personas ";
//echo $sql;
$resultado=$con->query($sql);
?>
<table border="1" cellspacing="1">
	<tr>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>Correo</th>
	<th>Password</th>
	</tr>
	<?php 
	$i=0;
	while ($fila=$resultado->fetch_assoc())
	{ $i++;
	 ?><tr class="<?php if ($i%2==0) 
	 				echo "celesteoscuro";
	 				else
	 				echo "celesteclaro";
	 				?>">
 	<td><?php echo $fila['Nombre']; ?></td>
	<td><?php echo $fila['Apellidos']; ?></td>
	<td><?php echo $fila['Correo']; ?></td>
	<td><?php echo $fila['Password']; ?></td>

</tr>
<?php
}

=======
<?php 
include ("conexion.php");
$sql="SELECT Nombre,Apellidos,Correo,Password  from personas ";
//echo $sql;
$resultado=$con->query($sql);
?>
<table border="1" cellspacing="1">
	<tr>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>Correo</th>
	<th>Password</th>
	</tr>
	<?php 
	$i=0;
	while ($fila=$resultado->fetch_assoc())
	{ $i++;
	 ?><tr class="<?php if ($i%2==0) 
	 				echo "celesteoscuro";
	 				else
	 				echo "celesteclaro";
	 				?>">
 	<td><?php echo $fila['Nombre']; ?></td>
	<td><?php echo $fila['Apellidos']; ?></td>
	<td><?php echo $fila['Correo']; ?></td>
	<td><?php echo $fila['Password']; ?></td>

</tr>
<?php
}

>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
?>
<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
  <title>INSERTAR</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="eliminar.php">
  <br>
  <center><h1>Eliminar elemento en el estanteLibro Por seleccion de Fila Fila</h1></center>
  <br>
  <p>
    <label>Inserte fila:
    <input name="txtFila" type="text" />
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Eliminar" />
    </label>
  </p>
</form>
</body>
</html>

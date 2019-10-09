<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
  <title>INSERTAR</title>
</head>

<body bgcolor="Orange">
<form id="form1" name="form1" method="post" action="mostrarfila.php">
  <br>
  <center><h1>Mostrar Libro de La Fila</h1></center>
  <br>
  <p>
    <label>Inserte fila:
    <input name="txtFila" type="text" />
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Mostrar" />
    </label>
  </p>
</form>
</body>
</html>

<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
  <title>INSERTAR</title>
</head>

<body bgcolor="Orange">
<form id="form1" name="form1" method="post" action="insertar.php">
  <p>&nbsp;</p>
  <p>
    <label>Inserte fila:
    <input name="txtFila" type="text" />
    </label>
     <label>Inserte elemento:
    <input name="txtElemento" type="text" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Enviar" />
    </label>
  </p>
</form>
</body>
</html>

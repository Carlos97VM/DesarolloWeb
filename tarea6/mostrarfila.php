<?php
  include('estante.php');
  session_start();
if (!isset($_SESSION['e']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
 	 $_SESSION['e']->mostrarFila($_POST['txtFila']);
  }
?>
<meta http-equiv="refresh" content="10;URL=index.php">
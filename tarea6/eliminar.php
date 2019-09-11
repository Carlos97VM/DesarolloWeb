<?php
  include('estante.php');
  session_start();
if (!isset($_SESSION['p']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
  	$_SESSION['e']->eliminar($_POST['txtFila']);
  }
?>
<meta http-equiv="refresh" content="2;URL=index.php">
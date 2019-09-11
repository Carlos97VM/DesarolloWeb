<?php
  include('estante.php');
  session_start();
if (!isset($_SESSION['e']))
  {
     echo "No se ha insertado ningun elemento";
  }
  else
  {
 	 $_SESSION['e']->mostrar();
  }
?>
<meta http-equiv="refresh" content="5;URL=index.php">
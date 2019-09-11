<?php
  include('Estante.php');
  session_start();
  if (!isset($_SESSION['e']))
  {
    $_SESSION['e']= new Estante();
  }
  $_SESSION['e']->insertar($_POST['txtFila'],$_POST['txtElemento']);

?>

<meta http-equiv="refresh" content="2;URL=index.php">


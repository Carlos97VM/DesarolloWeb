<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 18</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['estante']))
    {
?>
    <a href="frmCrearEstante3filas.php">Crear Estante</a><br>
<?php
    }
    else{
        echo "sesion creada";
        echo "<meta http-equiv='refresh' content ='2;URL=menu.php'>";
    }
?>  
</body>
</html>
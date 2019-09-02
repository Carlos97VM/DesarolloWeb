<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = $_GET['numero'];
    echo "<h3>El El dia:<span class='white'>$numero</span>es:</h3>";
    ?>
    <form action="#">
        <select class="select" name="dias" id="dias">
        <option value="1" <?= 1 == $numero ? 'selected' : '' ?>>Lunes</option>
        <option value="2" <?= 2 == $numero ? 'selected' : '' ?>>Martes</option>
        <option value="3" <?= 3 == $numero ? 'selected' : '' ?>>Miercoles</option>
        <option value="4" <?= 4 == $numero ? 'selected' : '' ?>>Jueves</option>
        <option value="5" <?= 5 == $numero ? 'selected' : '' ?>>Viernes</option>
        <option value="6" <?= 6 == $numero ? 'selected' : '' ?>>Sabado</option>
        <option value="7" <?= 7 == $numero ? 'selected' : '' ?>>Domingo</option>
        </select>
    </form>
    <hr>
  	 <a class="button" href="Tarea-5.php">VOLVER</a>
</body>
</html>
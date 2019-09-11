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
        <option value="1" <?= 1 == $numero ? 'selected' : '' ?>>Enero</option>
        <option value="2" <?= 2 == $numero ? 'selected' : '' ?>>Febrerp</option>
        <option value="3" <?= 3 == $numero ? 'selected' : '' ?>>Marzo</option>
        <option value="4" <?= 4 == $numero ? 'selected' : '' ?>>Abril</option>
        <option value="5" <?= 5 == $numero ? 'selected' : '' ?>>Mayo</option>
        <option value="6" <?= 6 == $numero ? 'selected' : '' ?>>Junio</option>
        <option value="7" <?= 7 == $numero ? 'selected' : '' ?>>Julio</option>
        <option value="8" <?= 8 == $numero ? 'selected' : '' ?>>Agosto</option>
        <option value="9" <?= 9 == $numero ? 'selected' : '' ?>>Septimbre</option>
        <option value="10" <?= 10 == $numero ? 'selected' : '' ?>>Octubre</option>
        <option value="11" <?= 11 == $numero ? 'selected' : '' ?>>Noviembre</option>
        <option value="12" <?= 12 == $numero ? 'selected' : '' ?>>Diciembre</option>
        <option value="13" <?= 13 == $numero ? 'selected' : '' ?>>ERROR</option>
        </select>
    </form>
    <hr>
  	 <a class="button" href="index.html">VOLVER</a>
</body>
</html>
<?php
include("factorial.php");
$n =$_POST['txtn'];
echo "El factorial de  " . $n . " es ".factorial($n);
?>
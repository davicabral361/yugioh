<?php
header("Location: bootstrap.php");

$carta = $_POST['cartaSelect'];

setCookie('cartaCookie', $carta, time()+100);
?>
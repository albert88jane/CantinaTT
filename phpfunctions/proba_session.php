<?php



session_start();

$dia = date('j');

$_SESSION['DIA'] = $dia;

print_r($_SESSION['DIA']);

?>



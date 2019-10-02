<?php
$miObjeto = new stdClass();
$miObjeto->nombre = $_GET['Nombre'];
$miObjeto->apellido = $_GET['Apellido'];

$archivo = fopen('usuarios.txt', 'a');
fwrite($archivo, json_encode($miObjeto)."\n");
fclose($archivo);
?>
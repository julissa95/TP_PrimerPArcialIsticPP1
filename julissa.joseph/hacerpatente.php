<?php
$MiObjeto=new stdClass();
$MiObjeto->Patente=$_GET['Vehiculo'];
$MiObjeto->Fecha=$_GET['Date'];

$archivo = fopen("listadopatente.txt", "a");
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?>
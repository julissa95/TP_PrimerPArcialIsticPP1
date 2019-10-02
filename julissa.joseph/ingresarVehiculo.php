<?
$MiObjeto=new stdClass();
$MiObjeto->Nombre=$_GET['Vehiculo'];
$MiObjeto->Apellido=$_GET['Patente'];

$archivo = fopen("estacionados.txt", "a");
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);






























?>
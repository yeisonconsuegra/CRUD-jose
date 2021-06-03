<?php
include 'funciones.php';
session_start();
$vide=$_SESSION['id'];
$vtipoid=$_POST['tipoid'];
$vnumid=$_POST['numid'];
$vnombres=$_POST['nombres'];
$vapellidos=$_POST['apellidos'];
$vdireccion=$_POST['direccion'];
$vtelefono=$_POST['telefono'];
$vficha=$_POST['ficha'];


$miconexion=conectar_bd('root', 'crud');
$resultado=consulta($miconexion,"update aprendices set Apre_Tipoid='{$vtipoid}',Apre_Numid='{$vnumid}',apre_nombres='{$vnombres}',apre_apellidos='{$vapellidos}',apre_direccion='{$vdireccion}',Apre_Telefono='{$vtelefono}',Apre_Ficha='{$vficha}' where Apre_id = '{$vide}'");

if ($miconexion->affected_rows>0)
{
	echo "<center><h1>Actualizacion exitosa</h1><center>";
}

?>
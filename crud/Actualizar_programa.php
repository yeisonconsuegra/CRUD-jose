<?php
include 'funciones.php';
session_start();
$vid=$_SESSION['id'];
$vnombrep=$_POST['nombrep'];
$vtipop=$_POST['tipop'];


$miconexion=conectar_bd('root', 'crud');
$resultado=consulta($miconexion,"update programa set PROGRA_NOMBRE='{$vnombrep}',PROGRA_TIPO='{$vtipop}' where PROGRA_ID = '{$vid}'");

if ($miconexion->affected_rows>0)
{
	echo "<center><h1>Actualizacion exitosa</h1><center>";
}

?>
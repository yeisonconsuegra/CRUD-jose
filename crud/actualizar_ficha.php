<?php
include 'funciones.php';
session_start();
$id=$_SESSION['id'];
$id2=$_POST['id2'];


$miconexion=conectar_bd('root', 'crud');
$resultado=consulta($miconexion,"update fichas set FICHA_PROGRA='{$id2}' where FICHA_NUMERO='{$id}'");

if ($miconexion->affected_rows>0)
{
	echo "<center><h1>Actualizacion exitosa</h1><center>";
}

?>
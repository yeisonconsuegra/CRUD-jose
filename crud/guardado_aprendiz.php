<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Guardado</title>
</head>
<body>
	
<?php
include 'funciones.php';
$vid=$_POST['id'];
$vtipoid=$_POST['tipoid'];
$vnumid=$_POST['numid'];
$vnombres=$_POST['nombres'];
$vapellidos=$_POST['apellidos'];
$vdireccion=$_POST['direccion'];
$vtelefono=$_POST['telefono'];
$vficha=$_POST['ficha'];

$miconexion=conectar_bd('root', 'crud');
$resultado=consulta($miconexion,"insert into aprendices
	(apre_id,apre_tipoid,apre_numid,apre_nombres,apre_apellidos,apre_direccion,apre_telefono,apre_ficha) 
	values
	('{$vid}','{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}')");

if ($resultado) 
{
	echo "<center>Datos Ingresados</center>";	
}
  ?>

</body>
</html>
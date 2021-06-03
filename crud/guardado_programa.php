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
$vnombrep=$_POST['nombrep'];
$vtipop=$_POST['tipop'];

$miconexion=conectar_bd('root', 'crud');
$resultado=consulta($miconexion,"insert into programa
	(PROGRA_ID,PROGRA_NOMBRE,PROGRA_TIPO) 
	values
	('{$vid}','{$vnombrep}','{$vtipop}')");

if ($resultado) 
{
	echo "<center>Datos Ingresados</center>";	
}
  ?>

</body>
</html>
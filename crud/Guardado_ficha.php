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
$nuf=$_POST['id'];
$nup=$_POST['id2'];

$miconexion=conectar_bd('root', 'crud');
$resultado=consulta($miconexion,"insert into fichas
	(FICHA_NUMERO,FICHA_PROGRA) 
	values
	('{$nuf}','{$nup}')");

if ($resultado) 
{
	echo "<center>Datos Ingresados</center>";	
}
  ?>

</body>
</html>
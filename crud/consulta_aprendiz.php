<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="consulta.css">
	<script src="js/funciones.js"></script>
	<title>Consulta de aprendicez</title>
</head>
<body>
	<div id="divconsulta" class="container">
		<img src="logosena.png">
		<div id="div2">
			<div id="div4">
				<form name="formulario" role="form" method="post">
					<div class="col-md-12">
						<strong class="lgris">Ingrese criterio de busqueda</strong>
						<br><br>
						<div class="form-row">
							<div class="form-group col-md-3">
								<input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" type="text" name="nombres" placeholder="Nombres">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" type="text" name="apellidos" placeholder="Apellidos">
							</div>
							<br>
							<div class="form-group col-md-3">
								<input class="btn btn-primary" type="submit" value="Consultar">
							</div>
						</div>
						<br>
					</div>
				</form>
				<br>
			</div>
			<br>
			<div style="text-align: center;">
				<?php 
				if ($_SERVER['REQUEST_METHOD']==='POST') 
				{
					include 'funciones.php';
					$vnumid=$_POST['numid'];
					$vnombres=$_POST['nombres'];
					$vapellidos=$_POST['apellidos'];
					$miconexion=conectar_bd('root', 'crud');
					$resultado=consulta($miconexion,"select * from aprendices where trim(Apre_Numid) like '%{$vnumid}%' and trim(Apre_Nombres) like '%{$vnombres}%' and trim(Apre_Apellidos) like '%{$vapellidos}%'");
					if ($resultado->num_rows>0) 
					{
						while ($fila = $resultado->fetch_object()) 
						{
							echo $fila->APRE_ID." - ".$fila->APRE_TIPOID." - ".$fila->APRE_NUMID." - ".$fila->APRE_NOMBRES." - ".$fila->APRE_APELLIDOS." - ".$fila->APRE_DIRECCION." - ".$fila->APRE_TELEFONO." - ".$fila->APRE_FICHA;
						}
					}
					else
					{
						echo "No existen registros";
					}
					$miconexion->close();
				}
				 ?>
			</div>
		</div>
	</div>
</body>
</html>
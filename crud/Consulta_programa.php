<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="consulta.css">
	<script src="js/funciones.js"></script>
	<title>Consulta de Programas</title>
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
								<input class="form-control" type="number" name="id" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" type="text" name="nombrep" placeholder="Nombre programa">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" type="number" name="tipop" placeholder="Tipo programa">
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
					$vid=$_POST['id'];
					$vnombrep=$_POST['nombrep'];
					$vtipop=$_POST['tipop'];
					$miconexion=conectar_bd('root', 'crud');
					$resultado=consulta($miconexion,"select * from programa where trim(PROGRA_ID) like '%{$vid}%' and trim(PROGRA_NOMBRE) like '%{$vnombrep}%' and trim(PROGRA_TIPO) like '%{$vtipop}%'");
					if ($resultado->num_rows>0) 
					{
						while ($fila = $resultado->fetch_object()) 
						{
							echo $fila->PROGRA_ID." - ".$fila->PROGRA_NOMBRE." - ".$fila->PROGRA_TIPO;
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
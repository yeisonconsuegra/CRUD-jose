<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="consulta.css">
	<script src="js/funciones.js"></script>
	<title>Consulta de Fichas</title>
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
								<input class="form-control" type="number" name="id" min="9999" max="9999999999999" value="" placeholder="Numero Ficha">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" type="number" name="id2" placeholder="Numero programa">
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
					$id=$_POST['id'];
					$id2=$_POST['id2'];
					$miconexion=conectar_bd('root', 'crud');
					$resultado=consulta($miconexion,"select * from fichas where trim(FICHA_NUMERO) like '%{$id}%' and trim(FICHA_PROGRA) like '%{$id2}%'");
					if ($resultado->num_rows>0) 
					{
						while ($fila = $resultado->fetch_object()) 
						{
							echo $fila->FICHA_NUMERO." - ".$fila->FICHA_PROGRA;
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="borrar1.css">
	<script src="js/funciones.js"></script>
	<title>Eliminacion de Programa</title>
</head>
<body>
	<div id="divconsulta" class="container">
		<br>
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
								<input class="form-control" type="text" name="nombrep" placeholder="Nombre Programa">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" type="number" name="Tipop" placeholder="Tipo Programa">
							</div>
							<div class="form-group col-md-3">
								<input class="btn btn-primary" type="submit" value="Borrar">
							</div>
						</div>
						<br>
					</div>
				</form>
				<br>
			</div>
			<br><br>
			<div style="text-align: center;">
				<?php 
				if ($_SERVER['REQUEST_METHOD']==='POST') 
				{
					include 'funciones.php';
					$id=$_POST['id'];
					$miconexion=conectar_bd('root', 'crud');
					$resultado=consulta($miconexion,"select * from programa where PROGRA_ID='{$id}'");
					$resultado2=consulta($miconexion,"delete from programa where PROGRA_ID='{$id}'");
					if ($resultado->num_rows>0) 
					{
						$fila = $resultado->fetch_object();
							echo $fila->PROGRA_ID." - ".$fila->PROGRA_NOMBRE." - ".$fila->PROGRA_TIPO."<br>";
							if ($resultado2)
								echo "<br> <b>Datos borrados exitosamente</b>";
					    }
					    else
					    {
						echo "<center><b>No existen registros</b></center>";
					    }
					    $miconexion->close();
				}
				 ?>
			</div>
		</div>
	</div>
	
</body>
</html>
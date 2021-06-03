<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="borrar1.css">
	<script src="js/funciones.js"></script>
	<title>Eliminacion de aprendiz</title>
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
								<input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" type="text" name="nombres" placeholder="Nombres">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" type="text" name="apellidos" placeholder="Apellidos">
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
					$vnumid=$_POST['numid'];
					$miconexion=conectar_bd('root', 'crud');
					$resultado=consulta($miconexion,"select * from aprendices where Apre_Numid='{$vnumid}'");
					$resultado2=consulta($miconexion,"delete from aprendices where Apre_Numid='{$vnumid}'");
					if ($resultado->num_rows>0) 
					{
						$fila = $resultado->fetch_object();
							echo $fila->APRE_ID." - ".$fila->APRE_TIPOID." - ".$fila->APRE_NUMID." - ".$fila->APRE_NOMBRES." - ".$fila->APRE_APELLIDOS." - ".$fila->APRE_DIRECCION." - ".$fila->APRE_TELEFONO." - ".$fila->APRE_FICHA."<br>";
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="consulta.css">
	<script src="js/funciones.js"></script>
	<title>Modificacion de Aprendices</title>
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
							<div class="form-group col-md-5">
								<input class="form-control" type="number" name="id" min="9999" max="9999999999999" autofocus value="" placeholder="INDENTIFICACION">
							</div>
							<div class="form-group col-md-3">
								<input class="btn btn-primary" type="submit" value="Consultar">
							</div>
						</div>
						<br>
					</div>
				</form>
				<br>
			</div>
			<br><br>
			<div id="divconsulta3">
				<?php
				if ($_SERVER['REQUEST_METHOD']==='POST') 
				{
					include 'funciones.php';
					session_start();
					$id=$_POST['id'];
					$miconexion=conectar_bd('root', 'crud');
					$resultado=consulta($miconexion,"select * from programa where PROGRA_ID='{$id}'");

					if ($resultado->num_rows>0) 
					{
						$fila=$resultado->fetch_object();
						$_SESSION['id']=$fila->PROGRA_ID;
						?>
						<form id="formulario2" role="form" method="post" action="Actualizar_programa.php">
							<div class="col-md-12">
								<strong class="lgris">Datos del aprendiz</strong>
								<br><br>
								<table>
									<tr>
										<th><label class="lgris">ID:</label></th>
										<th><label class="lgris">Nombre programa:</label></th>
										<th><label class="lgris">Tipo programa:</label></th>
									</tr>
									<tr>
										<td><input class="form-control" type="number" name="id" min="9999" max="9999999999999" disabled="disabled" value="<?php echo $fila->PROGRA_ID ?>"></td>
										<td><input class="form-control" type="text" name="nombrep" min="9999" max="9999999999999"  value="<?php echo $fila->PROGRA_NOMBRE ?>"></td>
										<td><input class="form-control" type="number" name="tipop" value="<?php echo $fila->PROGRA_TIPO  ?>"></td>
									</tr>
								</table>
								<br>
								<input class="btn btn-primary" type="submit" value="Actualizar">
								<br>
							</div>
						</form>
					<?php 
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



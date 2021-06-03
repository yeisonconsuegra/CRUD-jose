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
								<input class="form-control" type="number" name="numid" min="9999" max="9999999999999" autofocus value="" placeholder="INDENTIFICACION">
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
					$vnumid=$_POST['numid'];
					$miconexion=conectar_bd('root', 'crud');
					$resultado=consulta($miconexion,"select * from aprendices where Apre_Numid='{$vnumid}'");

					if ($resultado->num_rows>0) 
					{
						$fila=$resultado->fetch_object();
						$_SESSION['id']=$fila->APRE_ID;
						?>
						<form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
							<div class="col-md-12">
								<strong class="lgris">Datos del aprendiz</strong>
								<br><br>
								<table>
									<tr>
										<th><label class="lgris">Tipo de indentificacion:</label></th>
										<th><label class="lgris">ID:</label></th>
										<th><label class="lgris">Codigo Aprendiz:</label></th>
										<th><label class="lgris">Nombres:</label></th>
										<th><label class="lgris">Apellidos:</label></th>
										<th><label class="lgris">Direccion:</label></th>
										<th><label class="lgris">Telefono:</label></th>
										<th><label class="lgris">Ficha:</label></th>
									</tr>
									<tr>
										<td>
										<select class="form-control" name="tipoid">
											<option value="CC" selected="">CC</option>
											<option value="TI">TI</option>
											<option value="RC">RC</option>
											<option value="PEP">PEP</option>
										</select></td>
										<td><input class="form-control" type="number" name="id" min="9999" max="9999999999999" disabled="disabled" value="<?php echo $fila->APRE_ID ?>"></td>
										<td><input class="form-control" type="number" name="numid" min="9999" max="9999999999999"  value="<?php echo $fila->APRE_NUMID ?>"></td>
										<td><input class="form-control" type="text" name="nombres" value="<?php echo $fila->APRE_NOMBRES  ?>"></td>
										<td><input class="form-control" type="text" name="apellidos" required="" value="<?php echo $fila->APRE_APELLIDOS  ?>"></td>
										<td><input class="form-control" type="text" name="direccion" required="" value="<?php echo $fila->APRE_DIRECCION ?>"></td>
										<td><input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" required="" value="<?php echo $fila->APRE_TELEFONO ?>"></td>
										<td><input class="form-control" type="number" name="ficha" required="" value="<?php echo $fila->APRE_FICHA ?>"></td>
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



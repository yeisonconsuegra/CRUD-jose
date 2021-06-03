<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="registro1.css">
	<script src="js/funciones.js"></script>
	<title>Registros de Aprendizes</title>
</head>
<body>
	<div id="div1" class="container">
		<div class="img1"><img src="logosena.png"></div>
			<?php session_start(); if (! empty($_SESSION['Tipo_usuario'])) { ?> <?php } ?>
				<div id="div3">
					<?php
					if ($_SESSION['Tipo_usuario']==='ADMINISTRADOR') 
					{
						?>
						<form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
							<div class="divformulario">
								<div class="strong_1"><strong>Ingrese los datos del aprendiz</strong></div>
								<br>
								<div class="_123">
									<div class="_2">
									    <label>Tipo Documento:</label><br>
											<select class="_2" name="tipoid">
												<option value="CC" selected="">CC</option>
												<option value="TI">TI</option>
												<option value="RC">RC</option>
												<option value="PEP">PEP</option>
											</select>
									</div>
									<br>
									<div class="_1">
										<label class="lgris">Numero de documento:</label> <br>
										<input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION" required="">
									</div>
									<div class="_1">
									<label class="lgris">Codigo Aprendiz:</label> <br>
								    <input class="form-control" type="number" name="id" value="" placeholder="ID formacion" required=""> <br>									
								</div>
								<div class="_1">
									<label class="lgris">Nombres:</label> <br>
								    <input class="form-control" type="text" name="nombres" value="" placeholder="Nombre" required=""> <br>									
								</div>
								<div class="_1">
									<label class="lgris">Apellidos:</label> <br>
								    <input class="form-control" type="text" name="apellidos" value="" placeholder="Apellido" required=""> <br>								
								</div>
								<div class="_1">
									<label class="lgris">Direccion:</label> <br>
								    <input class="form-control" type="text" name="direccion" value="" placeholder="Direccion" required=""> <br>									
								</div>
								<div class="_1">
									<label class="lgris">Telefono:</label> <br>
								    <input class="form-control" type="number" name="telefono" value="" placeholder="Telefono" required=""> <br>									
								</div>
								<div class="_1">
									<label class="lgris">ficha:</label> <br>
								    <input class="form-control" type="number" name="ficha" value="" placeholder="Ficha" required="">
								    <br>
								    <br>
								    <input class="boton" type="submit" value="Guardar">									
								</div>


							</div>
						</form>
					<?php 
				}
				else
				{
					echo "No tiene permisos para realizar esta accion";
					 
				}
				?>
				</div>
		</div>
	</div>
</body>
</html>
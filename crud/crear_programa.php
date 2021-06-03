<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="modl.css">
	<script src="js/funciones.js"></script>
	<title>Registros de Programa</title>
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
						<form id="formulario" role="form" method="post" action="guardado_programa.php">
							<div class="divformulario">
								<label>Crea tu Programa</label>
									<br><br>
								<div class="_1">
								    <input class="form-control" type="number" name="id" value="" placeholder="ID Programa" required=""> <br>									
								</div>
								<div class="_1">
								    <input class="form-control" type="text" name="nombrep" value="" placeholder="Nombre Programa" required=""> <br>								
								</div>
								<div class="_1">
								    <input class="form-control" type="number" name="tipop" value="" placeholder="Tipo Programa" required=""> <br>								
								</div>
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
				<br>
				</div>
		</div>
	</div>
</body>
</html>
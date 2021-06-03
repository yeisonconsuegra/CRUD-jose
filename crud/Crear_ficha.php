<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="modl.css">
	<script src="js/funciones.js"></script>
	<title>Registros de Ficha</title>
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
						<form id="formulario" role="form" method="post" action="Guardado_ficha.php">
							<div class="divformulario">
								<label>Crea tu Ficha</label>
									<br><br>
								<div class="_1">
									<label>Numero Ficha</label>
								    <input class="form-control" type="number" name="id" value="" placeholder="Numero" required=""> <br>									
								</div>
								<div class="_1">
									<label>Numero Programa</label>
								    <input class="form-control" type="number" name="id2" value="" placeholder="Numero" required=""> <br>								
								</div>
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
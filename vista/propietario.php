<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../plugins/estilos.css">
	<?php 
		include_once("../controlador/controladorPropietario.php");
		$controlPropietario = new controladorPropietario(); 
	?>
</head>
<body>
	<div>
		<form method="post" action="../controlador/controladorPropietario.php">
			<div>				
				<label for="cedula" class="label_acme">cedula</label>
				<input type="text" name="cedula" class="input_Acme" required>				
			</div>
			<div>				
				<label for="primer_nombre" class="label_acme">Primer Nombre</label>
				<input type="text" name="primer_nombre" class="input_Acme" required>				
			</div>
			<div>				
				<label for="segundo_nombre" class="label_acme">Segundo Nombre</label>
				<input type="text" name="segundo_nombre" class="input_Acme" required>				
			</div>
			<div>				
				<label for="apellido" class="label_acme">Apellido</label>
				<input type="text" name="apellido" class="input_Acme" required>				
			</div>
			<div>				
				<label for="direccion" class="label_acme">Direccion</label>
				<input type="text" name="direccion" class="input_Acme" required>				
			</div>
			<div>				
				<label for="telefono" class="label_acme">Telefono</label>
				<input type="text" name="telefono" class="input_Acme" required>				
			</div>
			<div>				
				<label for="ciudad" class="label_acme">Ciudad</label>
				<input type="text" name="ciudad" class="input_Acme" required>				
			</div>
			<div>	
				<button type="submit" name="guardar" class="boton_acme">Enviar</button>		
			</div>
		</form>
		<div>
			<table>
				<thead>
					<tr>
						<th>Cedula</th>
						<th>Nombre</th>
						<th>Direccion</th>
						<th>Telefono</th>
						<th>Ciudad</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($controlPropietario->listarPropietario() as $key => $value) {
							echo "
							<tr>
								<td>".$value['cedula']."</td>
								<td>".$value['nombre_propietario']."</td>
								<td>".$value['direccion']."</td>
								<td>".$value['telefono']."</td>
								<td>".$value['ciudad']."</td>
							</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<a href="../index.html" class="a_acme">Volver</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../plugins/estilos.css">
	<?php 
		include_once("../controlador/controladorVehiculo.php");
		$controlVehiculo = new ControladorVehiculo(); 
	?>
</head>
<body>
	<div>
		<form method="post" action="../controlador/controladorVehiculo.php">
			<div>				
				<label for="placa" class="label_acme">Placa</label>
				<input type="text" name="placa" class="input_Acme" required>				
			</div>
			<div>				
				<label for="color" class="label_acme">Color</label>
				<input type="text" name="color" class="input_Acme" required>				
			</div>
			<div>				
				<label for="marca" class="label_acme">Marca</label>
				<input type="text" name="marca" class="input_Acme" required>				
			</div>
			<div>				
				<label for="tipo" class="label_acme">Tipo Vehiculo</label>
				<input type="text" name="tipo" class="input_Acme" required>				
			</div>
			<div>	
				<label for="propietario" class="label_acme">Propietario</label>			
				<select name="propietario" class="input_Acme" required>
					<option selected>-- Seleccione -- </option>
					<?php  
						foreach ($controlVehiculo->listarPropietarios() as $key => $value) {
							echo "<option value='".$value['cedula']."'>".$value['nombre_propietario']."</option>";
						}
					?>
				</select>			
			</div>
			<div>	
				<label for="conductor" class="label_acme">Conductor</label>			
				<select name="conductor" class="input_Acme" required>
					<option selected>-- Seleccione -- </option>
					<?php  
						foreach ($controlVehiculo->listarConductores() as $key => $value) {
							echo "<option value='".$value['cedula']."'>".$value['nombre_conductor']."</option>";
						}
					?>
				</select>			
			</div>
			<div>	
				<button type="submit" name="guardar" class="boton_acme">Enviar</button>		
			</div>
		</form>
		<div>
			<table>
				<thead>
					<tr>
						<th>Placa</th>
						<th>Color</th>
						<th>Marca</th>
						<th>Tipo Vehiculo</th>
						<th>Propietario</th>
						<th>Conductor</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($controlVehiculo->listarVehiculo() as $key => $value) {
							echo "
							<tr>
								<td>".$value['placa']."</td>
								<td>".$value['color']."</td>
								<td>".$value['marca']."</td>
								<td>".$value['tipo_vehiculo']."</td>
								<td>".$value['nombre_propietario']."</td>
								<td>".$value['nombre_conductor']."</td>
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
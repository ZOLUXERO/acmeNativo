<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../plugins/estilos.css">
	<?php 
		include_once("../controlador/controladorPagina.php");
		$controlPagina = new ControladorPagina(); 
	?>
</head>
<body>
	<div>
		<table>
			<thead>
				<tr>
					<th>Placa</th>
					<th>Marca</th>
					<th>Nombre Propietario</th>
					<th>Nombre Conductor</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($controlPagina->listarInforme() as $key => $value) {
						echo "
						<tr>
							<td>".$value['placa']."</td>
							<td>".$value['marca']."</td>
							<td>".$value['nombre_propietario']."</td>
							<td>".$value['nombre_conductor']."</td>
						</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
	<a href="../index.html" class="a_acme">Volver</a>
</body>
</html>
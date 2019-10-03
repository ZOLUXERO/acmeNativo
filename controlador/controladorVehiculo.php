<?php 
include_once("../modelo/vehiculo.php");
/**
 * 
 */
class ControladorVehiculo 
{	

	///ACA NOS ASEGURAMOS DE VALIDAR Y LIMPIAR LOS DATOS
	//NO LO VOY A HACER PARA NO ALARGAR ESTO Y MANTENERME EN LO BASICO
	
	public function listarVehiculo()
	{
		$varprueba = new Vehiculo();
		$resultado = $varprueba->traerVehiculo();
		return $resultado;

	}

	public function listarPropietarios()
	{
		$varprueba = new Vehiculo();
		$resultado = $varprueba->traerPorpietarios();
		return $resultado;

	}

	public function listarConductores()
	{
		$varprueba = new Vehiculo();
		$resultado = $varprueba->traerConductores();
		return $resultado;

	}

	public function registrarVehiculo($vehiculo)
	{

		$varprueba = new Vehiculo();
		$resultado = $varprueba->crearVehiculo($vehiculo);
		header('location: ../vista/vehiculo.php');
	}

}

if (isset($_POST['guardar'])) {
	$nuevoVehiculo = array();
	$nuevoVehiculo['placa'] = $_REQUEST['placa'];
	$nuevoVehiculo['color'] = $_REQUEST['color'];
	$nuevoVehiculo['marca'] = $_REQUEST['marca'];
	$nuevoVehiculo['tipo_vehiculo'] = $_REQUEST['tipo'];
	$nuevoVehiculo['propietario'] = $_REQUEST['propietario'];
	$nuevoVehiculo['conductor'] = $_REQUEST['conductor'];

	$y = new ControladorVehiculo();
	$y->registrarVehiculo($nuevoVehiculo);
}
?>
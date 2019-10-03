<?php 
include_once("../modelo/propietario.php");
/**
 * 
 */
class controladorPropietario 
{	

	//ACA NOS ASEGURAMOS DE VALIDAR Y LIMPIAR LOS DATOS
	//NO LO VOY A HACER PARA NO ALARGAR ESTO Y MANTENERME EN LO BASICO

	public function listarPropietario()
	{
		
		$varPropietario = new Propietario();
		$resultado = $varPropietario->traerPropietario();
		return $resultado;

	}

	public function registrarPropietario($propietario)
	{

		$varPropietario = new Propietario();	
		$resultado = $varPropietario->crearPropietario($propietario);
		header('location: ../vista/propietario.php');
	}

}

if (isset($_POST['guardar'])) {
	$nuevoPropietario = array();
	$nuevoPropietario['cedula'] = $_REQUEST['cedula'];
	$nuevoPropietario['primer_nombre'] = $_REQUEST['primer_nombre'];
	$nuevoPropietario['segundo_nombre'] = $_REQUEST['segundo_nombre'];
	$nuevoPropietario['apellido'] = $_REQUEST['apellido'];
	$nuevoPropietario['direccion'] = $_REQUEST['direccion'];
	$nuevoPropietario['telefono'] = $_REQUEST['telefono'];
	$nuevoPropietario['ciudad'] = $_REQUEST['ciudad'];

	$y = new controladorPropietario();
	$y->registrarPropietario($nuevoPropietario);
}
?>
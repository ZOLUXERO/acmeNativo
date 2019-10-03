<?php 
include_once("../modelo/conductor.php");
/**
 * 
 */
class controladorConductor 
{	

	//ACA NOS ASEGURAMOS DE VALIDAR Y LIMPIAR LOS DATOS
	//NO LO VOY A HACER PARA NO ALARGAR ESTO Y MANTENERME EN LO BASICO

	public function listarConductor()
	{
		
		$varConductor = new Conductor();
		$resultado = $varConductor->traerConductor();
		return $resultado;

	}

	public function registrarConductor($conductor)
	{

		$varConductor = new Conductor();	
		$resultado = $varConductor->crearConductor($conductor);
		header('location: ../vista/Conductor.php');
	}

}

if (isset($_POST['guardar'])) {
	$nuevoConductor = array();
	$nuevoConductor['cedula'] = $_REQUEST['cedula'];
	$nuevoConductor['primer_nombre'] = $_REQUEST['primer_nombre'];
	$nuevoConductor['segundo_nombre'] = $_REQUEST['segundo_nombre'];
	$nuevoConductor['apellido'] = $_REQUEST['apellido'];
	$nuevoConductor['direccion'] = $_REQUEST['direccion'];
	$nuevoConductor['telefono'] = $_REQUEST['telefono'];
	$nuevoConductor['ciudad'] = $_REQUEST['ciudad'];

	$y = new controladorConductor();
	$y->registrarConductor($nuevoConductor);
}
?>
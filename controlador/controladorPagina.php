<?php 
include_once("../modelo/pagina.php");
/**
 * 
 */
class ControladorPagina
{	

	///ACA NOS ASEGURAMOS DE VALIDAR Y LIMPIAR LOS DATOS
	//NO LO VOY A HACER PARA NO ALARGAR ESTO Y MANTENERME EN LO BASICO
	
	public function listarInforme()
	{
		
		$pagina = new Pagina();
		$resultado = $pagina->traerInforme();
		return $resultado;

	}

}
?>
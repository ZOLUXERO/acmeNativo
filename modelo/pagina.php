<?php 
include_once("conexion.php");
/**
 * 
 */
class Pagina extends Conexion
{

	public function traerInforme()
	{
		
		$strSql = "SELECT v.placa, v.marca, CONCAT(p.primer_nombre, ' ', p.segundo_nombre, ' ', p.apellido) as nombre_propietario, CONCAT(c.primer_nombre, ' ', c.segundo_nombre, ' ', c.apellido) as nombre_conductor FROM vehiculos v LEFT JOIN propietarios p ON p.cedula = v.propietario_id LEFT JOIN conductors c ON c.cedula = v.conductor_id";  
		$conn=$this->conectarBd()->query($strSql);			
		return $resultado = $conn->fetchAll(PDO:: FETCH_ASSOC);

	}
}

?>
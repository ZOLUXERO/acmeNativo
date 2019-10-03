<?php 
include_once("conexion.php");
/**
 * 
 */
class Vehiculo extends Conexion
{

	public function traerVehiculo(){
		
		$strSql = "SELECT v.placa, v.color, v.marca, v.tipo_vehiculo, CONCAT(p.primer_nombre, ' ', p.segundo_nombre, ' ', p.apellido) as nombre_propietario, CONCAT(c.primer_nombre, ' ',c.segundo_nombre, ' ',c.apellido) as nombre_conductor FROM vehiculos v LEFT JOIN propietarios p ON p.cedula = v.propietario_id LEFT JOIN conductors c ON c.cedula = v.conductor_id "; 
		$conn=$this->conectarBd()->query($strSql);			
		return $resultado = $conn->fetchAll(PDO:: FETCH_ASSOC);
	}

	public function crearVehiculo($datos){
		$strSql = "INSERT INTO vehiculos (placa, color, marca, tipo_vehiculo, propietario_id, conductor_id) VALUES ('".$datos['placa']."', '".$datos['color']."', '".$datos['marca']."', '".$datos['tipo_vehiculo']."', '".$datos['propietario']."', '".$datos['conductor']."') ";
		$conn=$this->conectarBd()->query($strSql);			
	}

	public function traerPorpietarios(){
		
		$strSql = "SELECT cedula, CONCAT(primer_nombre, ' ', segundo_nombre, ' ', apellido) as nombre_propietario FROM propietarios";
		$conn=$this->conectarBd()->query($strSql);			
		return $resultado = $conn->fetchAll(PDO:: FETCH_ASSOC);
	}

	public function traerConductores(){
		
		$strSql = "SELECT cedula, CONCAT(primer_nombre, ' ', segundo_nombre, ' ', apellido) as nombre_conductor FROM conductors";
		$conn=$this->conectarBd()->query($strSql);			
		return $resultado = $conn->fetchAll(PDO:: FETCH_ASSOC);
	}
}

?>
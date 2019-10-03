<?php 
include_once("conexion.php");
/**
 * 
 */
class Conductor extends Conexion
{

	public function traerConductor(){
		
		$strSql = "SELECT cedula, CONCAT(primer_nombre, ' ', segundo_nombre, ' ', apellido) as nombre_conductor, direccion, telefono, ciudad FROM conductors "; 
		$conn=$this->conectarBd()->query($strSql);			
		return $resultado = $conn->fetchAll(PDO:: FETCH_ASSOC);
	}

	public function crearConductor($datos){
		$strSql = "INSERT INTO conductors (cedula, primer_nombre, segundo_nombre, apellido, direccion, telefono, ciudad) VALUES ('".$datos['cedula']."', '".$datos['primer_nombre']."', '".$datos['segundo_nombre']."', '".$datos['apellido']."', '".$datos['direccion']."', '".$datos['telefono']."', '".$datos['ciudad']."') ";
		$conn=$this->conectarBd()->query($strSql);			
	}
}

?>
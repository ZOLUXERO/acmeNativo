<?php 
include_once("conexion.php");
/**
 * 
 */
class Propietario extends Conexion
{

	public function traerpropietario(){
		
		$strSql = "SELECT cedula, CONCAT(primer_nombre, ' ', segundo_nombre, ' ', apellido) as nombre_propietario, direccion, telefono, ciudad FROM propietarios "; 
		$conn=$this->conectarBd()->query($strSql);			
		return $resultado = $conn->fetchAll(PDO:: FETCH_ASSOC);
	}

	public function crearpropietario($datos){
		$strSql = "INSERT INTO propietarios (cedula, primer_nombre, segundo_nombre, apellido, direccion, telefono, ciudad) VALUES ('".$datos['cedula']."', '".$datos['primer_nombre']."', '".$datos['segundo_nombre']."', '".$datos['apellido']."', '".$datos['direccion']."', '".$datos['telefono']."', '".$datos['ciudad']."') ";
		$conn=$this->conectarBd()->query($strSql);			
	}
}

?>
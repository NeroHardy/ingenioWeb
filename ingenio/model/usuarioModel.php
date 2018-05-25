<?php  
require_once"Conexion.php";

class Datos extends Conexion
{
#INGRESO USUARIO
	#-------------------------------------
	static public function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id,usuario, contrasenia FROM $tabla WHERE usuario = :usuario");	
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->execute();

		#fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetch();

		$stmt->close();

	}
}
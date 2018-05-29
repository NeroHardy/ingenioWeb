<?php  
require_once"Conexion.php";

class Datos extends Conexion
{
#INGRESO USUARIO
	#-------------------------------------
 public static function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT usuario, contrasenia FROM $tabla WHERE usuario = :usuario");	
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->execute();

		#fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetch();

		$stmt->close();

	}
/**
	public static function intentosUsuarioModel($datosModel, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE usuario = :usuario");
		
		$stmt->bindParam(":intentos", $datosModel["actualizarIntentos"], PDO::PARAM_INT);
		$stmt->bindParam(":usuario", $datosModel["usuarioActual"], PDO::PARAM_STR);

		
		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();
	}
**/
}
<?php  
require_once"conexion.php";

class UsuarioModel extends Conexion
{
	
	public function ingresarUsuarioModel()
	{
		$stmt = Conexion::conectar()->prepare("SELECT alias, contrasenia FROM usuario WHERE alias =:alias AND contrasenia =:contrasenia");
		$stmt->bindParam(":alias",$this->alias,PDO::PARAM_STR);
		$stmt->bindParam(":contrasenia",$this->contrasenia,PDO::PARAM_STR);
		$stmt->execute(); 

		return $stmt->fetch();

		$stmt->close();

	}
}



?>
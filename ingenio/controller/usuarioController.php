<?php  
class usuarioController
{
	
	public function ingresoUsuarioController(){

		if(isset($_POST["usuarioIngreso"])){

			$datosController = array( "alias"=>$_POST["usuarioIngreso"], 
								      "contrasenia"=>$_POST["passwordIngreso"]);

			$respuesta = Datos::ingresoUsuarioModel($datosController, "alias");

			if($respuesta["alias"] == $_POST["usuarioIngreso"] && $respuesta["contrasenia"] == $_POST["passwordIngreso"]){
				
				session_start();

				$_SESSION["validar"] = true;

				header("location:index.php?action=servicios");

			}

			else{

				header("location:index.php?action=fallo");

			}

		}	

	}

}

?>
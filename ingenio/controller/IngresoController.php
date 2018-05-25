<?php 

class Ingreso{
#INGRESO DE USUARIOS
	#------------------------------------
	public function ingresoUsuarioController(){

		if(isset($_POST["usuarioIngreso"])){


			$datosController = array( "usuario"=>$_POST["usuarioIngreso"], 
								      "contrasenia"=>$_POST["passwordIngreso"]);

			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");

			if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["contrasenia"] == $_POST["passwordIngreso"]){

				
				session_start();

				$_SESSION["validar"] = true;

				header("location:index.php?action=ok");

			}

			else{

				header("location:index.php?action=fallo");

			}

		}	

	}
}
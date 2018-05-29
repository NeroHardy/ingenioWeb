<?php 
class Ingreso{
#INGRESO DE USUARIOS
	#------------------------------------
	 public  function ingresoUsuarioController()
	 {

		if(isset($_POST["usuarioIngreso"]))
		{

			$datosController = array( "usuario"=>$_POST["usuarioIngreso"], 
								      "contrasenia"=>$_POST["passwordIngreso"]);


		 
			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");
			
				
/**
			$intentos = $respuesta = ["intentos"];
			$usuario = $_POST["usuarioIngreso"];
			$maximoIntento = 2;

			if ($intentos < $maximoIntento) 
			{
**/
			if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["contrasenia"] == $_POST["passwordIngreso"]){

				session_start();

				$_SESSION["validar"] = true;

				header("location:index.php?action=ok");

			}

			else{
				/**

				++$intentos;

				$datosController = array("usuarioActual"=>$usuario, "actualizarIntentos"=>$intentos);

				$respuestaActualizarIntentos = Datos::intentosUsuarioModel($datosController, "usuarios");

				**/

				header("location:index.php?action=fallo");
		
			}
		/**		
		}
		
		else
			{
			

				header("location:index.php?action=fallo3intentos");

			}
		**/
		}	

	}
}

?>
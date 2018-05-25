<?php

class EnlacesController{

	#LLAMADA A LA PLANTILLA
	#----------------------------------------------

	public function pagina()
	{

		include "view/template.php";
	}

	#INTERACCIÓN DEL USUARIO
	#----------------------------------------------
	public function enlacesPaginasController(){

		if(isset($_GET["action"])){

		$enlacesController = $_GET["action"];

		}

		else{

		$enlacesController = "index";
			
		}

		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

		include $respuesta;

	}
}

?>
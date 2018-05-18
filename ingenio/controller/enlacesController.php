<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#----------------------------------------------

	public function pagina(){

		#include() Se utiliza para invocar el archivo que contiene código html.
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
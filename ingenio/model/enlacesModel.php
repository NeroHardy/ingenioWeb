<?php

class EnlacesPaginas{

	static public function enlacesPaginasModel($enlacesModel){

		if($enlacesModel == "inicio" || 
		   $enlacesModel == "servicios" || 
		   $enlacesModel == "contacto" ||
		   $enlacesModel == "ingresar" ||
		   $enlacesModel == "editar" ||
		   $enlacesModel == "eliminar"
			)
		{

			$module = "view/modules/".$enlacesModel.".php";

		}

		else if($enlacesModel == "index" ){

			$module = "view/modules/inicio.php";

		}
		elseif ($enlacesModel == "fallo") {
			
			$module = "view/modules/ingresar.php";
		}

		else{

			$module = "view/modules/inicio.php";

		}

		return $module;

	}

}


?>
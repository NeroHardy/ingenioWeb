<?php

class EnlacesPaginas{

	 public static function enlacesPaginasModel($enlacesModel){

		if($enlacesModel == "inicio" || 
		   $enlacesModel == "intranet" || 
		   $enlacesModel == "contacto" ||
		   $enlacesModel == "ingresar" ||
		   $enlacesModel == "home-buro"||
		   $enlacesModel == "editar" ||
		   $enlacesModel == "eliminar"
			)
		{

			$module = "view/modules/".$enlacesModel.".php";

		}

		else if($enlacesModel == "index" ){

			$module = "view/modules/inicio.php";

		}
		elseif ($enlacesModel =="ok") {

			$module = "view/modules/intranet.php";
		}
		elseif ($enlacesModel == "fallo") {
			
			$module = "view/modules/ingresar.php";
		}

		elseif ($enlacesModel == "fallo3intentos") {
			
			$module = "view/modules/ingresar.php";
		}

		else{

			$module = "view/modules/inicio.php";

		}

		return $module;

	}

}


?>
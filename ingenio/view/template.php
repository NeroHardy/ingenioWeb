
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

     <!--inicio-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/css/fa-svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="view/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
	<link rel="stylesheet" type="text/css" href="view/css/cards.css">
	<link rel="stylesheet" type="text/css" href="view/css/reset.css">
	<!--inicio-->

	
	
	<!--login-->
	<link rel="stylesheet" type="text/css" href="view/css/login.css">
	<!--login-->
	
	<script src="view/js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8" async defer></script>	
	<script src="view/js/jquery-migrate-1.4.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="view/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="view/js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="view/js/fontawesome-all.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="view/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
	<script src="view/js/anime.min.js" type="text/javascript"></script>
	<script src="view/js/uncover.js" type="text/javascript"></script>
	<script src="view/js/slider.js" type="text/javascript"></script>
	<script src="view/js/cards.js" type="text/javascript"></script>
	<script src="view/js/map.js" type="text/javascript" ></script>
	<script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIQxHF2AmHknwVAxgwHBL6nFAAuY5jqFg=initMap">
	  </script>
	  
</head>
<body>



<?php
if(isset($_SESSION["validar"])){

    include "modules/navegacion-home.php";
    
}
else{

    include "modules/navegacion.php";
     
}                       
?>


<section>

<?php

$mvc = new EnlacesController();
$mvc -> enlacesPaginasController();

?>

</section>	
<?php include "modules/footer.php";  ?>
</body>
</html>
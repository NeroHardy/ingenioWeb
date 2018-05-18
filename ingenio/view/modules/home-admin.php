<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>INGENIO</title>	
</head>
<body>
	<main>
		<!--NAV ADMIN (MENU)-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		  <a class="navbar-brand" href="#">
		  	<img src="view/img/logoIsja.png" width="80%" height="auto" class="d-inline-block align-top" alt="">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmain" aria-controls="navmain" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navmain">
		    <ul class="navbar-nav mr-auto">
			  <li class="nav-item">
		        <a class="nav-link disabled" href="#">Usuario:</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerrar Sesión</button>
		    </form>
		  </div>
		</nav>
		<section class="container-fluid container-home">
			<article class="row">
				<article class="col-md-6">
						<div class="item-menu-home ">
							<a href="#" class="nav-link">
								<div class="text-center">
									<i class="fas fa-home icon-squad text-white"></i>
									<h1 class="text-white p-3">Menú Principal Buro</h1>
								</div>
							</a>
						</div>
				</article>
				<article class="col-md-6">
						<div class="item-menu-home ">
							<a href="#" class="nav-link">
								<div class="text-center">
									<i class="fas fa-cogs icon-squad text-white"></i>
								<h1 class="text-white p-3">Mantenimiento</h1>
								</div>
							</a>
						</div>
				</article>
			</article>
		</section>
	</main>

	<?php include 'footer.php';?>

</body>
</html>
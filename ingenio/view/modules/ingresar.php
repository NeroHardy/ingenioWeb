
<body class="bglogin">
	<main>
		<section class="container-fluid">
			<secction class="login-page">
					<section class="form">
						<h1 class="title-login">AZÚCARERA SAN JOSÉ</h1>
						<form method="post" accept-charset="utf-8" class="login-form">
							<input type="text" placeholder="Usuario" name="usuarioIngreso" required/>
						    <input type="password" placeholder="Contraseña" name="passwordIngreso"required />
						    <button type="sunmit" value="Enviar">Login</button>
						</form>
					</section>
				</secction>
		</section>
	</main>
</body>

<?php

$ingreso = new Ingreso();
$ingreso -> ingresoUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "fallo"){

		echo "Fallo al ingresar";
	
	
	}

}

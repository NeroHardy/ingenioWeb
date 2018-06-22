
<section class="jumbotron jumbotron-fluid hero-parrallax-page">
	<article class="container text-center">
		<h1 class="text-white display-4 title-font">CONTACTO</h1>
	</article>
</section>
<section class="container-fluid">
	<article class="row">
		<div  id="map" >
			
		</div>
	</article>
</section>
<section class="container-fluid">
	<article class="row">
		<article class="col-md-12">
			<form  method="post" accept-charset="utf-8" action="controller/insertarContacto.php">
				<div class="form-row p-3">
					<div class="col-lg-12">
						<select class="form-control form-control-lg">
						  <option>Visita a la planta</option>
						</select>
					</div>
				</div>
				<div class="form-row p-3">
					<div class="col-md-3">
						<input class="form-control form-control-lg" type="text" placeholder="NOMBRE:" name="nombre">
					</div>
					<div class="col-md-3">
						<input class="form-control form-control-lg" type="text" placeholder="APELLIDOS" name="apellidos">
					</div>
					<div class="col-md-3">
						<select class="form-control form-control-lg">
						  <option>TIPO DE DOCUMENTO</option>
						</select>
					</div>
					<div class="col-md-3">
						<input class="form-control form-control-lg" type="file" placeholder="TIPO DE DOCUMENTO">
					</div>
				</div>
				<div class="form-row p-3">
					<div class="col-md-6">
						<input class="form-control form-control-lg" type="text" placeholder="CORREO ELÉCTRONICO:" name="correo">
					</div>
					<div class="col-md-6">
						<input class="form-control form-control-lg" type="tel" placeholder="CELULAR:" name="celular">
					</div>
				</div>
				<div class="form-row p-3">
					<div class="col-md-6">
						<input class="form-control form-control-lg" type="date" placeholder="FECHA:" name="fecha">
					</div>
					<div class="col-md-6">
						<input class="form-control form-control-lg" type="text" placeholder="MOTIVO DE VISITA:" name="motivo">
					</div>
				</div>
				<div class="form-row p-3">
					<div class="col-md-12">
						<input type="submit" name="" value="Enviar" class="btn btn-lg btn-block btn-success">
					</div>
				</div>

			</form>
		</article>
	</article>
</section>



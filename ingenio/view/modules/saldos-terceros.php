<?php include 'nav-admin.php'; ?>
<?php include 'subnav-admin.php'; ?>

	<main>
			<section class="container-fluid p-3 align-items-center">
				<article class="row">
					<article class="col-md-12">
						<ul class="nav justify-content-center p-3">
						  <form class="">
							<div class="form-row">
								<div class="col-auto">
									<label class="sr-only" for="inlineFormInputGroup">BUSCAR POR NOMBRE:</label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text bggreen text-white"><i class="fas fa-filter"></i></div>
										</div>
										<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="BUSCAR POR NOMBRE:">
									</div>
								</div>
								<div class="col-auto">
									<button type="submit" class="btn btn-success mb-2">Filtrar</button>
								</div>
							</div>
						</form>
						</ul>
					</article>
				</article>
			</section>
			<section class="container-fluid">
				<article class="row">
					<article class="col-md-12">
						<table class="table">
							<thead class="thead bggreen text-white">
								<tr>
									<th scope="col">CLAVE</th>
									<th scope="col">CONCEPTO</th>
									<th scope="col">ORGANIZACIÓN</th>
									<th scope="col"></th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td><button type="button" class="btn text-white bggreen">Adicionar Concepto</button></td>
									<td><button type="button" class="btn text-white bggreen">Actualizar Descuento</button></td>
								</tr>
								
							</tbody>
						</table>
					</article>
				</article>
			</section>
		</main>
<?php include 'footer.php';?>
	
<?php include 'modules/navegacion-admin.php'; ?>
<?php include 'modules/subnavegacion-admin.php'; ?>

	<main>
			<section class="container-fluid p-3 align-items-center">
				<article class="row">
					<article class="col-md-12">
						<ul class="nav justify-content-center p-3">
						  <form class="">
							<div class="form-row">
								<div class="col-auto">
									<button type="button" class="btn text-white bggreen"><i class="fas fa-user-plus"></i> Agregar nuevo usuario</button>
								</div>
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
									<th scope="col">ID</th>
									<th scope="col">NOMBRE</th>
									<th scope="col">ALIAS</th>
									<th scope="col">CONTRASEÑA</th>
									<th scope="col">TIPO DE ORGANIZACIÓN</th>
									<th scope="col">NIVEL</th>
									<th scope="col">ESTATUS</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<th scope="row"></th>
									<td></td>
									<td></td>
									<th scope="row"></th>
									<td></td>
									<td></td>
									<td></td>

									<td><button type="button" class="btn text-white bggreen"><i class="fas fa-edit"></i></button></td>
									<td><button type="button" class="btn text-white bggreen"><i class="fas fa-trash"></i></button></td>
								</tr>
								
							</tbody>


	

						</table>
					</article>
				</article>
			</section>
		</main>


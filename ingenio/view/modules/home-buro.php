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
								<div class="col-auto">
									<label class="sr-only" for="inlineFormInputGroup">BUSCAR POR CLAVE:</label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text bggreen text-white"><i class="fas fa-filter"></i></div>
										</div>
										<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="BUSCAR POR CLAVE:">
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
									<th scope="col">ZONA</th>
									<th scope="col">GRUPO</th>
									<th scope="col">NOMBRE DEL GRUPO</th>
									<th scope="col">TABLA</th>
									<th scope="col">FIN CORTE</th>
									<th scope="col">SUP</th>
									<th scope="col">TONS/HA</th>
									<th scope="col">ESTIMADO</th>
									<th scope="col">VARIEDAD</th>
									<th scope="col">SUP/RIE</th>
									<th scope="col">COSECHA</th>
									<th scope="col">ZAFRA</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Otto</td>
								</tr>
							</tbody>
						</table>
					</article>
				</article>
			</section>
			<section class="container-fluid">
				<article class="row">
					<article class="col-md-12">
						<table class="table">
							<thead class="thead bggreen text-white">
								<tr>
									<th scope="col">ZAFRA</th>
									<th scope="col">ZONA</th>
									<th scope="col">GRUPO</th>
									<th scope="col">CONCEPTO</th>
									<th scope="col">SALDO</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
								</tr>
							</tbody>
						</table>
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
									<th scope="col">NOMBRE DESCUENTO</th>
									<th scope="col">GRUPO</th>
									<th scope="col">NOMBRE GRUPO</th>
									<th scope="col">FECHA ULTIMO MOVIMIENTO</th>
									<th scope="col">IMPORTE A DESCONTAR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
									<td>Mark</td>
								</tr>
							</tbody>
						</table>
					</article>
				</article>
			</section>
			<section class="container-fluid">
				<article class="row">
					<article class="col-md-12">
						<table class="table">
							<thead class="thead bggreen text-white">
								<tr>
									<th scope="col">CONS</th>
									<th scope="col">DESCEPCIÓN DEL GASTO COSECHA</th>
									<th scope="col">FACTOR</th>
									<th scope="col">IMPORTE</th>
									<th scope="col">TOTAL GASTOS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td>Mark</td>
								</tr>
							</tbody>
						</table>
					</article>
				</article>
			</section>
		</main>
<?php include 'footer.php';?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>Solicitud de Reclutadores</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/solicitudReclutadores.js" language="javascript" type="text/javascript" ></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg barra rounded">
		<div class="container-fluid">
		  <a class="navbar-brand text-white" href="../pantalla-principal.php">Unip</a>
		  <img src="../img/Logo3.png" alt="5%" width="3%">
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link active text-white" aria-current="page" href="../ObtenerPerfilReclutador.php">Mi Perfil</a>
			  </li>
			 
			  <li class="nav-item dropdown">
				<!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  Dropdown
				</a> -->
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <li><a class="dropdown-item" href="#">Action</a></li>
				  <li><a class="dropdown-item" href="#">Another action</a></li>
				  <li><hr class="dropdown-divider"></li>
				  <li><a class="dropdown-item" href="#">Something else here</a></li>
				</ul>
			  </li>
			  <!-- <li class="nav-item">
				<a class="nav-link disabled">Disabled</a>
			  </li> -->
			</ul>
			<!-- <form class="d-flex">
				colocar boton de inicio y cerrar sesion en esta parte
			  <button class="btn btn-outline-success" type="submit">Search</button>
			</form> -->
		  </div>
		</div>
	  </nav>
	<div class="container mt-4 container border rounded ">
        <div class="row shadow">
          <div class="col-md-12">
			<h1>Mis Ofertas</h2>
			<!-- <form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" >
						<option value="0">Filtros de datos</option>
					</select>
				</div>
			</form> -->
			<div class="table-responsive">
			<table class="table table-dark">
				<thead>
					<tr>
						<!-- <th>No</th> -->
						<th scope="col">Titulo</th>
						<th scope="col">Tipo Contrato</th>
						<th scope="col">Tipo Jornada</th>
						<th scope="col">Ubicacion</th>
						<!-- <th scope="col">Estado</th>
						<th scope="col">Acciones</th> -->
					</tr>
				</thead>
				<tbody id ="tbody" class="tb-reclutadores">
					<?php
						foreach ($listaReclutadores as $row) {
							echo('
							<tr class="table-active">
								<td>'.$row['Titulo'].'</td>
								<td>'.$row['DetalleContrato'].'</td>
								<td>'.$row['Detalle'].'</td>
								<td>'.$row['UbicacionOferta'].'</td>
								<td>
									<button id="a1" class="btn btn-primary btn-sm btn-aceptar" data-id="'.$row['IdOferta'].'" data-toggle="modal" data-target="#mensajeModal"><span class="glyphicon glyphicon-edit" aria-hidden="true">Ver Oferta</span></button>
									<button id="r1" class="btn btn-danger btn-sm btn-rechazar" data-toggle="modal" data-target="#mensajeModal"><span class="glyphicon glyphicon-trash" aria-hidden="true">Cancelar</span></button>
								</td>
						</tr>
							');
						}


					?>
				</tbody>	
			</table>
			</div>
		</div>
	</div>
	<div class="modal fade" id="mensajeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header bg-warning">
			  <h5 class="modal-title">Aviso!</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <p id="mensaje"></p>
			</div>
			<div class="modal-footer">
			  <button type="button" id="confirmar" class="btn btn-primary">Si</button>
			  <button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal">No</button>
			</div>
		  </div>
		</div>
	  </div>
</body>
</html>
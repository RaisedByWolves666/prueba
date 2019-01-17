<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Home</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class=" d-flex row justify-content-center align-items-center container">
				<div class="col-md-5">
						
  						<div class="row justify-content-center">
    						<h1>Registrarse</h1>
  						</div>
						
						<form action="{{ url('/Creado') }}" method="POST">
							@csrf
							
							<div class="form-group row">
								<label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
									<div class="col-sm-10">
										<input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" maxlength="25" required >
									</div>
							</div>

  								<div class="form-group row">
    								<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    								<div class="col-sm-10">
      									<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" maxlength="25" required>
    								</div>
  								</div>

								<div class="form-group row">
    								<label for="Apellidos" class="col-sm-2 col-form-label">Apellidos</label>
    								<div class="col-sm-10">
      									<input type="text" name="apellidos" class="form-control" id="Apellidos" placeholder="Apellidos" maxlength="20" required>
    								</div>
  								</div>
  							

							<div class="form-group row">
								<label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
								<div class="col-sm-10">	
								<input type="tel" name="telefono" class="form-control" pattern= "^(([0-9]*)|(([0-9]*)\.([0-9]*)))$" title="Solo numeros" id="telefono" placeholder="Telefono" maxlength="9" required>
								</div>
							</div>


							<div class="form-group row">
								<label for="email" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10">
								<input type="email" name="email" class="form-control" id="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$"  placeholder="Email" required >
								</div>
							</div>


							<div class="form-group">
								<input type="submit" name="Registrarse" class="btn btn-outline-primary">
							</div>
						</form>


						@if ($errors->any())
							<div class="alert alert-danger row justify-content-center centered">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
								</ul>
							</div>
						@endif

						@if (\Session::has('Registrado'))
							<div class="alert alert-success row justify-content-center centered">
								<p>{{\Session::get('Registrado')}}</p>
							</div>
						@endif
						
					  	
				</div>		
			</div>
		</div>
	</body>
</html
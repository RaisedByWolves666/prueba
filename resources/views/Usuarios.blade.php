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
			<div class="row justify-content-center">
				<div class="col-md-5">
					<h1>Registro de Usuarios</h1>
						<form action="" method="POST">
							
							<div class="form-group row">
								<label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
									<div class="col-sm-10">
										<input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" maxlength="16" required >
									</div>
							</div>

  								<div class="form-group row">
    								<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    								<div class="col-sm-10">
      									<input type="text" class="form-control" id="nombre" placeholder="Nombre" maxlength="20" required>
    								</div>
  								</div>

								<div class="form-group row">
    								<label for="Apellidos" class="col-sm-2 col-form-label">Apellidos</label>
    								<div class="col-sm-10">
      									<input type="text" class="form-control" id="Apellidos" placeholder="Apellidos" maxlength="20" required>
    								</div>
  								</div>
  							

							<div class="form-group row">
								<label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
								<div class="col-sm-10">	
								<input type="tel" name="telefono" class="form-control" id="telefono" placeholder="Telefono" maxlength="9" required>
								</div>
							</div>


							<div class="form-group row">
								<label for="email" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10">
								<input type="email" name="email" class="form-control" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Usuario@example.com" required >
								</div>
							</div>


							<div class="form-group">
								<input type="submit" name="Registrarse" class="btn btn-primary">
							</div>
						</form>
					  	
				</div>		
			</div>
		</div>
	</body>
</html
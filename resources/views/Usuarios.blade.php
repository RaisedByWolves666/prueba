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
					<h2>Registro de Usuarios</h2>

						<form action="" method="POST">
							<div class="form-group">
								<input type="text" name="usuario" class="form-control" required placeholder="Usuario">
							</div>

							<form>
								<div class="input-group">
  									<input type="text" class="form-control"  required placeholder="Nombre">
  									<input type="text" class="form-control" required placeholder="Apellidos">
  								</div>
  							</form>

							<div class="form-group">
								<input type="tel" name="telefono" class="form-control" required placeholder="Telefono" maxlength="9">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" pattern=".+@gmail.com" required placeholder="Usuario@gmail.com" title="Solo valido gmail">
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
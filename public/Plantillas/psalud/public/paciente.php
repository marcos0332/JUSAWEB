<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ourCss.css">
	<link rel="shortcut icon" type="imag" href="img/logo.png">
</head>	
<body>
	
<div class="container-fluid">
<header class="navbar navbar-dark bg-dark" style="background-color: #5CD3E8;">

<div class="col-md-4 offset-4">
<a href="https://mega.nz/#!dt4SwCRT!98UrDTa2gYKOTMGTqUKQGN8cRCWC1yjyBJsth359S4I">
<button  type="button" class="btn btn-success">Descargar Plantilla</button>
</a>
<a href="../../../">
<button  type="button" class="btn btn-primary">Volver</button>
</a>
</div>
</header>
</div>
	
	<div class="container-fluid">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<header class="navbar navbar-expand-lg navbar-light" style="background-color: #5CD3E8;">


						<div class="navbar-nav-scroll mx-5">
							<ul class="navbar-nav bd-navbar-nav flex-row">
								<div class="navbar-nav-scroll mx-5">
									<ul class="navbar-nav bd-navbar-nav flex-row">
										<li class="nav-item">
											<a class="nav-link" href="Index.php">Inicio</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="gpacientes.php">Gestión de pacientes</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="gservicios.php"> Gestión de servicios</a>
										</li>


									</ul>
								</div>
							</ul>
						</div>

					</header>
				</div>	
			</div>
		</div>
	</div>


	


	<div class="container-fluid">
		<div class="container-fluid">
			<div class="row">


				<div class="col-md-6">
					<h2>Registro de pacientes</h2>

					<br>
					<form action="paciente1.php" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Nombre del paciente</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre del paciente" name="nombre">

						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Documeto de identidad</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el documento de identidad" name="id">
						</div>
						
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Información del paciente</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="ingrese toda  la Información del paciente" rows="3" name="info"></textarea>
						</div>

						<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Empresa sector salud</label>
						<select name="empresa" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
							<option value="Ips">Ips</option>
							<option value="Hospital">Hospital</option>
							<option value="Centro de rehabilitación física">Centro de rehabilitación física</option>
							<option value="nutrición">nutrición</option>
							<option value="radiología">radiología</option>
							<option value="odontología">odontología</option>
							<option value="Neurología">Neurología</option>
							<option value="pediatría">pediatría</option>
						</select>	
						<br>	
						<br>
						<br>



						<input type="submit" value="Registrar" class="btn btn-primary btn-lg btn-block">

					</form>

				</div>

				<div class="col-md-4">
					
					<img src="img/1.jpg">
				</div>
			</div>

		</div>
	</div>

	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
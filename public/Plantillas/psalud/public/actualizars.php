<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
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
            
        <header>
            <div class="row bg-light    ">
                <div class="col-md-4 offset-4">
                    <br>
                        <img src="img/ms.png" class="img-fluid" alt="Responsive image" onclick="location.href='Index.php'">
                        
                </div>
            </div>
            <br>
        </header>

	
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
                            <a class="nav-link" href="gpacientes.php">Gestión de pacientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="gservicios.php"> Gestión de servicios</a>
                        </li>
                        
                        
                    </ul>
                </div>
                    </ul>
                </div>
             
            </header>
            <br>
		</div>	
		</div>
	</div>
</div>

		
	


	<div class="container-fluid">
		<div class="container-fluid">
			<div class="row">


				<div class="col-md-5">
					<h2>Actualización de servicio</h2>
			
					<br>
					
						
                    <form action="Actualizars1.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputPassword1">codigo del servicio a actualizar</label>
                            <input type="text" name="ids" class="form-control" id="exampleInputPassword1" placeholder="id del servicio" >
                        </div>
                       

					<input type="submit" value="actualizar" class="btn btn-outline-success"></input>
						
					</form>

				</div>

				<div class="col-md-5">
					
					<h2>Eliminar un servicio</h2>
			
					<br>
					
						<form action="dels.php" method="post">
						<div class="form-group">
							<label for="exampleInputPassword1">Documeto de identidad</label>
							<input type="text" name="ids" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el documento de identidad" >
						</div>
						
						
<br>	
					<input type="submit" name="Eliminar" class="btn btn-outline-danger"></input>
						
					</form>

				</div>
				</div>
			</div>

		</div>
	</div>

	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
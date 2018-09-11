<html>
<head>
<title>Problema</title>
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

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ourCss.css">
	<link rel="shortcut icon" type="imag" href="img/logo.png">
</head>
<body>
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
	<div class="row">

		<div class="col-md-1">
			
		</div>
			<div class="col-md-9">
			
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
<div class="alert alert-dark" role="alert">
  

<?php
$conexion=mysqli_connect("localhost","root","","salud") or
    die("Problemas con la conexión");

mysqli_query($conexion, "update pacientes
                          set info='$_REQUEST[infonuevo]' 
                        where info='$_REQUEST[infoviejo]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "la informacion fue modificada con exito";
?>


</div>

<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
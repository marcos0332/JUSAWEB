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
</a></div>
</header>
</div>
<div class="container-fluid">
          <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ourCss.css">
	<link rel="shortcut icon" type="imag" href="img/logo.png">  
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
            <div class="alert alert-secondary" role="alert">

<?php

$conexion=mysqli_connect("localhost","root","","salud") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select * from servicios
                        where ids=$_REQUEST[ids]") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="actualizars2.php" method="post">
						
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Información del servicio</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="ingrese  la nueva Información del servicio" rows="3" name="infosnuevo" value="<?php echo $reg['infos'] ?>"></textarea>
							<input type="hidden" name="infosviejo" value="<?php echo $reg['infos'] ?>">


						</div>

						<br>	
						<br>
						<br>



						<input type="submit" value="modificar" class="btn btn-primary btn-lg btn-block">

					</form>
<h1></h1>
<?php

}
else
  echo "No existe dicha id";
?>
</div>
<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
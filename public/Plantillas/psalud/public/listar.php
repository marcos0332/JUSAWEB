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
            
        <header>
            <div class="row bg-light">
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
		</div>	
		</div>
	</div>
</div>
<br>
		
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
    </div>
    <div class="col-md-9">
<table class="table table-bordered">
  <tr class="bg-info">	
<?php
$conexion=mysqli_connect("localhost","root","","salud") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select nombre, id, info, empresa
                        from pacientes") or
  die("Problemas en el select:".mysqli_error($conexion));



echo "<th>nombre</th>";
echo "<th>id</th>";
echo "<th>info</th>";
echo "<th>empresa</th>";
echo "<tr>";

while ($reg=mysqli_fetch_array($registros))
{
	echo "<tr>";

  echo "<td>".$reg['nombre']."</td>";
  

  echo "<td>".$reg['id']."</td>";
 

  echo "<td>".$reg['info']."</td>";

  echo "<td>".$reg['empresa']."</td>";
  }
 echo "</table>";

mysqli_close($conexion);
?>
</tr>
  </tbody>
</table>
</div>
	
</div>

	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
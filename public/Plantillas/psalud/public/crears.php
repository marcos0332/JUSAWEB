<!DOCTYPE html>
<html>
<head>
	<title>Salud</title>
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
                <br>
                <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">

    
                <div class="col-md-6">
                    <h2>Registro de servicios</h2>
            
                    <br>
                    <form action="crears1.php" method="post">
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

                        <div class="form-group">
                            <label for="exampleInputPassword1">Nombre del servicio</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre del servicios" name="nservicio">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputPassword1">codigo del servicio</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="id del servicio" name="ids">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Información del servicio</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="ingrese toda  la Información del servicio" rows="3" name="infos"></textarea>
                        </div>

                        

                         <br>    <br>
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
    </div>
</div>


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

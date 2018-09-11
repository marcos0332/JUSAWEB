<div class="row">
  <div class="col-md-12">
    <div class="" style="background-color:black;" data-hash="slide1"> 
                 
      
      <div class="col-md-8 offset-2">
      <br><br><br>
      <br><br><br><br>
      <div class="alert alert-success" role="alert">
      <center>
  <h4 class="alert-heading">!!Wellcome!!</h4>
  <h1>Administrador <?php echo $user->nombre; ?>.</h1>  
  <p class="mb-0">Tu Usuario: <p style="color:black;"> <?php echo  $user->usuario; ?></p></p>    
  <p class="mb-0">Tu Correo: <p style="color:black;"> <?php echo  $user->email; ?></p></p>

  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Editar Información</button>



<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<fieldset>



<div class="form-group">
<form action="<?php echo URL;?>perfil/c_updateUsuario" method="POST" novalidate>
  <label class=" control-label" for="textinput">Nombre:</label>

  <div class="">
  <input id="txtNombre" name="txtNombre" type="text" placeholder="Santiago Cadavid" value="<?php echo $user->nombre; ?>" class="form-control input-md" required="">

  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="textinput">Correo:</label>  
 
  <div class="">
  <input id="txtCorreo" name="txtCorreo" type="text" placeholder="santiago@jusaweb.com" value="<?php echo $user->email; ?>" class="form-control input-md" required="">
   
  </div>
</div>

      </div>
      <div class="modal-footer"><center>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-sucess">Guardar</button>
        </form>
        </center>
        
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLongCa">Cambiar Contraseña</button>

<div class="modal fade" id="exampleModalLongCambiar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongCrear" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<fieldset>



<div class="form-group">
<form action="<?php echo URL;?>perfil/c_updateClaveUsuario" method="POST" novalidate>
  <label class=" control-label" for="textinput">Cambiar Contraseña:</label>

  <div class="">
  <input id="txtClaveActual" name="txtClaveActual" type="password" placeholder="miñi123"  class="form-control input-md" required="">

  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="control-label" for="textinput">Correo:</label>  
 
  <div class="">
  <input id="txtClave" name="txtClave" type="password" placeholder="miñi33" class="form-control input-md" required="">
   
  </div>
</div>
<div class="form-group">
  <label class="control-label" for="textinput">Correo:</label>  
 
  <div class="">
  <input id="txtClave2" name="txtClave2" type="password" placeholder="miñi33" class="form-control input-md" required="">
   
  </div>
</div>

      </div>
      <div class="modal-footer"><center>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-sucess">Guardar</button>
        </form>
        </center>
        
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLongCrear">Crear Plantilla</button>



<div class="modal fade" id="exampleModalLongCrear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongCrear" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongCrear">Crear Plantilla</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
  <label class="control-label" for="textinput">Url del proyecto</label>  
  <div class="">
  <input id="textinput" name="textinput" type="text" placeholder="www.mega.nz" class="form-control input-md">
 
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sucess">Crear</button>
      </div>
    </div>
  </div>
</div>
  </center>
</div>
      </div>
      </form>        

   <br><br><br>
  <br><br><br><br>
</div>
</div>
</div>

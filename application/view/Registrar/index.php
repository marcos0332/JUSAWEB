<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="swiper-container main-slider" id="myCarousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide slider-bg-position" style="background:url('./img./5.jpeg')" data-hash="slide1">
      <div class="col-md-4">
        <div class="heading">

          <form action="<?php echo URL;?>Registrar/crearUsuario" method="POST" novalidate>
            <br><br><br>
            <div class="form-control">
              <div class="form-group">
                <label for="exampleInputNombre">Nombre Completo</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" aria-describedby="emailHelp" placeholder="Juan David Marquez Londoño">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Usuario</label>
                <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="juandavid123">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="txtContraseña1" name="txtContraseña1" placeholder="*******">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="txtContraseña2" name="txtContraseña2" placeholder="*******">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">E-mail</label>
                <input type="text" class="form-control" id="txtEmail1" name="txtEmail1" placeholder="jdml123@gmail.com">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Confirmar E-mail</label>
                <input type="text" class="form-control" id="txtEmail2" name="txtEmail2" placeholder="jdml123@gmail.com">
              </div>
              <div class="col-md-12">
              <center>
              <button type="button" class="btn btn-danger offset-1" onclick="location.href='<?php echo URL ?>'">Cancelar</button>
              <button type="submit" class="btn btn-primary ">aceptar</button>
              </center>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
  </div>
</div>



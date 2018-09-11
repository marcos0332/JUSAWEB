<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="swiper-container main-slider" id="myCarousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide slider-bg-position" style="background:url('./img./5.jpeg')" data-hash="slide1">
      <div class="col-md-4">
        <div class="heading">
          <form action="<?php echo URL ?>Login/c_selectUsuario" method="GET">
            <div class="form-control">
            
            <div class="form-group">
                <label for="exampleInputPassword1">Usuario</label>
                <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="juandavid123">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="txtContraseña1" name="txtContraseña1" placeholder="*******">
              </div>
            </div>
            <br>
            <div class="col-md-12">
            <button type="button" class="btn btn-danger offset-1" onclick="location.href='<?php echo URL ?>'">Cancelar</button>
            <button type="submit" class="btn btn-primary ">Aceptar</button><br><br>
            </div>
            <div class="col-md-12">
            <button type="button" class="btn btn-deafault "  onclick="location.href='<?php echo URL ?>recuperar_c'">Recuperar contraseña</button><br><br>
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
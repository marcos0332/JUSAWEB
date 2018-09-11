
<!-- Swiper Silder
  ================================================== --> 
  <!-- Slider main container -->
  <div class="swiper-container main-slider" id="myCarousel">
    <div class="swiper-wrapper">
      <div class="swiper-slide slider-bg-position" style="background:url('./img./5.jpeg')" data-hash="slide1">
        <div class="col-md-4">
          <div class="heading">
          <form method="POST" action="<?php echo URL; ?>recuperar_c/sendRecoveryCode">
              <div class="form-control">
                <div class="form-group">
                  <label for="exampleInputPassword1">Ingrese tu E-mail</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="juan@gmail.com">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>  
                <br>
                <a href="<?php echo URL; ?>login" class="btn btn-danger" class="button" type="submit">Cancelar</a>
                <a href="<?php echo URL; ?>login" class="btn btn-primary" class="button"  type="submit">Aceptar</a>
              </center>
            </form>
          </div>  
        </div>
      </div></div>
      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
  </div>

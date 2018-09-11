<!-- Swiper Silder
  ================================================== --> 
  <!-- Slider main container -->
  <div class="swiper-container main-slider" id="myCarousel">
    <div class="swiper-wrapper">
      <div class="swiper-slide slider-bg-position" style="background:url('./img./5.jpeg')" data-hash="slide1">
        <div class"row">
          <div class"col-md-3">
            <img src="./img./2.jpg" width="325" height="250" >
          </div>
          <br>
          <a href="<?php echo URL; ?>" class="btn btn-secundary" class="button" type="submit">Ver</a>
          <a href="<?php echo URL; ?>perfil" class="btn btn-primary" class="button"  type="submit">Descargar</a>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
    <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
  </div>
 <!-- Add Pagination -->
 <div class="swiper-container main-slider" id="myCarousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide slider-bg-position" style="background:url('./img./5.jpeg')" data-hash="slide1">
     <div class="col-md-12">
      <div class="heading">
      <form style="color:white;">
      <h1 style="color:white;">Tu nombre es: <?php echo  $_SESSION["Nombre"]?></h1>    
      <h1 style="color:white;">Tu usuario es: <?php echo  $_SESSION["Usuario"]?></h1>    
      <h1 style="color:white;">Tu email es: <?php echo  $_SESSION["Email"]?></h1>
      <form>         
        <a href="<?php echo URL; ?>editar_c" class="btn btn-secondary" class="button"  type="submit">Cambiar Contraseña</a>
    
  </div></div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Navigation -->
  <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
  <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
</div>
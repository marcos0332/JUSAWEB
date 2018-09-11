<!-- Swiper Silder
	================================================== --> 
	<!-- Slider main container -->
	<div class="swiper-container main-slider" id="myCarousel">
		<div class="swiper-wrapper">
			<div class="swiper-slide slider-bg-position" style="background:url('./img./5.jpeg')" data-hash="slide1">
		<div class="container">
			<div class="row">
               <div class="col-md-2"></div>
            <div class="col-md-12">
        <form action="<?php echo URL;?>comentar/c_insertComentario" method="POST" novalidate>
            <h1 style="color:white;">Comentar</h1>
        <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <input id="txtComentario" name="txtComentario" class="form-control" type="text" placeholder="¿Que comentarios tienes que decir?">
                    </div>                    
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input id="txtNombre" name="txtNombre" class="form-control" type="text" placeholder="Tú nombre">
                    </div>
				</div>
				
                <div class="row">
    			<div class="col-md-12">
                    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary btn-block">Enviar</button>
				</div>
				</div>
           
        </form>
        
        
    <div class="col-md-11">
        <div class="rounded border border-dark" data-spy="scroll" style="overflow-y: scroll; height: 490px; padding-right: 15px; margin-bottom: 10px; " id="divMensajes">
        
       
        <?php

            foreach($comentarios as $comentario){

        ?>
                
                <div data-spy="scroll" style="overflow-y: scroll; height: 110px; padding-right: 15px; margin-bottom: 10px; " id="divMensajes">

                <div class="pMensaje alert alert-light">
                        
                <p >Nombre:<?php echo $comentario->nombre; ?></p>  
                    <a>Comentario:<?php echo $comentario->textoComentario; ?></a>       
                 
                </div> 
            </div>
        <?php
            }
        ?>
         </div>
    </div>
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
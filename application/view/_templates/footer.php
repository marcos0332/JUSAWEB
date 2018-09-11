
<section class="action-sec">
 <center>  
  &copy; 2018 por Linea de Codigo

  &#169; 2018 por Linea de Codigo
  <br>
  © 2018 por Linea de Codigo
  <br><br><br>
  <a href="https://www.facebook.com/" target="_blank"><img alt="siguenos en facebook" height="48" src="http://2.bp.blogspot.com/-GlLV_MydcBk/UiX09MYOSfI/AAAAAAAAB18/5vkDADo6qEw/s1600/Facebook+alt+1.png" title="siguenos en facebook" width="48" /></a>
  <a href="https://www.youtube.com/" target="_blank"><img alt="Canal de youtube" height="48" src="http://1.bp.blogspot.com/-nFaU3lAbBgg/UiX1C-m6KjI/AAAAAAAAB3M/Lbf9N4I9QOg/s1600/Youtube+alt+2.png" title="Canal de youtube" width="48" /></a>
  <a href="https://www.instagram.com/" target="_blank"><img alt="sígueme en Instagram" height="48" src="http://2.bp.blogspot.com/-6o2p2ehwMU4/UidPFSMM0vI/AAAAAAAAB_w/0v1pGNm_Dyg/s1600/instagram2.png" title="sígueme en Instagram" width="48" /></a>
</center>
</section>
<script>
  var url = "<?php echo URL; ?>";
</script>

<script src="<?php echo URL; ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo URL; ?>js/popper.min.js"></script>
<script src="<?php echo URL; ?>js/bootstrap.min.js"></script>    
<script src="<?php echo URL; ?>js/application.js"></script>
<script src="<?php echo URL; ?>js/mensaje.js"></script>

<?php if(isset($mensaje)){ ?>

<script>
    
    window.onload = function(){
        alert('<?php echo $mensaje; ?>');
    }
</script>

<?php } ?>

</body>
</html>
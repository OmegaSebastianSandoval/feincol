<?php
echo $this->banner;
?>
<div class="contenido-organigrama">

  <?php
  echo $this->contenido;
  ?>
</div>
<style>
  .main-general {
    background-color: #f7f7f7;
  }


  .fondo-imagen-interna {
    position: relative;
    display: inline-block;
    width: 100%;
  }

  .img-banner-interna {
    display: block;
    width: 100%;
    transition: opacity 0.3s ease;
  }

</style>
<script>
  Fancybox.bind('[data-fancybox]', {
    // Custom options
  });
</script>
<!-- <script>
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
</script>
 -->
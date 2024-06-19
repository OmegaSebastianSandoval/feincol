<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="caja-contenido-simple design-three three-<?php echo $contenido->contenido_id; ?>" style="background-color:
  <?php
  if ($contenido->contenido_fondo_color) {
    echo $contenido->contenido_fondo_color;
  } else if ($colorfondo) {
    echo $colorfondo;
  }
  ?> 
    <?php
    if ($contenido->contenido_borde == '1') {
      echo '; border: 2px solid #13436B; border-radius:20px; padding: 0 !important; overflow: hidden; ';
    }
    ?>">

  <?php if ($contenido->contenido_titulo_ver == 1) { ?>
    <h2><?php echo $contenido->contenido_titulo; ?></h2>
  <?php } ?>
  <?php if ($contenido->contenido_imagen) { ?>
    <div class="imagen-contenido">
      <div><img src="/images/<?php echo $contenido->contenido_imagen; ?>"></div>
    </div>
    <?php if ($contenido->contenido_borde != '1') { ?>
      </br>
    <?php } ?>
  <?php } ?>
  <div>
    <div class="descripcion" style="<?php if ($contenido->contenido_borde == '1' && $contenido->contenido_descripcion) {
                                      echo ' padding: 10px ;';
                                    } ?>">
      <?php echo $contenido->contenido_descripcion; ?>
    </div>
    <?php if ($contenido->contenido_enlace) { ?>
      <div class="d-flex justify-content-center w-100">
        <a href="<?php echo $contenido->contenido_enlace; ?>" <?php if ($contenido->contenido_enlace_abrir == 1) { ?> target="_blank" <?php } ?> class="btn btn-block btn-vermas">
          <?php if ($contenido->contenido_vermas) { ?><?php echo replaceBracketsWithSpan($contenido->contenido_vermas); ?><?php } else { ?>Ver
          Más<?php } ?>
        </a>
      </div>
    <?php } ?>
    <?php


    if (
      $contenido->contenido_archivo &&
      $contenido->contenido_seccion != 19 &&
      $contenido->contenido_seccion != 18
    ) { ?>
      <div align="center" class="archivo">
        <a href="/files/<?php echo $contenido->contenido_archivo ?>" target="_blank">Descargar Archivo <i class="fas fa-download"></i></a>
      </div>
    <?php } ?>
    <?php if ($contenido->contenido_archivo && ($contenido->contenido_seccion == 18 || $contenido->contenido_seccion == 19)) { ?>
      <div align="center" class="archivo">
        <a class="btn-amarillo" href="/files/<?php echo $contenido->contenido_archivo ?>" target="_blank"><?php if ($contenido->contenido_vermas) { ?><?php echo $contenido->contenido_vermas; ?><?php } else { ?>Descargar Archivo <i class="fas fa-download"></i><?php } ?> </a>
      </div>
    <?php } ?>

  </div>
</div>
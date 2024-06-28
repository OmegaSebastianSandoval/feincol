<div class="row">
  <?php
  // print_r($columna);
  if ($columna->contenido_titulo_ver == 1) {
    echo '<h2>' . $columna->contenido_titulo . '</h2>';
  }
  ?>
  <?php echo $columna->contenido_descripcion; ?>
  <div id="slider_<?php echo $columna->contenido_id; ?>" class="slider_<?php echo $columna->contenido_id; ?> col-sm-12 sliderCont w-100 ">
    <?php foreach ($slidercontent as $slider) : ?>
      <?php $slider = $slider["nietos"];
      // print_r($slider->contenido_descripcion);
      ?>

      <div class="itemSlider">
        <div class="row">
          <div class="col-sm-12">
            <?php if ($slider->contenido_enlace) { ?>
              <a href="<?php echo $slider->contenido_enlace ?>" <?php if ($slider->contenido_enlace_abrir == '1') {
                                                                  echo 'target="_blank"';
                                                                } ?>>
              <?php } ?>

              <img class="img-slider" src="/images/<?php echo $slider->contenido_imagen; ?>" alt="">
              <?php if ($slider->contenido_titulo_ver == 1) {
                echo '<h3>' . $slider->contenido_titulo . '</h3>';
              } ?>
              <?php if ($slider->contenido_descripcion != '') {  ?>
                <div class="descripcion-slider">

                  <?php echo  $slider->contenido_descripcion; ?>
                </div>
              <?php  } ?>

              <?php if ($slider->contenido_enlace) { ?>

              </a>
            <?php } ?>

          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script>

  $('#slider_<?php echo $columna->contenido_id; ?>').slick({
    infinity: true,
    slidesToShow: <?php echo $columna->contenido_id == 152 ? 3 : 5 ?>,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: <?php echo $columna->contenido_id == 152 ? 'true' : 'false' ?>,

    responsive: [{
      breakpoint: 900,
      settings: {
        slidesToShow: <?php echo $columna->contenido_id == 152 ? 2 : 3 ?>,
        slidesToScroll: 1,
        dots: <?php echo $columna->contenido_id == 152 ? 'true' : 'false' ?>,
        arrows: false
      }
    }, 
    {
      breakpoint: 600,
      settings: {
        slidesToShow: <?php echo $columna->contenido_id == 152 ? 1 : 3 ?>,
        slidesToScroll: 1,
        dots: <?php echo $columna->contenido_id == 152 ? 'true' : 'false' ?>,
        arrows: false
      }
    }, 
  ]
  });
</script>
<div class="row">
  <?php echo $columna->contenido_descripcion; ?>
  <div class="slider_<?php echo $columna->contenido_id; ?> col-sm-12 sliderCont w-100 ">
    <?php foreach ($slidercontent as $slider) : ?>
      <?php $slider = $slider["nietos"] ?>

      <div class="itemSlider">
        <div class="row">
          <div class="col-sm-12">
            <?php if ($slider->contenido_enlace) { ?>
              <a href="<?php echo $slider->contenido_enlace ?>" <?php if ($slider->contenido_enlace_abrir == '1') {
                                                                  echo 'target="_blank"';
                                                                } ?>>
              <?php } ?>
              <img src="/images/<?php echo $slider->contenido_imagen; ?>" alt="">
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
  $('.sliderCont').slick({
    infinity: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false
      }
    }, ]
  });
</script>
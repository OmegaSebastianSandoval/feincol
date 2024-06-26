<?php
echo $this->banner;
?>

<?php
// echo $this->contenido;
?>
<section class="fondo-titulo">
  <div class="container">
    <h1>Nuestro Fondo</h1>


  </div>
</section>
<div class="container contenedor-nuestrofondo py-4">

  <div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-quienessomos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-quienessomos" type="button" role="tab" aria-controls="v-pills-quienessomos" aria-selected="true"><img src="/corte/UbicacionFooter.png" alt=""> Quienes Somos <i class="fa-solid fa-caret-right"></i></button>
      <button class="nav-link" id="v-pills-organigrama-tab" data-bs-toggle="pill" data-bs-target="#v-pills-organigrama" type="button" role="tab" aria-controls="v-pills-organigrama" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Organigrama <i class="fa-solid fa-caret-right"></i></button>
      <!-- <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button> -->
      <button class="nav-link" id="v-pills-nuestrahistoria-tab" data-bs-toggle="pill" data-bs-target="#v-pills-nuestrahistoria" type="button" role="tab" aria-controls="v-pills-nuestrahistoria" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Nuestra Historia <i class="fa-solid fa-caret-right"></i></button>
      <button class="nav-link" id="v-pills-normatividad-tab" data-bs-toggle="pill" data-bs-target="#v-pills-normatividad" type="button" role="tab" aria-controls="v-pills-normatividad" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Normatividad <i class="fa-solid fa-caret-right"></i></button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-quienessomos" role="tabpanel" aria-labelledby="v-pills-quienessomos-tab" tabindex="0">
      <?php echo $this->contenidoQuienesSomos; ?>

      </div>
      <div class="tab-pane fade" id="v-pills-organigrama" role="tabpanel" aria-labelledby="v-pills-organigrama-tab" tabindex="0">...</div>
      <!-- <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div> -->
      <div class="tab-pane fade" id="v-pills-nuestrahistoria" role="tabpanel" aria-labelledby="v-pills-nuestrahistoria-tab" tabindex="0">
        <?php echo $this->contenidoNuestraHistoria; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-normatividad" role="tabpanel" aria-labelledby="v-pills-normatividad-tab" tabindex="0">
        <?php echo $this->contenidoNormatividad; ?>
        <?php echo $this->nuestrosAliados; ?>

      </div>
    </div>
  </div>
  <style>
    .main-general {
      background-color: #f7f7f7;
    }

    h2 {

      font-weight: 900 !important;
      font-size: 2rem !important;
    }
  </style>
  <!-- <script>
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
</script>
 -->
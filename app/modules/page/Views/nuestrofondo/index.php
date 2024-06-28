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
<div class="container contenedor-tab pb-4">

  <div class="contenedor-pestanas d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-quienessomos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-quienessomos" type="button" role="tab" aria-controls="v-pills-quienessomos" aria-selected="true"><img src="/corte/UbicacionFooter.png" alt=""> Quienes Somos <i class="fa-solid fa-caret-right"></i></button>
      <button class="nav-link" id="v-pills-organigrama-tab" data-bs-toggle="pill" data-bs-target="#v-pills-organigrama" type="button" role="tab" aria-controls="v-pills-organigrama" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Organigrama <i class="fa-solid fa-caret-right"></i></button>
      <!-- <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button> -->
      <button class="nav-link" id="v-pills-nuestrahistoria-tab" data-bs-toggle="pill" data-bs-target="#v-pills-nuestrahistoria" type="button" role="tab" aria-controls="v-pills-nuestrahistoria" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Nuestra Historia <i class="fa-solid fa-caret-right"></i></button>
      <button class="nav-link" id="v-pills-normatividad-tab" data-bs-toggle="pill" data-bs-target="#v-pills-normatividad" type="button" role="tab" aria-controls="v-pills-normatividad" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Normatividad <i class="fa-solid fa-caret-right"></i></button>
      <div id="mostrar-quienessomos2" class="mostrar-quienessomos2  d-none">
        <?php foreach ($this->opcionesLateral as $opcion) { ?>
          <div class="content-lateral">
            <h5><?= $opcion->contenido_titulo ?></h5>
            <div class="text-lateral">
              <?= $opcion->contenido_descripcion ?>
            </div>
            <?php if ($opcion->contenido_enlace) { ?>
              <a href="<?= $opcion->contenido_enlace ?>" <?= $opcion->contenido_enlace_abrir == 1 ? 'target="_blank"' : '' ?> class="enlace-alteral"><?= $opcion->contenido_vermas ?></a>
            <?php } ?>

          </div>
        <?php } ?>

        <!-- <?php echo $this->cards; ?> -->

      </div>

    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-quienessomos" role="tabpanel" aria-labelledby="v-pills-quienessomos-tab" tabindex="0">
        <?php echo $this->contenidoQuienesSomos; ?>

      </div>
      <div class="tab-pane fade" id="v-pills-organigrama" role="tabpanel" aria-labelledby="v-pills-organigrama-tab" tabindex="0">
        <div class="contenido-organigrama">


          <?php echo $this->contenidoOrganigrama; ?>

        </div>
      </div>
      <!-- <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div> -->
      <div class="tab-pane fade" id="v-pills-nuestrahistoria" role="tabpanel" aria-labelledby="v-pills-nuestrahistoria-tab" tabindex="0">
        <?php echo $this->contenidoNuestraHistoria; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-normatividad" role="tabpanel" aria-labelledby="v-pills-normatividad-tab" tabindex="0">
        <div class="w-100">

          <?php echo $this->contenidoNormatividad;
          ?>

        </div>


      </div>

    </div>
  </div>

</div>
<div id="mostrar-quienessomos" class="mostrar-quienessomos">
  <?php echo $this->contador; ?>
</div>
<div id="mostrar-normatividad" class="mostrar-normatividad d-none">
  <?php echo $this->nuestrosAliados; ?>
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
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabQuienesSomos = document.getElementById('v-pills-quienessomos-tab');
    const tabNormatividad = document.getElementById('v-pills-normatividad-tab');
    const tabs = document.querySelectorAll('[data-bs-toggle="pill"]');

    const mostrarQuienesSomos = document.getElementById('mostrar-quienessomos');
    const mostrarQuienesSomos2 = document.getElementById('mostrar-quienessomos2');
    const mostrarNormatividad = document.getElementById('mostrar-normatividad');

    // Función para mostrar/ocultar secciones
    function toggleSections(activeTabId) {
      if (activeTabId === 'v-pills-quienessomos-tab') {
        mostrarQuienesSomos.classList.remove('d-none');
        mostrarQuienesSomos2.classList.remove('d-none');
        mostrarNormatividad.classList.add('d-none');
      } else if (activeTabId === 'v-pills-normatividad-tab') {
        mostrarNormatividad.classList.remove('d-none');
        mostrarQuienesSomos.classList.add('d-none');
        mostrarQuienesSomos2.classList.add('d-none');
      } else {
        mostrarQuienesSomos.classList.add('d-none');
        mostrarQuienesSomos2.classList.add('d-none');
        mostrarNormatividad.classList.add('d-none');
      }
    }

    // Escuchar eventos de cambio de pestaña
    tabs.forEach(tab => {
      tab.addEventListener('show.bs.tab', function() {
        toggleSections(tab.id);
      });
    });

    // Función para activar la pestaña basada en el hash de la URL
    function activateTabFromHash() {
      const hash = window.location.hash;
      if (hash) {
        const targetTab = document.querySelector(hash + '[data-bs-toggle="pill"]');
        if (targetTab) {
          const tab = new bootstrap.Tab(targetTab);
          tab.show();
          toggleSections(targetTab.id);
        }
      } else {
        // Mostrar la sección "Quienes Somos" por defecto al cargar la página
        toggleSections('v-pills-quienessomos-tab');
      }
    }

    // Activar la pestaña correcta al cargar la página
    activateTabFromHash();

    // Re-activar la pestaña correcta cuando se cambia el hash de la URL
    window.addEventListener('hashchange', activateTabFromHash);

    AOS.init({
      disabled: true,
    });
  });
</script>

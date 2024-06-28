<?php
echo $this->banner;
?>

<?php
// echo $this->contenido;
?>
<section class="fondo-titulo">
  <div class="container">
    <h1>Novedades</h1>


  </div>
</section>
<div class="container contenedor-tab pb-4">

  <div class="contenedor-pestanas d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link active" id="v-pills-notasinteres-tab" data-bs-toggle="pill" data-bs-target="#v-pills-notasinteres" type="button" role="tab" aria-controls="v-pills-notasinteres" aria-selected="true"><img src="/corte/UbicacionFooter.png" alt=""> Notas de interés <i class="fa-solid fa-caret-right"></i></button>
      <button class="nav-link" id="v-pills-cumple-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cumple" type="button" role="tab" aria-controls="v-pills-cumple" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Cumpleaños <i class="fa-solid fa-caret-right"></i></button>

      <button class="nav-link" id="v-pills-proximos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-proximos" type="button" role="tab" aria-controls="v-pills-proximos" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Próximos eventos <i class="fa-solid fa-caret-right"></i></button>
      <button class="nav-link" id="v-pills-galeria-tab" data-bs-toggle="pill" data-bs-target="#v-pills-galeria" type="button" role="tab" aria-controls="v-pills-galeria" aria-selected="false"><img src="/corte/UbicacionFooter.png" alt=""> Galería <i class="fa-solid fa-caret-right"></i></button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-notasinteres" role="tabpanel" aria-labelledby="v-pills-notasinteres-tab" tabindex="0">
        <?php
        echo $this->contenidoNovedades;

        ?>

      </div>
      <div class="tab-pane fade" id="v-pills-cumple" role="tabpanel" aria-labelledby="v-pills-cumple-tab" tabindex="0">
        <?php
        echo $this->cumpleContenido;
        ?>
      </div>
      <!-- <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div> -->
      <div class="tab-pane fade" id="v-pills-proximos" role="tabpanel" aria-labelledby="v-pills-proximos-tab" tabindex="0">
        <div class="contenido-proximoseventos">

          <?php
          echo $this->contenidoProximos;
          ?>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-galeria" role="tabpanel" aria-labelledby="v-pills-galeria-tab" tabindex="0">
        <div class="w-100">

          <?php
          echo $this->contenidoGaleria;
          ?>


          <div class="container contenedor-galeria">
            <div class="row">

              <?php foreach ($this->albumes as $album) { ?>
                <div class="col col-12 col-md-6 col-lg-4">

                  <a data-fancybox="gallery<?= $album->album_id ?>" data-src="/images/<?= $album->album_imagen ?>" data-caption="<?= $album->album_descripcion ?>">
                    <img src="/images/<?= $album->album_imagen ?>" class="img-fluid portada" alt="Portada album <?= $album->album_nombre ?> " />
                  </a>
                  <?php foreach ($album->fotos as $foto) { ?>

                    <a data-fancybox="gallery<?= $album->album_id ?>" data-src="/images/<?= $foto->fotos_foto ?>" data-caption="<?= $foto->fotos_descripcion ?>" class="d-none">
                      <img src="/images/<?= $foto->fotos_foto ?>" class="img-fluid imagen" alt="Imagen <?= $foto->fotos_titulo ?>  " />
                    </a>
                  <?php } ?>
                </div>

              <?php } ?>
            </div>
            <script>
              Fancybox.bind("[data-fancybox]", {

                initialSize: "fit",

              });
            </script>
          </div>
        </div>


      </div>

    </div>
  </div>

</div>
<div id="mostrar-notasinteres" class="mostrar-notasinteres justify-content-center d-flex">
  <?php echo $this->sliderNovedades; ?>
</div>
<style>
  .main-general {
    background-color: #f7f7f7;
  }

  h2 {

    font-weight: 900 !important;
    font-size: 2rem !important;
  }

  .fancybox__nav {
    /* position: absolute !important; */
    position: static;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('[data-bs-toggle="pill"]');
    const mostrarNotasInteres = document.getElementById('mostrar-notasinteres');

    // Función para mostrar/ocultar secciones
    function toggleSections(activeTabId) {
      if (activeTabId === 'v-pills-notasinteres-tab') {
        mostrarNotasInteres.classList.add('d-flex');
        mostrarNotasInteres.classList.remove('d-none');
      } else {
        mostrarNotasInteres.classList.remove('d-flex');
        mostrarNotasInteres.classList.add('d-none');
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
        // Mostrar la sección "Notas de Interés" por defecto al cargar la página
        toggleSections('v-pills-notasinteres-tab');
      }
    }

    // Activar la pestaña correcta al cargar la página
    activateTabFromHash();

    // Re-activar la pestaña correcta cuando se cambia el hash de la URL
    window.addEventListener('hashchange', activateTabFromHash);
  });
</script>
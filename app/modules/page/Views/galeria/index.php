<?php
echo $this->banner;
?>

<?php
echo $this->contenido;
?>

<?php
// echo "<pre>";

// print_r($this->albumes);
// echo "</pre>";

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

</div>


<style>
  .main-general {
    background-color: #f7f7f7;
  }

  .fancybox__nav {
    /* position: absolute !important; */
    position: static;
  }

  .contenedor-galeria * {
    /* position: unset !important; */
  }
</style>


<script>
  Fancybox.bind("[data-fancybox]", {

    initialSize: "fit",

  });
</script>
<!--
80212302
 t3267702


80212305
 t3267705

-->
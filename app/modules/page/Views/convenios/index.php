<?php
echo $this->banner;
?>
<?php echo ($this->contenido) ?>
<section class="section-interna section-convenios">
    <div data-aos="fade-up" data-aos-duration="1500" class="container contenedor-convenios py-2">
        <div class="row">
            <?php foreach ($this->categorias as $key => $value) { ?>
                <div class="col-md-4 my-4">
                    <div class="img-conv">
                        <img src="/images/<?php echo $value->categoria_imagen ?>" alt="Imagen del conveio <?php echo $value->categoria_nombre ?>" class="shadow">
                    </div>
                    <div class="titulo-conv">
                        <h4 class="text-center color-secundario">
                            <?php echo $value->categoria_nombre ?>
                        </h4>
                    </div>
                    <?php foreach ($value->convenios as $convenio) { ?>

                        <button style="white-space: normal;" type="button" data-bs-toggle="modal" data-bs-target="#convenio<?php echo $convenio->convenio_id ?>" class="mb-2 btn btn-block text-left bg-transparent btn-convenios texto-gris py-2"><i class="fas fa-plus-circle" style="margin-right: 15px;"></i>
                            <?php echo $convenio->convenio_nombre; ?>
                        </button>


                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php foreach ($this->categorias as $value) { ?>

        <?php foreach ($value->convenios as $convenio) { ?>
            <div class="modal fade convenio-modal" id="convenio<?php echo $convenio->convenio_id ?>" tabindex="-1" role="dialog" aria-labelledby="convenio<?php echo $convenio->convenio_id ?>Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title texto-azul" id="convenio<?php echo $convenio->convenio_id ?>Label">
                                <?php echo $convenio->convenio_nombre ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body p-5">
                            <div class="text-center">
                                <img src="/images/<?php echo $convenio->convenio_imagen ?>" alt="">
                            </div>
                            <?php echo $convenio->convenio_descripcion ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</section>

<div class="contenido-opiniones">
    <?php echo ($this->opiniones) ?>
</div>

<style>
    .main-general {
        z-index: unset;
    }
</style>
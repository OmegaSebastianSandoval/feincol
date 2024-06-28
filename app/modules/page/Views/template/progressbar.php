<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="progressbar progressbar-<?php echo $contenido->contenido_id; ?>" style="<?php if ($contenido->contenido_borde == '1') {
                                                                                                                                                    echo ' border: 2px solid #13436B; border-radius:20px;  overflow: hidden; ';
                                                                                                                                                } ?>">


    <div class="barra-progreso" style="width: 400px; margin: 30px auto">
        <div class="descripcion d-flex"><?php echo $contenido->contenido_descripcion; ?></div>

        <div class="progress"  role="progressbar" aria-label="Animated striped example" aria-valuenow="<?php echo $contenido->contenido_titulo; ?>" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $contenido->contenido_titulo; ?>" aria-valuemin="0" aria-valuemax="100" style="max-width: <?php echo $contenido->contenido_titulo; ?>%">
                <span class="title-progress"><?php echo $contenido->contenido_titulo; ?>%</span>
            </div>
        </div>
    </div>

</div>

<div class="container container-time-line" align="center">
    <?php
    // print_r($fechas)
    ?>
    <?php if ($columna->contenido_titulo_ver == 1) { ?>
        <div class="page-header">
            <h3 style="text-align: center !important;"><?php echo $columna->contenido_titulo; ?></h3>
        </div>
    <?php } ?>
    <div id="timeline" style="width: 100%;" class="d-sm-block d-none">
        <div class="row timeline-movement timeline-movement-top">


        </div>
        <?php foreach ($fechas as $key => $fecha) { ?>
            <?php $fecha = $fecha["nietos"] ?>
            <div class="row timeline-movement">
                <div class="d-flex justify-content-center">
                    <p class="title"> </p>
                    <!-- <div class="timeline-badge <?php if ($key % 2 == 0) {
                                                        echo 'left';
                                                    } ?>">

                    </div> -->
                </div>
                <div class="col-sm-6  timeline-item <?php if ($key % 2 != 0) {
                                                        echo 'cel-linea';
                                                    } else {
                                                        echo ' margen-linea';
                                                    } ?>" <?php if ($key % 2 != 0) {
                                                                echo 'style="visibility:hidden;"';
                                                            } ?>>
                    <div class="row no-margen">
                        <div class="col-sm-12 timeline-col p-0">
                            <div class="row timeline-panel  d-flex justify-content-end pe-4">
                                <div class="p-0 " style="width:max-content;">
                                    <li class="itemLine itemLineLeft" style="background-color: <?php echo $fecha->contenido_fondo_color; ?> ;">
                                        <button style="background: transparent;" type="button" class="btn-clean p-3" data-bs-toggle="modal" data-bs-target="#modal_<?php echo $fecha->contenido_id ?>">
                                            <!-- <img src="/images/<?php echo $fecha->contenido_imagen; ?>" alt=""> -->
                                            <h3 class="timeline-balloon-date-day"><?php echo $fecha->contenido_titulo ?></h3>
                                        </button>
                                    </li>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-sm-6  timeline-item  <?php if ($key % 2 == 0) {
                                                            echo 'cel-linea2';
                                                        } else {
                                                            echo ' cel-linea3';
                                                        } ?>" <?php if ($key % 2 == 0) {
                                                                    echo 'style="visibility:hidden;"';
                                                                } ?>>
                    <div class="row no-margen">
                        <div class="col-sm-12  timeline-col p-0">
                            <div class="row timeline-panel  d-flex justify-content-start ps-4">
                                <div class="p-0" style="width:max-content;">
                                    <li class="itemLine itemLineRight" style="background-color: <?php echo $fecha->contenido_fondo_color; ?> ;">
                                        <button style="background: transparent;" type="button" class="btn-clean p-3" data-bs-toggle="modal" data-bs-target="#modal_<?php echo $fecha->contenido_id ?>">
                                            <!-- <img src="/images/<?php echo $fecha->contenido_imagen; ?>" alt=""> -->
                                            <h3 class="timeline-balloon-date-day"><?php echo $fecha->contenido_titulo ?></h3>
                                        </button>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="container d-sm-none d-flex pl-5 justify-content-center flex-column">
    <?php foreach ($fechas as $key => $fecha) { ?>
        <?php $fecha = $fecha["nietos"] ?>

        <div class="col-sm-6  timeline-item ml-2 my-3">
            <div class="row no-margen">
                <div class="col-sm-10 timeline-col p-0">
                    <div class="row timeline-panel credits d-flex justify-content-end">
                        <div class="col-sm-6 p-md-0">
                            <li class="itemLine itemLineRight" style="background-color: <?php echo $fecha->contenido_fondo_color; ?> ;">
                                <button style="background: transparent;" type="button" class="btn-clean p-3" data-bs-toggle="modal" data-bs-target="#modal_<?php echo $fecha->contenido_id ?>">
                                    <!-- <img src="/images/<?php echo $fecha->contenido_imagen; ?>" alt=""> -->
                                    <h3 class="timeline-balloon-date-day"><?php echo $fecha->contenido_titulo ?></h3>
                                </button>
                            </li>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php foreach ($fechas as $key => $fecha) : ?>
    <?php $fecha = $fecha["nietos"] ?>

    <div class="modal fade modal-linea" id="modal_<?php echo $fecha->contenido_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="">
                <div class="modal-header" style="border-bottom: none;">

                    <h1 class="modal-title fs-5 timeline-balloon-date-day" id="exampleModalLabel" style="color: <?php echo $fecha->contenido_fondo_color; ?> ;"><?php echo $fecha->contenido_titulo ?></h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body" style="color: #fff;">
                    <img class="mx-auto w-100 d-block" src="/images/<?php echo $fecha->contenido_imagen; ?>" alt="">
                    <p><?php echo $fecha->contenido_descripcion ?></p>
                </div>

            </div>
        </div>
    </div>
<?php endforeach; ?>
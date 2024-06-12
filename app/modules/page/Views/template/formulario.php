<section id="<?php echo $contenedor->contenido_id ?>" class="
    id_<?php echo $contenedor->contenido_id ?> 
    <?php echo $contenedor->contenido_columna; ?> 
    contenedor-seccion 
    <?php if ($contenedor->contenido_fondo_imagen_tipo == 2) { ?>dinamica<?php } ?>" style="background-image:url(/images/<?php echo $contenedor->contenido_fondo_imagen; ?>); background-color:<?php echo $contenedor->contenido_fondo_color; ?>;">
    <div class="content-formulario container ">
        <div class="row">
            <div class="col-12 col-lg-4">
                <?php if ($contenedor->contenido_titulo_ver == 1) { ?>
                    <h2 class="titulo-formulario"><?php echo $contenedor->contenido_titulo; ?></h2>
                <?php } ?>
                <?php if ($contenedor->contenido_descripcion) { ?>
                    <div class="descripcion-formulario"><?php echo $contenedor->contenido_descripcion; ?></div>
                <?php } ?>
            </div>
            <div class="col-12 col-lg-8">
                <form action="/page/index/envarmensaje" class="formulario-contacto" id="formulario-contacto">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" id="nombre" name="nombre" class="input-field" placeholder="Nombre*" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" id="correo" name="correo" class="input-field" placeholder="Email*" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" id="asunto" name="asunto" class="input-field" placeholder="Asunto*" required>
                                    <input type="hidden" id="email" name="email">

                                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                    <input name="hash" type="hidden" value="<?php echo md5(date("Y-m-d")); ?>" />
                                    <input type="hidden" name="csrf" id="csrf" value="<?php echo $this->csrf ?>">
                                    <input type="hidden" name="csrf_section" id="csrf_section" value="<?php echo $this->csrf_section ?>">

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <textarea name="mensaje" id="mensaje" class="input-field" placeholder="Mensaje" required></textarea>

                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" required value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" data-bs-toggle="modal" data-bs-target="#modalPoliticas" role="button">
                            Aceptar términos y condiciones
                        </label>
                    </div>

                    <div class="d-grid d-md-flex justify-content-center justify-content-md-between">
                        <div class="g-recaptcha" data-sitekey="6LfFDZskAAAAAE2HmM7Z16hOOToYIWZC_31E61Sr"></div>

                        <button class="btn-azul" id="submit-btn">Enviar</button>
                    </div>
                   
                </form>

            </div>
        </div>

    </div>
</section>



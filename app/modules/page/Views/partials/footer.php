<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15907.73849766572!2d-74.0756589!3d4.6057275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99a015117a73%3A0x13d843153f1718c6!2sFEINCOL!5e0!3m2!1ses-419!2sco!4v1716399774729!5m2!1ses-419!2sco" width="1400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<div class="footer">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="img">
                    <img src="/corte/Logo-Footer.png/" alt="Logo FEINCOL footer">

                </div>
                <div class="mt-2 footer-desc">
                    <?php echo $this->infopage->info_pagina_informacion_contacto_footer ?>
                </div>
            </div>
            <div class="col-12 col-lg-4  d-flex flex-column gap-1 gap-md-3">

                <span class="titulo-footer">Enlaces Extra</span>
                <?php echo $this->enlacesFooter ?>
            </div>
            <div class="col-12 col-lg-5 content-info-footer d-flex flex-column gap-1 gap-md-3">
                <span class="titulo-footer">Contáctanos</span>
                <?php if ($this->infopage->info_pagina_direccion_contacto) { ?>
                    <div class="footer-info">
                        <img src="/corte/UbicacionFooter.png" alt="Imagen de ubicación">
                        <?= $this->infopage->info_pagina_direccion_contacto ?>
                    </div>
                <?php } ?>


                <?php if ($this->infopage->info_pagina_telefono) { ?>
                    <div class="footer-info">
                        <img src="/corte/TelefonoFooter.png" alt="Imagen de teléfono">

                        <?= $this->infopage->info_pagina_telefono ?>
                    </div>
                <?php } ?>
                <?php if ($this->infopage->info_pagina_correos_contacto) { ?>
                    <div class="footer-info">
                        <img src="/corte/UbicacionFooter.png" alt="Imagen de correo">

                        <?= $this->infopage->info_pagina_correos_contacto ?>
                    </div>
                <?php } ?>

            </div>
            <div class="col-12 col-lg-3 d-flex align-items-end">
                <span class="derechos">Todos los derechos reservados</span>
            </div>

            <div class="col-12 col-lg-4  d-flex align-items-end">
                <a href="" class="btn btn-primary">Zona Privada</a>
            </div>

            <div class="col-12 col-lg-5 content-info-footer d-flex  align-items-end">
                <div class="redes-footer d-flex gap-1 gap-md-3">
                    Siguenos en nuestras redes sociales

                    <?php if ($this->infopage->info_pagina_youtube) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_youtube ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos ?>">
                            <i class="fa-brands fa-youtube"></i>
                        </a>

                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_facebook) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_facebook ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos ?>">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>


                    <?php } ?>

                    <?php if ($this->infopage->info_pagina_twitter) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_twitter ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos ?>">
                            <i class="fa-brands fa-twitter"></i>
                        </a>


                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_linkedin) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_linkedin ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos ?>">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>


                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_instagram) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_instagram ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos ?>">
                            <i class="fa-brands fa-instagram"></i>
                        </a>


                    <?php } ?>
                    <?php if ($this->infopage->info_pagina_pinterest) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_pinterest ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos ?>">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>


                    <?php } ?>

                    <?php if ($this->infopage->info_pagina_flickr) { ?>
                        <a href="<?php echo $this->infopage->info_pagina_flickr ?>" target="_blank" style="color:<?php echo $this->partials->partials_color_iconos ?>">
                            <i class="fa-brands fa-flickr"></i>
                        </a>


                    <?php } ?>
                </div>
            </div>




        </div>
    </div>
</div>
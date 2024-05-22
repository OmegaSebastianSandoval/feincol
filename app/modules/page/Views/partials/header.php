<div class="container">
    <div class="row p-4 d-flex justify-content-between">
        <div class="col-12 col-md-6">
            <!-- <span class="welcome-text">¡Bienvenidos! <span class="highlight">más de <span class="years">43 años</span></span> de experiencia</span> -->
            <?php echo $this->contenidoHeader->contenido_descripcion ?>
            <div class="d-flex justify-content-between align-items-center g-4">
                <img src="/corte/Logo-Header.png" class="logo-header" alt="Logo de FEINCOL">
                <a href="#" class="btn-azul-oscuro">
                    <img src="/corte/UbicacionHeader.png" alt="Imagen de contacto">
                    Zona Privada</a>
            </div>
        </div>
        <div class="col-12 col-md-5 gap-2 d-grid">
            <?php if ($this->infopage->info_pagina_direccion_contacto) { ?>
                <div class="header-top-info">
                    <img src="/corte/UbicacionHeader.png" alt="Imagen de contacto">
                    <?= $this->infopage->info_pagina_direccion_contacto ?>
                </div>
            <?php } ?>

            <?php if ($this->infopage->info_pagina_info_horario) { ?>
                <div class="header-top-info">
                    <img src="/corte/HorarioHeader.png" alt="Imagen de horario">

                    <?= $this->infopage->info_pagina_info_horario ?>
                </div>
            <?php } ?>
            <?php if ($this->infopage->info_pagina_telefono) { ?>
                <div class="header-top-info">
                    <img src="/corte/TelefonoHeader.png" alt="Imagen de teléfono">

                    <?= $this->infopage->info_pagina_telefono ?>
                </div>
            <?php } ?>
        </div>

    </div>
</div>
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <div class="vr"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nuestro Fondo</a>
                </li>
                <div class="vr"></div>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Portafolio
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <div class="vr"></div>

                <li class="nav-item">
                    <a class="nav-link" href="#">Felicidad</a>
                </li>
                <div class="vr"></div>

                <li class="nav-item">
                    <a class="nav-link" href="#">Afíliate</a>
                </li>
                <div class="vr"></div>

                <li class="nav-item">
                    <a class="nav-link" href="#">Escríbenos</a>
                </li>
                <div class="vr"></div>

               <!--  <li class="nav-item">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li> -->


                <li class="nav-item links-redes border-0">
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
                </li>

            </ul>

        </div>
    </div>
</nav>
<div class="container">
    <div class="row p-1 p-md-4 d-flex justify-content-between">
        <div class="col-12 col-md-6">

            <?php echo $this->contenidoHeader->contenido_descripcion ?>
            <div class="d-flex justify-content-between align-items-center g-4">
                <a href="/"> <img src="/corte/Logo-Header.png" class="logo-header" alt="Logo de FEINCOL">
                </a>
                <a href="#" class="btn-azul-oscuro d-none d-md-flex">
                    <img src="/corte/UbicacionHeader.png" alt="Imagen de contacto">
                    Zona Privada</a>
            </div>
        </div>
        <div class="col-12 col-md-5 gap-2 d-none d-md-grid">
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

<?php


$isActivePortafolio = in_array($this->botonactivo, $this->isActivePortafolio);
$isActiveEscribenos = in_array($this->botonactivo, $this->isActiveEscribenos);
$isActiveInicio = in_array($this->botonactivo, $this->isActiveInicio);


?>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="filter: invert(1);">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?php echo $this->botonactivo == 1 ? 'active' : '' ?>" href="/">Inicio</a>
                </li>
                <div class="vr"></div>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $isActiveInicio ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nuestro Fondo
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item  <?php echo $this->botonactivo == 11 ? 'active' : '' ?>" href="/page/quienessomos">¿Quienes somos?</a></li>
                        <li><a class="dropdown-item  <?php echo $this->botonactivo == 12 ? 'active' : '' ?>" href="/page/organigrama">Organigrama</a></li>

                        <li><a class="dropdown-item  <?php echo $this->botonactivo == 13 ? 'active' : '' ?>" href="/page/nuestrahisotria">Nuestra historia</a></li>
                        <li><a class="dropdown-item  <?php echo $this->botonactivo == 14 ? 'active' : '' ?>" href="/page/normatividad">Normatividad</a></li>
                    </ul>
                </li>

                <div class="vr"></div>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $isActivePortafolio ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Portafolio
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Ahorros</a></li>
                        <li><a class="dropdown-item" href="#">Créditos</a></li>
                        <li><a class="dropdown-item" href="#">Servicios de previsión</a></li>


                        <li><a class="dropdown-item <?php echo $this->botonactivo == 8 ? 'active' : '' ?>" href="/page/beneficios">Beneficios sociales</a></li>
                        <li><a class="dropdown-item" href="#">Tarjeta GES</a></li>
                        <li><a class="dropdown-item" href="#">Convenios</a></li>

                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <div class="vr"></div>

                <li class="nav-item">
                    <a class="nav-link <?php echo $this->botonactivo == 4 ? 'active' : '' ?>" href="/page/felicidad">Felicidad</a>
                </li>
                <div class="vr"></div>

                <li class="nav-item">
                    <a class="nav-link <?php echo $this->botonactivo == 16 ? 'active' : '' ?>" href="#">Novedades</a>
                </li>
                <div class="vr"></div>

                <li class="nav-item d-none">
                    <a class="nav-link <?php echo $this->botonactivo == 15 ? 'active' : '' ?>" href="/page/actualizacion">Actualización de datos</a>
                </li>
                <div class="vr  d-none"></div>

                <li class="nav-item d-none">
                    <a class="nav-link <?php echo $this->botonactivo == 5 ? 'active' : '' ?>" target="_blank" download href="/files/<?php echo $this->contenidoafiliate->contenido_archivo ?>">Afíliate</a>
                </li>
                <div class="vr  d-none"></div>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $isActiveEscribenos ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Escríbenos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item  <?php echo $this->botonactivo == 6 ? 'active' : '' ?>" href="/page/felicitaciones">Felicitaciones</a></li>
                        <li><a class="dropdown-item  <?php echo $this->botonactivo == 7 ? 'active' : '' ?>" href="/page/directorio">Directorio</a></li>

                        <li><a class="dropdown-item" href="/page/formulario">Formulario de contacto</a></li>
                    </ul>
                </li>
                <div class="vr"></div>
                <li class="nav-item d-block d-md-none">
                    <a class="nav-link" href="#">Zona privada</a>
                </li>
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
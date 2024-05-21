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

<div class="movil">
    <div class="wrapper_movil">
        <a href="#" id="un"><span class="fa fa-bars bt-menu no_link"></span></a>
       
        <form role="search" method="get" id="searchform" class="form_search_movil" action="">
            <div class="flex_search_movil">
                <a href="#" id="do"><span class="fa fa-arrow-left bt-menu no_link"></span></a>
                <input type="text" value="" name="s" id="s" placeholder="Buscar..." class="input_search">
                <button class="fa fa-search button_search_movil no_link"></button>
            </div>
        </form>
        <a href="#" class="cerrar"><span class="fa fa-search phone_search no_link"></span></a>
    </div>
</div>

<div class="wrapper">



    <div class="uno_solo">
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nuestro Fondo</a></li>
                <li><a href="#">Portafolio</a></li>
                <li><a href="#">Felicidad</a></li>
                <li><a href="#">Afíliate</a></li>
                <li><a href="#">Escríbenos</a></li>
                <li><a href="#"><span class="fa fa-search show_search no_link"></span></a></li>
            </ul>
        </nav>

        <form role="search" method="get" id="searchform" class="form_search" action="">
            <div class="flex_search">
                <input type="text" value="" name="s" id="s" placeholder="Buscar..." class="input_search">
                <button class="fa fa-search button_search no_link"></button>
            </div>
        </form>
    </div>

</div>

<style>
   /*  header {
        width: 100%;
        background: #1E1F1F;
        height: 60px;
        z-index: 3000;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        position: fixed;
        top: 0px;
    }
 */
    header .wrapper {
      
        width: 100%;
        margin: 0px auto;
        /*FlexBox*/
        display: flex;
        justify-content: center;
        align-items: center;
        background: #1E1F1F;

    }

   
    header .wrapper .uno_solo {
        /*FlexBox*/
        display: flex;
        flex-wrap: no-wrap;
    }

    header .wrapper .uno_solo nav {
        display: inline-block;
    }

    header .wrapper .uno_solo nav ul {
        list-style: none;
        display: inline-block;
        margin-bottom: 0;

    }

    header .wrapper .uno_solo nav ul li {
        display: inline-block;
        padding: 19px;
        cursor: pointer;
    }

    header .wrapper .uno_solo nav ul li:hover {
        background: #121111;
    }

    header .wrapper .uno_solo nav ul li:last-child {
        background: #1E1F1F;
        padding: 0px;
        margin-left: 15px;
    }

    header .wrapper .uno_solo nav ul li a {
        text-decoration: none;
        color: #fff;
        font-size: 17px;
    }

    header .wrapper .uno_solo .form_search {
        display: none;
        margin-left: -15px;
    }

    header .wrapper .uno_solo .form_search .flex_search {
        display: flex;
    }

    header .wrapper .uno_solo .form_search .flex_search .input_search {
        border: none;
        padding: 10px 20px 10px 0px;
        margin: 12px 0px;
        width: 200px;
        background: transparent;
        color: #fff;
        outline-color: transparent;
    }

    header .wrapper .uno_solo .form_search .flex_search .input_search::-moz-placeholder {
        color: #fff;
    }

    header .wrapper .uno_solo .form_search .flex_search .input_search:-moz-placeholder {
        color: #fff;
    }

    header .wrapper .uno_solo .form_search .flex_search .input_search::-webkit-input-placeholder {
        color: #fff;
    }

    header .wrapper .uno_solo .form_search .flex_search .input_search:-ms-input-placeholder {
        color: #fff;
    }

    header .wrapper .uno_solo .form_search .flex_search .button_search {
        border: none;
        background: transparent;
        color: #fff;
        font-size: 17px;
        cursor: pointer;
        outline-color: transparent;
        margin-bottom: 5px;
    }

    header .movil {
        display: none;
    }

    @media screen and (max-width: 1000px) {
        body {
            padding-top: 60px;
        }

        header .logo {
            display: none;
        }

        header .movil {
            width: 100%;
            z-index: 3000;
            overflow: hidden;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            height: 60px;
            /*FlexBox*/
            display: flex;
            flex-wrap: nowrap;
        background: #1E1F1F;

        }

        header .movil .wrapper_movil {
            width: 95%;
            margin: 0px auto;
            /*FlexBox*/
            display: flex;
            align-items: center;
        }

        header .movil .wrapper_movil a {
            text-decoration: none;
            color: #fff;
        }

        header .movil .wrapper_movil a .bt-menu {
            font-size: 35px;
            padding: 5px 10px;
            float: left;
            display: block;
            font-weight: 400;
        }

        header .movil .wrapper_movil a .phone_search {
            font-size: 25px;
            float: right;
            padding: 9px 10px;
            margin: 0px 5px;
            display: block;
        }

        header .movil .wrapper_movil .logo-centrar {
            width: 86%;
            margin: auto;
            /*FlexBox*/
            display: flex;
            justify-content: center;
        }

        header .movil .wrapper_movil .logo-centrar .logo-movil {
            box-sizing: border-box;
            text-decoration: none;
            font-size: 35px;
        }

        header .movil .wrapper_movil .form_search_movil {
            display: none;
            width: 100%;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil {
            width: 100%;
            /*FlexBox*/
            display: flex;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil #do {
            display: flex;
            align-items: center;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil #do .fa-arrow-left {
            font-size: 35px;
            padding: 5px 10px;
            float: left;
            display: block;
            font-weight: 400;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil .input_search {
            border: none;
            padding: 10px 20px;
            margin: 12px 0px;
            width: 100%;
            background: transparent;
            color: #fff;
            outline-color: transparent;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil .input_search::-moz-placeholder {
            color: #fff;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil .input_search:-moz-placeholder {
            color: #fff;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil .input_search::-webkit-input-placeholder {
            color: #fff;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil .input_search:-ms-input-placeholder {
            color: #fff;
        }

        header .movil .wrapper_movil .form_search_movil .flex_search_movil .button_search,
        header .movil .wrapper_movil .form_search_movil .flex_search_movil .button_search_movil {
            border: none;
            background: transparent;
            color: #fff;
            cursor: pointer;
            margin-left: 15px;
            font-size: 25px;
            padding: 9px 0px 9px 10px;
            margin: 0px 5px;
            outline-color: transparent;
        }

        header .wrapper .uno_solo nav {
            width: 80%;
            height: calc(100% - 60px);
            position: fixed;
            right: 100%;
            margin: 0;
            overflow: scroll;
            background: #1E1F1F;
            z-index: 2000;
            /*FlexBox*/
            display: flex;
            flex-wrap: nowrap;
        }

        header .wrapper .uno_solo nav ul {
            width: 100%;
            display: block;
            box-shadow: inset 0 20px 10px -20px rgba(0, 0, 0, 0.5);
        }

        header .wrapper .uno_solo nav ul li {
            display: block;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }

        header .wrapper .uno_solo nav ul li:last-child {
            display: none;
            border-bottom: none;
        }

        header .wrapper .uno_solo nav ul li a {
            text-align: left;
            width: 100%;
            display: block;
        }

        header .wrapper .uno_solo .form_search {
            display: none;
        }
    }
</style>

<script>
    // JavaScript Document

    $(document).ready(function() {
        //Desaparece menu ordenador
        $('.show_search').on('click', function() {
            $('.form_search').toggle();
            $('.show_search').css("display", "none");
        })


        // //Aparece menu ordenador
        $('.button_search').on('click', function() {
            $('.form_search').css("display", "none");
        });

        $('.button_search').on('click', function() {
            $('.show_search').css("display", "flex");
        });



        //Aparece barra busquedas
        $('.phone_search').on('click', function() {
            //Desplegamos form_search_movil
            $('.form_search_movil').toggle();
            //Desaparece phone_search
            $('.phone_search').css("display", "none");
            //Desaparece logo
            $('.logo-centrar').css("display", "none");
            //Se cambia boton menu por flecha
            $(".bt-menu").addClass("fa-arrow-left");
            $(".bt-menu").removeClass("fa-bars");
        })



        //Desaparece barra busquedas
        $('.button_search_movil').on('click', function() {
            //Cerramos form_search_movil
            $('.form_search_movil').toggle();
            //Aparece phone_search
            $('.phone_search').css("display", "flex");
            //Aparece logo
            $('.logo-centrar').css("display", "flex");
            //Cambiar icono flecha a menu dandole a buscar
            $('.bt-menu').css("display", "flex");
        })




        //Desaparece barra busqueda al darle a flecha
        //Ocultamos el Primer Menu
        $('.phone_search').on('click', function() {
            $("#un .bt-menu").addClass("fa-bars");
            $(".fa-bars").hide();
        });
        //Desaparece barra busqueda al darle a flecha
        $('#do .fa-arrow-left').on('click', function() {
            $('.form_search_movil').toggle();
            $('.phone_search').css("display", "flex");
            $('.logo-centrar').css("display", "flex");
            $("#do .fa-arrow-left").show();
        });
        //Mostramoms el Menu despues de Regresar
        $('.fa-arrow-left').on('click', function() {
            $(".bt-menu").show();
        });



        //No hacer funcionar el enlace del boton menu
        $(".no_link").click(function(event) {
            event.preventDefault();
        });
    });

    //Desplegar menu
    $(document).ready(function() {

        var contador = 1;

        $('.fa-bars').click(function() {
            if (contador == 1) {
                $('nav').animate({
                    left: '0'
                });
                contador = 0;
            } else {
                contador = 1;
                $('nav').animate({
                    left: '-100%'
                });
            }
        });

        //Cerrar solo el menu
        $('.uno_solo nav ul li, .cerrar').click(function() {
            if (contador == 0) {
                $('nav').animate({
                    left: '-100%'
                });
                contador = 1;
            }
        });

    });
</script>
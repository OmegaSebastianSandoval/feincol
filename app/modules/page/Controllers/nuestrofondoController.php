<?php

class Page_nuestrofondoController extends Page_mainController
{
  public $botonactivo  = 22;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(21);
    $this->_view->contenido = $this->template->getContentseccion(21);

    $contenidoModel = new Page_Model_DbTable_Contenido();
    $this->_view->opcionesLateral = $contenidoModel->getList("contenido_padre = '158' AND contenido_estado='1' AND contenido_tipo  ='5'", "orden ASC");

    /* QUIENES SOMOS */
    $this->_view->contenidoQuienesSomos = $this->template->getContentseccion(8);

    /* ORGANIGRAMA */
    $this->_view->contenidoOrganigrama = $this->template->getContentseccion(9);


    /* NUESTRA HISTORIA */
    $this->_view->contenidoNuestraHistoria = $this->template->getContentseccion(10);

    /* NORMATIVIDAD */
    $this->_view->contenidoNormatividad = $this->template->getContentseccion(11);

    /* CONTADOR */
    $this->_view->contador = $this->template->getContentseccionById(141);

    /* CARDS IZQUIERDA */
    // $this->_view->cards = $this->template->getContentseccionById(158);

    /* SLIDER */
    $this->_view->nuestrosAliados = $this->template->getContentseccionById(15);
  }
}

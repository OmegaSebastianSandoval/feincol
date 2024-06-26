<?php 

class Page_nuestrofondoController extends Page_mainController
{
  public $botonactivo  = 22;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(21);
    $this->_view->contenido = $this->template->getContentseccion(21);

    $contenidoModel = new Page_Model_DbTable_Contenido();
    $opcionesLateral = $contenidoModel->getList("","orden ASC");

    $this->_view->contenidoQuienesSomos = $this->template->getContentseccion(8);
    $this->_view->contador = $this->template->getContentseccionById(141);



    $this->_view->contenidoNuestraHistoria = $this->template->getContentseccion(10);

    $this->_view->contenidoNormatividad = $this->template->getContentseccion(11);
    
    $this->_view->nuestrosAliados = $this->template->getContentseccionById(15);

  }
}
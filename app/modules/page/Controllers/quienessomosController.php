<?php 

class Page_quienessomosController extends Page_mainController
{
  public $botonactivo  = 11;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(8);
    $this->_view->contenido = $this->template->getContentseccion(8);
    }
}
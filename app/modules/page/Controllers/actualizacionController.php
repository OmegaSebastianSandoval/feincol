<?php 

class Page_actualizacionController extends Page_mainController
{
  public $botonactivo  = 15;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(12);
    $this->_view->contenido = $this->template->getContentseccion(12);
    }
}
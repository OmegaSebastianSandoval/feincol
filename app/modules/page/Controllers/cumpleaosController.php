<?php 

class Page_cumpleaosController extends Page_mainController
{
  public $botonactivo  = 25;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(23);
    $this->_view->contenido = $this->template->getContentseccion(23);
  }
}
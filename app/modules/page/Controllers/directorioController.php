<?php 

class Page_directorioController extends Page_mainController
{
  public $botonactivo  = 7;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(5);
    $this->_view->contenido = $this->template->getContentseccion(5);
  }
}
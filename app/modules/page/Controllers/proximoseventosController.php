<?php 

class Page_proximoseventosController extends Page_mainController
{
  public $botonactivo  = 26;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(24);
    $this->_view->contenido = $this->template->getContentseccion(24);
  }
}
<?php 

class Page_organigramaController extends Page_mainController
{
  public $botonactivo  = 12;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(7);
    $this->_view->contenido = $this->template->getContentseccion(7);
    }
}
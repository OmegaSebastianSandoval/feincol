<?php 

class Page_tarjetagesController extends Page_mainController
{
  public $botonactivo  = 19;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(17);
    $this->_view->contenido = $this->template->getContentseccion(17);
    }
}
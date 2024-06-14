<?php 

class Page_normatividadController extends Page_mainController
{
  public $botonactivo  = 14;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(11);
    $this->_view->contenido = $this->template->getContentseccion(11);
    }
}
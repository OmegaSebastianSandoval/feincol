<?php 

class Page_notasinteresController extends Page_mainController
{
  public $botonactivo  = 24;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(22);
    $this->_view->contenido = $this->template->getContentseccion(22);
    $this->_view->sliderNovedades = $this->template->getContentseccionById(151);

  }
}
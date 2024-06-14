<?php 

class Page_felicidadController extends Page_mainController
{
  public $botonactivo  = 4;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(14);
    $this->_view->contenido = $this->template->getContentseccion(14);
  }

  public function itemAction()
  {
    $id = $this->_getSanitizedParam('id');
    
    $this->_view->contenido = $this->template->traerContenidoPorPadre(14, $id);
  }
}

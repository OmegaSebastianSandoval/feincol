<?php 

class Page_creditosController extends Page_mainController
{
  public $botonactivo  = 20;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(20);
    $this->_view->contenido = $this->template->getContentseccion(20);
    }
    public function creditoAction()
    {
      $id = $this->_getSanitizedParam('id');
      $this->_view->contenido = $this->template->traerContenidoPorPadre(18, $id);
    }
}
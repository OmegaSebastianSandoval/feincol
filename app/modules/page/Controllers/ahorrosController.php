<?php 

class Page_ahorrosController extends Page_mainController
{
  public $botonactivo  = 19;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(19);
    $this->_view->contenido = $this->template->getContentseccion(19);
    }
    public function ahorroAction()
    {
      $id = $this->_getSanitizedParam('id');
      $this->_view->contenido = $this->template->traerContenidoPorPadre(19, $id);
    }
}
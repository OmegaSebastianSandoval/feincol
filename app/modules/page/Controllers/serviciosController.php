<?php

class Page_serviciosController extends Page_mainController
{
  public $botonactivo  = 21;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(18);
    $this->_view->contenido = $this->template->getContentseccion(18);
  }
  public function itemAction()
  {
    $id = $this->_getSanitizedParam('id');
    $this->_view->contenido = $this->template->traerContenidoPorPadre(18, $id);
  }
}

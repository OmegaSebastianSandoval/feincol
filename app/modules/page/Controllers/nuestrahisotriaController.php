<?php

class Page_nuestrahisotriaController extends Page_mainController
{
  public $botonactivo  = 13;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(10);
    $this->_view->contenido = $this->template->getContentseccion(10);
  }
}

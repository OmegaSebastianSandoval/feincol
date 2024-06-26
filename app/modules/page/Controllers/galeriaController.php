<?php

class Page_galeriaController extends Page_mainController
{
  public $botonactivo  = 27;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(26);
    $this->_view->contenido = $this->template->getContentseccion(26);

    $fotosModel = new Administracion_Model_DbTable_Fotos();
    $albumModel = new Administracion_Model_DbTable_Album();
    $albumes = $albumModel->getList("album_estado ='1'", "orden ASC");

    foreach ($albumes as $key => $album) {
      $fotos = $fotosModel->getList("fotos_album = '{$album->album_id}' AND fotos_estado ='1'", "orden ASC");
      $album->fotos = $fotos;
    }
 

    $this->_view->albumes = $albumes;

  }
}

<?php

class Page_novedadesController extends Page_mainController
{
  public $botonactivo  = 23;

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(25);
    $this->_view->contenido = $this->template->getContentseccion(25);

    /* notas de interes */
    /* cumpleaños  */
    $this->_view->cumpleContenido = $this->template->getContentseccion(23);

    /* proximos eventos */
    $this->_view->contenidoProximos = $this->template->getContentseccion(24);

    /* galeria */
    $this->_view->contenidoGaleria = $this->template->getContentseccion(26);

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

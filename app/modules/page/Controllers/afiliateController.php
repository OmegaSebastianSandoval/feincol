<?php

class Page_afiliateController extends Page_mainController
{


  public function indexAction()
  {
    $contenidoModel = new Page_Model_DbTable_Contenido();
    $contenidoafiliate = $contenidoModel->getById(29);
    header("Location: /files/".$contenidoafiliate->contenido_archivo);
  }
}

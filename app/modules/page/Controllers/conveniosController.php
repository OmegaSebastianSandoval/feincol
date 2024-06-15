<?php

class Page_conveniosController extends Page_mainController
{
  public $botonactivo = 17;

  public function indexAction()
  {

    $this->_view->banner = $this->template->banner(15);
    $this->_view->contenido = $this->template->getContentseccion(15);

    $this->_view->opiniones = $this->template->getContentseccion(16);



    $categoriasModel = new Administracion_Model_DbTable_Categoria();
    $conveniosModel = new Administracion_Model_DbTable_Convenios();

    $categorias = $categoriasModel->getList(" categoria_estado = '1' ", "orden ASC");
    foreach ($categorias as $categoria) {
      $categoria->convenios = $conveniosModel->getList(" convenio_categoria = '" . $categoria->categoria_id . "' ", "orden ASC");
    }
    $this->_view->categorias = $categorias;
  }
}

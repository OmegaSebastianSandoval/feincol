<?php 

/**
*
*/

class Page_mainController extends Controllers_Abstract
{

	public $template;

	public function init()
	{
		$this->setLayout('page_page');
		$this->_view->botonactivo = $this->botonactivo;


		$this->template = new Page_Model_Template_Template($this->_view);
		$infopageModel = new Page_Model_DbTable_Informacion();
		$contenidoModel = new Page_Model_DbTable_Contenido();
		$this->_view->contenidoHeader = $contenidoModel->getById(1);

		$this->_view->contenidoafiliate = $contenidoModel->getById(29);


		$this->_view->enlacesFooter = $this->template->getContentseccion(3);

		$this->_view->isActivePortafolio = $this->isActivePortafolio();
		$this->_view->isActiveEscribenos = $this->isActiveEscribenos();
		$this->_view->isActiveInicio = $this->isActiveInicio();


		$modalModel = new Page_Model_DbTable_Publicidad();
		$this->_view->popup = $modalModel->getList("publicidad_seccion='101' AND publicidad_estado=1", "")[0];
		


		$informacion = $infopageModel->getById(1);
		$this->_view->infopage = $informacion;
		$this->getLayout()->setData("meta_description","$informacion->info_pagina_descripcion");
		$this->getLayout()->setData("meta_keywords","$informacion->info_pagina_tags");
		$this->getLayout()->setData("scripts","$informacion->info_pagina_scripts");
		$botonesModel = new Page_Model_DbTable_Publicidad();
		$this->_view->botones = $botonesModel->getList("publicidad_seccion='3' AND publicidad_estado='1'","orden ASC");

		$header = $this->_view->getRoutPHP('modules/page/Views/partials/header.php');
		$this->getLayout()->setData("header",$header);
		$enlaceModel = new Page_Model_DbTable_Enlace();
		$this->_view->enlaces = $enlaceModel->getList("","orden ASC");
	
		
		$footer = $this->_view->getRoutPHP('modules/page/Views/partials/footer.php');
		$this->getLayout()->setData("footer",$footer);
		$adicionales = $this->_view->getRoutPHP('modules/page/Views/partials/adicionales.php');
		$this->getLayout()->setData("adicionales",$adicionales);
		$this->usuario();
	}


	public function usuario(){
		$userModel = new Core_Model_DbTable_User();
		$user = $userModel->getById(Session::getInstance()->get("kt_login_id"));
		if($user->user_id == 1){
			$this->editarpage = 1;
		}
	}

	public function isActivePortafolio() {
        $activeButtons = [3, 8]; // Agrega todos los números que pueden activar el botón aquí
        return $activeButtons ;
    }

	public function isActiveEscribenos() {
        $activeButtons = [6, 7,9]; // Agrega todos los números que pueden activar el botón aquí
        return $activeButtons ;
    }
	
	public function isActiveInicio() {
        $activeButtons = [2, 11,12, 13, 14]; // Agrega todos los números que pueden activar el botón aquí
        return $activeButtons ;
    }

} 
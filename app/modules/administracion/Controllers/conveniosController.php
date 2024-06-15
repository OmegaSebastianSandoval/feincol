<?php
/**
* Controlador de Convenios que permite la  creacion, edicion  y eliminacion de los convenios del Sistema
*/
class Administracion_conveniosController extends Administracion_mainController
{

	public $botonpanel = 5;

	/**
	 * $mainModel  instancia del modelo de  base de datos convenios
	 * @var modeloContenidos
	 */
	public $mainModel;

	/**
	 * $route  url del controlador base
	 * @var string
	 */
	protected $route;

	/**
	 * $pages cantidad de registros a mostrar por pagina]
	 * @var integer
	 */
	protected $pages ;

	/**
	 * $namefilter nombre de la variable a la fual se le van a guardar los filtros
	 * @var string
	 */
	protected $namefilter;

	/**
	 * $_csrf_section  nombre de la variable general csrf  que se va a almacenar en la session
	 * @var string
	 */
	protected $_csrf_section = "administracion_convenios";

	/**
	 * $namepages nombre de la pvariable en la cual se va a guardar  el numero de seccion en la paginacion del controlador
	 * @var string
	 */
	protected $namepages;



	/**
     * Inicializa las variables principales del controlador convenios .
     *
     * @return void.
     */
	public function init()
	{
		$this->mainModel = new Administracion_Model_DbTable_Convenios();
		$this->namefilter = "parametersfilterconvenios";
		$this->route = "/administracion/convenios";
		$this->namepages ="pages_convenios";
		$this->namepageactual ="page_actual_convenios";
		$this->_view->route = $this->route;
		if(Session::getInstance()->get($this->namepages)){
			$this->pages = Session::getInstance()->get($this->namepages);
		} else {
			$this->pages = 20;
		}
		parent::init();
	}


	/**
     * Recibe la informacion y  muestra un listado de  convenios con sus respectivos filtros.
     *
     * @return void.
     */
	public function indexAction()
	{
		$title = "Aministración de convenios";
		$this->getLayout()->setTitle($title);
		$this->_view->titlesection = $title;
		$this->filters();
		$this->_view->csrf = Session::getInstance()->get('csrf')[$this->_csrf_section];
		$filters =(object)Session::getInstance()->get($this->namefilter);
        $this->_view->filters = $filters;
		$filters = $this->getFilter();
		$order = "orden ASC";
		$list = $this->mainModel->getList($filters,$order);
		$amount = $this->pages;
		$page = $this->_getSanitizedParam("page");
		if (!$page && Session::getInstance()->get($this->namepageactual)) {
		   	$page = Session::getInstance()->get($this->namepageactual);
		   	$start = ($page - 1) * $amount;
		} else if(!$page){
			$start = 0;
		   	$page=1;
			Session::getInstance()->set($this->namepageactual,$page);
		} else {
			Session::getInstance()->set($this->namepageactual,$page);
		   	$start = ($page - 1) * $amount;
		}
		$this->_view->register_number = count($list);
		$this->_view->pages = $this->pages;
		$this->_view->totalpages = ceil(count($list)/$amount);
		$this->_view->page = $page;
		$this->_view->lists = $this->mainModel->getListPages($filters,$order,$start,$amount);
		$this->_view->csrf_section = $this->_csrf_section;
		$this->_view->categoria = $this->_getSanitizedParam("categoria");
	}

	/**
     * Genera la Informacion necesaria para editar o crear un  convenio  y muestra su formulario
     *
     * @return void.
     */
	public function manageAction()
	{
		$this->_view->route = $this->route;
		$this->_csrf_section = "manage_convenios_".date("YmdHis");
		$this->_csrf->generateCode($this->_csrf_section);
		$this->_view->csrf_section = $this->_csrf_section;
		$this->_view->csrf = Session::getInstance()->get('csrf')[$this->_csrf_section];
		$this->_view->categoria = $this->_getSanitizedParam("categoria");
		$id = $this->_getSanitizedParam("id");
		if ($id > 0) {
			$content = $this->mainModel->getById($id);
			if($content->convenio_id){
				$this->_view->content = $content;
				$this->_view->routeform = $this->route."/update";
				$title = "Actualizar convenio";
				$this->getLayout()->setTitle($title);
				$this->_view->titlesection = $title;
			}else{
				$this->_view->routeform = $this->route."/insert";
				$title = "Crear convenio";
				$this->getLayout()->setTitle($title);
				$this->_view->titlesection = $title;
			}
		} else {
			$this->_view->routeform = $this->route."/insert";
			$title = "Crear convenio";
			$this->getLayout()->setTitle($title);
			$this->_view->titlesection = $title;
		}
	}

	/**
     * Inserta la informacion de un convenio  y redirecciona al listado de convenios.
     *
     * @return void.
     */
	public function insertAction(){
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_getSanitizedParam("csrf_section")] == $csrf ) {	
			$data = $this->getData();
			$uploadImage =  new Core_Model_Upload_Image();
			if($_FILES['convenio_imagen']['name'] != ''){
				$data['convenio_imagen'] = $uploadImage->upload("convenio_imagen");
			}
			$id = $this->mainModel->insert($data);
			$this->mainModel->changeOrder($id,$id);
			$data['convenio_id']= $id;
			$data['log_log'] = print_r($data,true);
			$data['log_tipo'] = 'CREAR CONVENIO';
			$logModel = new Administracion_Model_DbTable_Log();
			$logModel->insert($data);
		}
		$categoria = $this->_getSanitizedParam("convenio_categoria");
		header('Location: '.$this->route.'?categoria='.$categoria.'');
	}

	/**
     * Recibe un identificador  y Actualiza la informacion de un convenio  y redirecciona al listado de convenios.
     *
     * @return void.
     */
	public function updateAction(){
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_getSanitizedParam("csrf_section")] == $csrf ) {
			$id = $this->_getSanitizedParam("id");
			$content = $this->mainModel->getById($id);
			if ($content->convenio_id) {
				$data = $this->getData();
				$uploadImage =  new Core_Model_Upload_Image();
				if($_FILES['convenio_imagen']['name'] != ''){
					if($content->convenio_imagen){
						$uploadImage->delete($content->convenio_imagen);
					}
					$data['convenio_imagen'] = $uploadImage->upload("convenio_imagen");
				} else {
					$data['convenio_imagen'] = $content->convenio_imagen;
				}
				$this->mainModel->update($data,$id);
			}
			$data['convenio_id']=$id;
			$data['log_log'] = print_r($data,true);
			$data['log_tipo'] = 'EDITAR CONVENIO';
			$logModel = new Administracion_Model_DbTable_Log();
			$logModel->insert($data);}
		$categoria = $this->_getSanitizedParam("convenio_categoria");
		header('Location: '.$this->route.'?categoria='.$categoria.'');
	}

	/**
     * Recibe un identificador  y elimina un convenio  y redirecciona al listado de convenios.
     *
     * @return void.
     */
	public function deleteAction()
	{
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_csrf_section] == $csrf ) {
			$id =  $this->_getSanitizedParam("id");
			if (isset($id) && $id > 0) {
				$content = $this->mainModel->getById($id);
				if (isset($content)) {
					$uploadImage =  new Core_Model_Upload_Image();
					if (isset($content->convenio_imagen) && $content->convenio_imagen != '') {
						$uploadImage->delete($content->convenio_imagen);
					}
					$this->mainModel->deleteRegister($id);$data = (array)$content;
					$data['log_log'] = print_r($data,true);
					$data['log_tipo'] = 'BORRAR CONVENIO';
					$logModel = new Administracion_Model_DbTable_Log();
					$logModel->insert($data); }
			}
		}
		$categoria = $this->_getSanitizedParam("categoria");
		header('Location: '.$this->route.'?categoria='.$categoria.'');
	}

	/**
     * Recibe la informacion del formulario y la retorna en forma de array para la edicion y creacion de Convenios.
     *
     * @return array con toda la informacion recibida del formulario.
     */
	private function getData()
	{
		$data = array();
		$data['convenio_categoria'] = $this->_getSanitizedParamHtml("convenio_categoria");
		$data['convenio_estado'] = $this->_getSanitizedParam("convenio_estado");
		$data['convenio_nombre'] = $this->_getSanitizedParam("convenio_nombre");
		$data['convenio_descripcion'] = $this->_getSanitizedParamHtml("convenio_descripcion");
		$data['convenio_imagen'] = "";
		return $data;
	}
	/**
     * Genera la consulta con los filtros de este controlador.
     *
     * @return array cadena con los filtros que se van a asignar a la base de datos
     */
    protected function getFilter()
    {
    	$filtros = " 1 = 1 ";
		$categoria= $this->_getSanitizedParam("categoria");
		$filtros = $filtros." AND convenio_categoria = '$categoria' ";
        if (Session::getInstance()->get($this->namefilter)!="") {
            $filters =(object)Session::getInstance()->get($this->namefilter);
            if ($filters->convenio_nombre != '') {
                $filtros = $filtros." AND convenio_nombre LIKE '%".$filters->convenio_nombre."%'";
            }
            if ($filters->convenio_imagen != '') {
                $filtros = $filtros." AND convenio_imagen LIKE '%".$filters->convenio_imagen."%'";
            }
		}
        return $filtros;
    }

    /**
     * Recibe y asigna los filtros de este controlador
     *
     * @return void
     */
    protected function filters()
    {
        if ($this->getRequest()->isPost()== true) {
        	Session::getInstance()->set($this->namepageactual,1);
            $parramsfilter = array();
					$parramsfilter['convenio_nombre'] =  $this->_getSanitizedParam("convenio_nombre");
					$parramsfilter['convenio_imagen'] =  $this->_getSanitizedParam("convenio_imagen");Session::getInstance()->set($this->namefilter, $parramsfilter);
        }
        if ($this->_getSanitizedParam("cleanfilter") == 1) {
            Session::getInstance()->set($this->namefilter, '');
            Session::getInstance()->set($this->namepageactual,1);
        }
    }
}
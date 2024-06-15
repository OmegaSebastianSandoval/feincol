<?php 
/**
* clase que genera la insercion y edicion  de convenios en la base de datos
*/
class Administracion_Model_DbTable_Convenios extends Db_Table
{
	/**
	 * [ nombre de la tabla actual]
	 * @var string
	 */
	protected $_name = 'convenios';

	/**
	 * [ identificador de la tabla actual en la base de datos]
	 * @var string
	 */
	protected $_id = 'convenio_id';

	/**
	 * insert recibe la informacion de un convenio y la inserta en la base de datos
	 * @param  array Array array con la informacion con la cual se va a realizar la insercion en la base de datos
	 * @return integer      identificador del  registro que se inserto
	 */
	public function insert($data){
		$convenio_categoria = $data['convenio_categoria'];
		$convenio_estado = $data['convenio_estado'];
		$convenio_nombre = $data['convenio_nombre'];
		$convenio_descripcion = $data['convenio_descripcion'];
		$convenio_imagen = $data['convenio_imagen'];
		$query = "INSERT INTO convenios( convenio_categoria, convenio_estado, convenio_nombre, convenio_descripcion, convenio_imagen) VALUES ( '$convenio_categoria', '$convenio_estado', '$convenio_nombre', '$convenio_descripcion', '$convenio_imagen')";
		$res = $this->_conn->query($query);
        return mysqli_insert_id($this->_conn->getConnection());
	}

	/**
	 * update Recibe la informacion de un convenio  y actualiza la informacion en la base de datos
	 * @param  array Array Array con la informacion con la cual se va a realizar la actualizacion en la base de datos
	 * @param  integer    identificador al cual se le va a realizar la actualizacion
	 * @return void
	 */
	public function update($data,$id){
		
		$convenio_categoria = $data['convenio_categoria'];
		$convenio_estado = $data['convenio_estado'];
		$convenio_nombre = $data['convenio_nombre'];
		$convenio_descripcion = $data['convenio_descripcion'];
		$convenio_imagen = $data['convenio_imagen'];
		$query = "UPDATE convenios SET  convenio_categoria = '$convenio_categoria', convenio_estado = '$convenio_estado', convenio_nombre = '$convenio_nombre', convenio_descripcion = '$convenio_descripcion', convenio_imagen = '$convenio_imagen' WHERE convenio_id = '".$id."'";
		$res = $this->_conn->query($query);
	}
}
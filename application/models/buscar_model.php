<?php

class Buscar_model extends CI_Model{



	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	
	//OBTIENE TODAS LAS LOCALIDADES REGISTRADAS
	function localidades()	
	{
		$datos = new stdClass();
		

		$sql = "SELECT * FROM localidades ORDER BY nombre ASC";

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;

	}

	//OBTIENE TODAS LAS VIVIENDAS REGISTRADAS
	function pisos()	
	{
		$datos = new stdClass();
		

		$sql = "SELECT * FROM pisos ORDER BY id_localidad ASC";

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;

	}

	//OBTIENE TODOS LOS ESTUDIANTES REGISTRADOS
	function estudiantes(){

		$sql = "SELECT * FROM clientes
				INNER JOIN users ON clientes.dni = users.id
				WHERE users.tipo_usuario = 3";

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}

	//OBTIENE TODOS LOS ESTUDIANTES REGISTRADOS
	function estudiantes_localidad($localidad){

		//ESTO NO VALE, TIENE QUE FORMARSE UN GRUPO DE ESA LOCALIDAD O BUSCAR A LOS QUE QUIEREN ESA LOCALIDAD
		//CREO QUE DEBE INCORPORARSE ALGUNA TABLA PARA UNIR LAS LOCALIDADES PREFERENTES DE LOS ESTUDIANTES
		$sql = "SELECT * FROM clientes
				INNER JOIN users ON clientes.dni = users.id
				WHERE users.tipo_usuario = 3 AND id_localidad = ".$localidad;

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}

	//OBTIENE LAS VIVIENDAS DE UNA DETERMINADA LOCALIDAD
	function pisos_localidad($localidad){

		$sql = "SELECT * FROM pisos 
				INNER JOIN localidades 
				ON localidades.id = pisos.id_localidad
				WHERE id_localidad = ".$localidad;

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}

	//OBTIENE LAS VIVIENDAS DE UN DETERMINADO TIPO
	function pisos_tipo($tipo){
		
		$sql = "SELECT * FROM pisos WHERE id_tipo = ".$tipo;

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}

	//OBTIENE LAS VIVIENDAS DE UNA DETERMINADA LOCALIDAD Y UN DETERMINADO TIPO
	function pisos_tipo_localidad($tipo,$localidad){
		
		$sql = "SELECT * FROM pisos
				INNER JOIN localidades 
				ON localidades.id = pisos.id_localidad 
				WHERE id_tipo = ".$tipo." AND id_localidad = ".$localidad;

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}





}

?>
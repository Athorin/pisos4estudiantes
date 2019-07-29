<?php

class Viviendas_model extends CI_Model{

	var $lista;

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	function count(){

		$sql = "SELECT COUNT(*) AS total FROM pisos" ;

		$query = $this->db->query($sql);
		$result = $query->row_array();
		$query->free_result();


		return $result['total'];

	}


	function get($inicial,$final)	//OBTENER
	{

		$datos = new stdClass();
		
		$sql = "SELECT * FROM pisos ORDER BY id ASC LIMIT " . $inicial . ", " . $final;

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}
	
	function delete($id)	//BORRAR
	{

		$this->db->where('ID', $id);
		$this->db->delete('pisos');

	}

	function post($id, $id_propietario, $id_localidad, $id_tipo, $direccion)	//INSERTAR
	{
		$datos = new stdClass();
		
		$datos->ID = $id;
		$datos->ID_PROPIETARIO = $id_propietario;
		$datos->ID_LOCALIDAD = $id_localidad;
		$datos->ID_TIPO = $id_tipo;
		$datos->DIRECCION = $direccion;

		$this->db->insert('pisos', $datos);
	}

	function put($id_cambiar, $id, $id_propietario, $id_localidad, $id_tipo, $direccion)	//ACTUALIZAR
	{
		$datos = new stdClass();

		$datos->ID = $id;
		$datos->ID_PROPIETARIO = $id_propietario;
		$datos->ID_LOCALIDAD = $id_localidad;
		$datos->ID_TIPO = $id_tipo;
		$datos->DIRECCION = $direccion;

		$this->db->where('ID', $id_cambiar);
		$this->db->update('pisos', $datos);

	}




}

?>
<?php

class Localidades_model extends CI_Model{

	var $lista;

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	function count(){

		$sql = "SELECT COUNT(*) AS total FROM localidades" ;

		$query = $this->db->query($sql);
		$result = $query->row_array();
		$query->free_result();


		return $result['total'];

	}


	function get($inicial,$final)	//OBTENER
	{

		$datos = new stdClass();
		
		$sql = "SELECT * FROM localidades ORDER BY id ASC LIMIT " . $inicial . ", " . $final;

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}
	
	function delete($id)	//BORRAR
	{

		$this->db->where('ID', $id);
		$this->db->delete('localidades');

	}

	function post($cp,$localidad,$provincia)	//INSERTAR
	{
		$datos = new stdClass();
		
		$datos->ID = $cp;
		$datos->NOMBRE = $localidad;
		$datos->PROVINCIA = $provincia;

		$this->db->insert('localidades', $datos);
	}

	function put($cp,$localidad,$provincia,$id_cambiar)	//ACTUALIZAR
	{
		$datos = new stdClass();

		$datos->ID = $cp;
		$datos->NOMBRE = $localidad;
		$datos->PROVINCIA = $provincia;

		$this->db->where('ID', $id_cambiar);
		$this->db->update('localidades', $datos);

	}




}

?>
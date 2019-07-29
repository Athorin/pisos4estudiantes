<?php

class Login_model extends CI_Model{



	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	
	function isAdmin($user, $pass)	
	{
		$datos = new stdClass();
		
		$datos->USUARIO = $user;
		$datos->CONTRASEÑA = $pass;

		$sql = "SELECT * FROM clientes
				INNER JOIN users 
				ON clientes.dni = users.id
				WHERE users.tipo_usuario = 1";

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();


		return $result;

	}

	function isEstudiante($user, $pass)	
	{
		$datos = new stdClass();
		
		$datos->USUARIO = $user;
		$datos->CONTRASEÑA = $pass;

		$sql = "SELECT usuario, contraseña FROM clientes
				INNER JOIN users 
				ON clientes.dni = users.id
				WHERE users.tipo_usuario = 3";

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();


		return $result;

	}

	function isPropietario($user, $pass)	
	{
		$datos = new stdClass();
		
		$datos->USUARIO = $user;
		$datos->CONTRASEÑA = $pass;

		$sql = "SELECT usuario, contraseña FROM clientes
				INNER JOIN users 
				ON clientes.dni = users.id
				WHERE users.tipo_usuario = 2";

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();


		return $result;

	}





}

?>
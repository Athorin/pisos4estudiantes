<?php

class Registro_model extends CI_Model{

	var $lista;

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	
	function registrar($dni, $nombre, $apellido1, $apellido2 = null, $telefono, $email, $user, $pass, $opcion)	
	{
		$datos = new stdClass();
		
		$datos_cliente->DNI = $dni;
		$datos_cliente->NOMBRE = $nombre;
		$datos_cliente->APELLIDO1 = $apellido1;
		$datos_cliente->APELLIDO2 = $apellido2;
		$datos_cliente->TELEFONO = $telefono;
		$datos_cliente->EMAIL = $email;
		
		$datos_user->ID = $dni;
		$datos_user->USUARIO = $user;
		$datos_user->CONTRASEÑA = $pass;
		$datos_user->TIPO_USUARIO = $opcion;

	


		$this->db->insert('clientes', $datos_cliente);

		$this->db->insert('users', $datos_user);


	}







}

?>
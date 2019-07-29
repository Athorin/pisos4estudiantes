<?php

class Clientes_model extends CI_Model{

	var $lista;

	function __construct()
	{
		// Llamando al contructor del Modelo
		parent::__construct();
	}

	function countEstudiantes(){

		$sql = "SELECT COUNT(*) AS total FROM clientes
		INNER JOIN users ON clientes.DNI = users.ID
		WHERE users.tipo_usuario = 3" ;

		$query = $this->db->query($sql);
		$result = $query->row_array();
		$query->free_result();


		return $result['total'];

	}

	function lastEstudiantes(){

		$sql = "SELECT COUNT(*) AS total FROM clientes
		INNER JOIN users ON clientes.DNI = users.ID
		WHERE users.tipo_usuario = 3
        AND TIMESTAMPDIFF(HOUR, registrado, NOW()) < 168" ;

		$query = $this->db->query($sql);
		$result = $query->row_array();
		$query->free_result();


		return $result['total'];

	}	

	function countPropietarios(){

		$sql = "SELECT COUNT(*) AS total FROM clientes
		INNER JOIN users ON clientes.DNI = users.ID
		WHERE users.tipo_usuario = 2" ;

		$query = $this->db->query($sql);
		$result = $query->row_array();
		$query->free_result();


		return $result['total'];

	}

	function lastPropietarios(){

		$sql = "SELECT COUNT(*) AS total FROM clientes
		INNER JOIN users ON clientes.DNI = users.ID
		WHERE users.tipo_usuario = 2
        AND TIMESTAMPDIFF(HOUR, registrado, NOW()) < 168" ;

		$query = $this->db->query($sql);
		$result = $query->row_array();
		$query->free_result();


		return $result['total'];

	}	


	function getEstudiantes($inicial,$final)	//OBTENER
	{

		$datos = new stdClass();
		
		$sql = "SELECT * FROM clientes
		INNER JOIN users ON clientes.DNI = users.ID
		WHERE users.tipo_usuario = 3 
		ORDER BY registrado ASC LIMIT " . $inicial . ", " . $final;

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}

	function getPropietarios($inicial,$final)	//OBTENER
	{

		$datos = new stdClass();
		
		$sql = "SELECT * FROM clientes
		INNER JOIN users ON clientes.DNI = users.ID
		WHERE users.tipo_usuario = 2 
		ORDER BY registrado ASC LIMIT " . $inicial . ", " . $final;

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}
	
	function delete($id)	//BORRAR
	{
		$this->db->where('ID', $id);
		$this->db->delete('users');

		$this->db->where('DNI', $id);
		$this->db->delete('clientes');

	}

	function post($dni,$nombre,$apellido1,$apellido2 = null ,$telefono,$email,$user,$pass,$tipo)	//INSERTAR
	{
		$datos = new stdClass();
		
		$datos->DNI = $dni;
		$datos->NOMBRE = $nombre;
		$datos->APELLIDO1 = $apellido1;
		$datos->APELLIDO2 = $apellido2;
		$datos->TELEFONO = $telefono;
		$datos->EMAIL = $email;

		$datos2 = new stdClass();
		$datos2->ID = $dni;
		$datos2->USUARIO = $user;
		$datos2->CONTRASEÑA = $pass;
		$datos2->TIPO_USUARIO = $tipo;

		//DEBO COMPROBAR SI YA EXISTE EL USUARIO PARA NO DAR ERROR DE CLAVE UNICA
		$this->db->insert('clientes', $datos);
		$this->db->insert('users', $datos2);
	}

	function put($id_cambiar, $dni,$nombre,$apellido1,$apellido2 = null,$telefono,$email,$user,$pass,$tipo)	//ACTUALIZAR
	{
		$datos = new stdClass();
		
		$datos->DNI = $dni;
		$datos->NOMBRE = $nombre;
		$datos->APELLIDO1 = $apellido1;
		$datos->APELLIDO2 = $apellido2;
		$datos->TELEFONO = $telefono;
		$datos->EMAIL = $email;

		$datos2 = new stdClass();
		$datos2->ID = $dni;
		$datos2->USUARIO = $user;
		$datos2->CONTRASEÑA = $pass;
		$datos2->TIPO_USUARIO = $tipo;


		$this->db->where('ID', $id_cambiar);
		$this->db->delete('users');

		//ASI FUNCIONA, PERO DEBO COMPROBAR SI YA EXISTE EL USUARIO PARA QUE NO DE ERRORES
		$this->db->where('DNI', $id_cambiar);
		$this->db->update('clientes', $datos);
		$this->db->insert('users', $datos2);


	}

	function getUsuarios(){

		$datos = new stdClass();
		
		$sql = "SELECT dni, usuario FROM clientes
		INNER JOIN users ON clientes.DNI = users.ID
		ORDER BY clientes.dni ASC";

		$query = $this->db->query($sql);
		$result = $query->result_array();
		$query->free_result();

		return $result;
	}




}

?>
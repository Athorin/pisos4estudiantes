<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Su propio código de constructor
	}




	public function index()
	{
	        $user = $_POST['usuario'];
	        $pass = $_POST['password'];

	        $dni = $_POST['dni'];
	        $nombre = $_POST['nombre'];
			$apellido1 = $_POST['apellido1'];
			$apellido2 = $_POST['apellido2'];
			$email = $_POST['email'];
			$telefono = $_POST['telefono'];

			$opcion = $_POST['op'];


			$this->load->model('registro_model');

   			$this->registro_model->registrar($dni, $nombre, $apellido1, $apellido2, $telefono, $email, $user, $pass, $opcion);
   		

   			redirect('http://www.p4e.hol.es/registrado', 'location');
   			
			
	}


	

}


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Su propio código de constructor
	}




	public function index()
	{
	    session_name ('Pisos4Estudiantes');
	    //Crear sesión
		session_start();
		//Vaciar sesión
		$_SESSION = array();
		//Destruir Sesión
		session_destroy();
		//Redireccionar a login.php
		
		redirect('http://www.p4e.hol.es/', 'location');
			
	}


	

}


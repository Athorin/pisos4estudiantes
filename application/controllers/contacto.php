<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Su propio código de constructor
	}




	public function index()
	{

	        $nombre = $_POST['nombre'];
			$apellido1 = $_POST['apellido1'];
			$apellido2 = $_POST['apellido2'];
			$email = $_POST['email'];
			$comentario = $_POST['comentario'];


			$this->load->library('email');

			$configGmail = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => 465,
				'smtp_user' => 'alexgildaw@gmail.com',
				'smtp_pass' => 'franazorin',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n"
			);    

			$this->email->initialize($configGmail);

			$this->email->to('alexgildaw@gmail.com');
			$this->email->from($email);
			$this->email->subject('Contacto: '.$nombre.' '.$apellido1);
			$this->email->message($comentario);
			$this->email->send();


   			redirect('http://www.p4e.hol.es/', 'location');
   			
			
	}


	

}


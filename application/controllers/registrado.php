<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrado extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Su propio código de constructor
	}




	public function index()
	{

		$this->load->view('header');
		$this->load->view('registrado');
		$this->load->view('footer');
	}

	

}


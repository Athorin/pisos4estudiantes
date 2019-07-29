<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Su propio código de constructor
	}

	public function index()
	{
	        //Añadir funcionalidad
			//$datos = $this->load->model('search_model');
	        $this->load->view('header');
	        $this->load->view('search');
	        $this->load->view('footer');
	}

	

}


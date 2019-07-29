<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Su propio código de constructor
	}

	public function index()
	{
	    $this->load->view('header');
	    $this->load->view('index');
	    $this->load->view('footer');
	}

	public function buscar()
	{  
	    //LLAMAR A MODEL DE LOCALIDADES
	    $this->load->model('buscar_model');
		$data_view['localidades'] = $this->buscar_model->localidades();

		
	    $this->load->view('header');
	    $this->load->view('buscar',$data_view);
	   	$this->load->view('anuncio');
	    $this->load->view('footer');
	}



	public function contacto()
	{  
	    $this->load->view('header');
	    $this->load->view('contacto');
		$this->load->view('footer');
	}
	
	public function registrar()
	{  
	    $this->load->view('header');
	    $this->load->view('registro');
	    $this->load->view('footer');
	}

	public function informacion()
	{  
	    $this->load->view('header');
	    $this->load->view('informacion');
	    $this->load->view('footer');
	}

	public function servicios()
	{  
	    $this->load->view('header');
	    $this->load->view('servicios');
	    $this->load->view('footer');
	}
	


	

}


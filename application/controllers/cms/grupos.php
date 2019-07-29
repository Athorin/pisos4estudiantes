<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grupos extends CI_Controller {


	public function index()
	{
		session_name ('Pisos4Estudiantes');
		session_start();
	

		//EN CONSTRUCCION (DEBO PENSAR COMO FORMAR LOS GRUPOS)

		/*$this->load->model('cms/localidades_model');

	
		//PAGINACION
		$data_view['total'] = $this->localidades_model->count();
		$data_view['filas_pagina'] = 10;
		$data_view['paginas_totales'] = ceil($data_view['total'] / $data_view['filas_pagina']);


			//CALCULO DE LA PAGINACION
			$data_view['pagina_actual'] = 0;

			if(isset($_GET['p']))	$data_view['pagina_actual'] = (int)$_GET['p'];

			
			if( $data_view['pagina_actual'] < 1)   	$data_view['pagina_actual'] = 1;

			else if( $data_view['pagina_actual'] > $data_view['paginas_totales'])	
				$data_view['pagina_actual'] = $data_view['paginas_totales'];




			$inicial = ($data_view['pagina_actual'] - 1) * $data_view['filas_pagina'];

		//OBTENCION DE DATOS
		$data_view['localidades'] = $this->localidades_model->get($inicial,$data_view['filas_pagina']);

		*/

		if($_SESSION['tipo'] == "admin"){
			
			$this->load->view('/cms/admin/header');
			$this->load->view('/cms/admin/grupos');
			$this->load->view('footer');

		}else{

			$this->load->view('/cms/estudiante/header');
			$this->load->view('/cms/estudiante/grupos');
			$this->load->view('footer');

		}

	}

	public function insertar(){


	}

	public function actualizar(){


	}

	public function borrar(){
		

	}

}

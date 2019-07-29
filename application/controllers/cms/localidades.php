<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Localidades extends CI_Controller {


	public function index()
	{
		session_name ('Pisos4Estudiantes');
		session_start();
	
		$this->load->model('cms/localidades_model');

	
		//PAGINACION
		$data_view['total'] = $this->localidades_model->count();
		$data_view['filas_pagina'] = 10;
		$data_view['paginas_totales'] = ceil($data_view['total'] / $data_view['filas_pagina']);


			//CALCULO DE LA PAGINACION
			$data_view['pagina_actual'] = 0;

			if(isset($_GET['p']))	$data_view['pagina_actual'] = (int)$_GET['p'];

			if( $data_view['paginas_totales'] < 1)   $data_view['paginas_totales'] = 1;
			
			if( $data_view['pagina_actual'] < 1)   	$data_view['pagina_actual'] = 1;

			else if( $data_view['pagina_actual'] > $data_view['paginas_totales'])	
				$data_view['pagina_actual'] = $data_view['paginas_totales'];




			$inicial = ($data_view['pagina_actual'] - 1) * $data_view['filas_pagina'];

		//OBTENCION DE DATOS
		$data_view['localidades'] = $this->localidades_model->get($inicial,$data_view['filas_pagina']);




		$this->load->view('/cms/admin/header');
		$this->load->view('/cms/admin/localidades', $data_view);
		$this->load->view('footer');

	}

	public function insertar(){

		$cp = $_POST['cp'];
		$localidad = $_POST['localidad'];
		$provincia = $_POST['provincia'];


		$this->load->model('cms/localidades_model');
   		$this->localidades_model->post($cp,$localidad,$provincia);

		redirect('http://www.p4e.hol.es/cms/localidades','refresh');


	}

	public function actualizar(){


		//DEBO OBTENER LA ID DEL QUE QUIERO MODIFICAR
		//Y QUE ME CARGUE LOS DATOS EN EL FORMULARIO PREVIAMENTE PARA MODIFICARLO
		$cp = $_POST['cp'];
		$localidad = $_POST['localidad'];
		$provincia = $_POST['provincia'];
		$id_cambiar = $_POST['codLocal'];


		$this->load->model('cms/localidades_model');
   		$this->localidades_model->put($cp,$localidad,$provincia,$id_cambiar);


		redirect('http://www.p4e.hol.es/cms/localidades','refresh');
	}

	public function borrar(){
		
		//DEBO PASAR LA ID CON EL BOTON DE BORRAR
		$id = $_GET['id'];
		$pagina = $_GET['p'];

		$this->load->model('cms/localidades_model');
   		$this->localidades_model->delete($id);

		redirect('http://www.p4e.hol.es/cms/localidades?p='.$pagina,'refresh');
	}

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viviendas extends CI_Controller {


	public function index()
	{
		session_name ('Pisos4Estudiantes');
		session_start();
	
		$this->load->model('cms/viviendas_model');

	
		//PAGINACION
		$data_view['total'] = $this->viviendas_model->count();
		$data_view['filas_pagina'] = 10;
		$data_view['paginas_totales'] = ceil($data_view['total'] / $data_view['filas_pagina']);


			//CALCULO DE LA PAGINACION
			$data_view['pagina_actual'] = 0;

			if(isset($_GET['p']))	$data_view['pagina_actual'] = (int)$_GET['p'];

			if($data_view['paginas_totales'] < 1)   $data_view['paginas_totales'] = 1;

			if($data_view['pagina_actual'] < 1)		$data_view['pagina_actual'] = 1;

			else if( $data_view['pagina_actual'] > $data_view['paginas_totales'])	$data_view['pagina_actual'] = $data_view['paginas_totales'];



			$inicial = ($data_view['pagina_actual'] - 1) * $data_view['filas_pagina'];

		//OBTENCION DE DATOS
		$data_view['viviendas'] = $this->viviendas_model->get($inicial,$data_view['filas_pagina']);


		//EL ESTUDIANTE SOLO PUEDE VER DATOS, NO MODIFICAR

		//EL PROPIETARIO SOLO DEBE VER LAS VIVIENDAS QUE SEAN SUYAS

		if($_SESSION['tipo'] == "admin"){
			$this->load->view('/cms/admin/header');
			$this->load->view('/cms/admin/viviendas', $data_view);
			$this->load->view('footer');

		}else{
			
			if($_SESSION['tipo'] == 'estudiante'){
				
				$this->load->view('/cms/estudiante/header');
				$this->load->view('/cms/estudiante/viviendas', $data_view);
				$this->load->view('footer');

			}else if($_SESSION['tipo'] == 'propietario'){
					
				$this->load->view('/cms/propietario/header');
				$this->load->view('/cms/propietario/viviendas', $data_view);
				$this->load->view('footer');
			}
		}

	}

	public function insertar(){

		$id = $_POST['id'];
		$id_propietario = $_POST['id_propietario'];
		$id_localidad = $_POST['id_localidad'];
		$id_tipo = $_POST['id_tipo'];
		$direccion = $_POST['direccion'];

		$this->load->model('cms/viviendas_model');
   		$this->viviendas_model->post($id, $id_propietario, $id_localidad, $id_tipo, $direccion);

		redirect('http://www.p4e.hol.es/cms/viviendas','refresh');


	}

	public function actualizar(){

		$id_cambiar = $_POST['id_cambiar'];
		$id = $_POST['id'];
		$id_propietario = $_POST['id_propietario'];
		$id_localidad = $_POST['id_localidad'];
		$id_tipo = $_POST['id_tipo'];
		$direccion = $_POST['direccion'];

		$this->load->model('cms/viviendas_model');
   		$this->viviendas_model->post($id_cambiar, $id, $id_propietario, $id_localidad, $id_tipo, $direccion);

		redirect('http://www.p4e.hol.es/cms/viviendas','refresh');
	}

	public function borrar(){
		
		$id = $_GET['id'];
		$pagina = $_GET['p'];

		$this->load->model('cms/viviendas_model');
   		$this->viviendas_model->delete($id);

		redirect('http://www.p4e.hol.es/cms/viviendas?p='.$pagina,'refresh');
	}

}

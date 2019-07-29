<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index()
	{
		session_name ('Pisos4Estudiantes');
		session_start();
	
		
		//Obtenemos el Total de los datos para mostrarlo como alerta en el panel de gestion
		$this->load->model('cms/clientes_model');
		$data_view['propietarios'] = $this->clientes_model->countPropietarios();
		$data_view['estudiantes'] = $this->clientes_model->countEstudiantes();

		$data_view['last_propietarios'] = $this->clientes_model->lastPropietarios();
		$data_view['last_estudiantes'] = $this->clientes_model->lastEstudiantes();

		$this->load->model('cms/viviendas_model');
		$data_view['viviendas'] = $this->viviendas_model->count();



		if(!$_SESSION['user']){

			redirect('http://127.0.0.1/proyecto', 'location');
		}else{

			if($_SESSION['user'] == 'admin'){
				$this->load->view('/cms/admin/header');
				$this->load->view('/cms/admin/main',$data_view);
				$this->load->view('footer');

			}else{

				if($_SESSION['tipo'] == 'estudiante'){
					$this->load->view('/cms/estudiante/header');
					$this->load->view('/cms/estudiante/main');
					$this->load->view('footer');

				}else if($_SESSION['tipo'] == 'propietario'){
					$this->load->view('/cms/propietario/header');
					$this->load->view('/cms/propietario/main');
					$this->load->view('footer');
				}
			}
		}

		/*Formato para elegir opciones con un IF rapido para HTML
		<?=$search_id == $value['id'] ? 'selected':''?>*/
	}

	public function perfil(){
		
		session_name ('Pisos4Estudiantes');
		session_start();

		if($_SESSION['tipo'] == "admin"){
			
			$this->load->view('/cms/admin/header');
			$this->load->view('/cms/admin/perfil');
			$this->load->view('footer');

		}else{
				
			if($_SESSION['tipo'] == 'estudiante'){
				
				$this->load->view('/cms/estudiante/header');
				$this->load->view('/cms/estudiante/perfil');
				$this->load->view('footer');

			}else if($_SESSION['tipo'] == 'propietario'){
					
				$this->load->view('/cms/propietario/header');
				$this->load->view('/cms/propietario/perfil');
				$this->load->view('footer');
			}
		}

	}
}

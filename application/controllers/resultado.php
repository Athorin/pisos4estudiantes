<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resultado extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Su propio código de constructor
	}

	public function index()
	{

			//AÑADIR LLAMADAS AL MODELO DEPENDIENDO DE LA OPCION
			$localidad = $_POST['donde_busca'];
			$opcion = $_POST['que_busca'];

			//SQL CON TODOS LOS ALOJAMIENTOS O PERSONAS DE ESA LOCALIDAD
		    $this->load->model('buscar_model');
			
			//O BIEN SQL OBTENIENDO LOS RESULTADOS DELA OPCION ELEGIDA PARA LA LOCALIDAD ELEGIDA

			switch ($opcion) {

				case '0':
					if($localidad!=0)
						$data_view['viviendas'] = $this->buscar_model->pisos_localidad($localidad);
					else
						$data_view['viviendas'] = $this->buscar_model->pisos();
					break;

				case '3':
					if($localidad!=0)
						$data_view['estudiantes'] = $this->buscar_model->estudiantes_localidad($localidad);
					else
						$data_view['estudiantes'] = $this->buscar_model->estudiantes();
					break;

				default:				
					if($localidad!=0)
						$data_view['viviendas'] = $this->buscar_model->pisos_tipo_localidad($opcion, $localidad);
					else
						$data_view['viviendas'] = $this->buscar_model->pisos_tipo($opcion);
					break;
			}

		    $this->load->model('buscar_model');
			$data_view2['localidades'] = $this->buscar_model->localidades();
		

			$this->load->view('header');
			$this->load->view('buscar',$data_view2);
			$this->load->view('resultado',$data_view);
			$this->load->view('footer');
	}

	

}


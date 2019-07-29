<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiantes extends CI_Controller {


	public function index()
	{
		session_name ('Pisos4Estudiantes');
		session_start();
	
		$this->load->model('cms/clientes_model');

	
		//PAGINACION
		$data_view['total'] = $this->clientes_model->countEstudiantes();
		$data_view['filas_pagina'] = 10;
		$data_view['paginas_totales'] = ceil($data_view['total'] / $data_view['filas_pagina']);


			//CALCULO DE LA PAGINACION
			$data_view['pagina_actual'] = 0;

			if(isset($_GET['p']))	$data_view['pagina_actual'] = (int)$_GET['p'];

			if($data_view['paginas_totales'] < 1)   $data_view['paginas_totales'] = 1;

			if($data_view['pagina_actual'] < 1)   	$data_view['pagina_actual'] = 1;

			else if( $data_view['pagina_actual'] > $data_view['paginas_totales'])	
				$data_view['pagina_actual'] = $data_view['paginas_totales'];




			$inicial = ($data_view['pagina_actual'] - 1) * $data_view['filas_pagina'];

		//OBTENCION DE DATOS
		$data_view['estudiantes'] = $this->clientes_model->getEstudiantes($inicial,$data_view['filas_pagina']);




		$this->load->view('/cms/admin/header');
		$this->load->view('/cms/admin/estudiantes', $data_view);
		$this->load->view('footer');

	}

	public function insertar(){

		$existe = false;

		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];

		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$tipo = 3;


		$this->load->model('cms/clientes_model');

   		$usuarios = $this->clientes_model->getUsuarios();

   			//COMPRUEBA SI EL DNI O EL USUARIO YA EXISTE, PORQUE DEBEN SER UNICOS
	   		foreach ($usuarios as $key => $usuario) {
	   			if($usuario['usuario'] == $user || $usuario['dni'] == $dni) $existe = true;
	   		}

	   	if(!$existe){
   			$this->clientes_model->post($dni,$nombre,$apellido1,$apellido2,$telefono,$email,$user,$pass,$tipo);
   			redirect('http://www.p4e.hol.es/cms/estudiantes','refresh');
   		}else{
   			//DEBO HACER QUE SALTE EL FORMULARIO DE NUEVO (debere usar jQuery)
   			//O PUEDO LANZAR UNA VISTA QUE ME DIGA QUE YA EXISTE, CARGANDO TAMBIEN LAS OTRAS VISTAS
   			redirect('http://www.p4e.hol.es/cms/estudiantes','refresh');
   		}

		


	}

	public function actualizar(){


		//DEBO OBTENER LA ID DEL QUE QUIERO MODIFICAR
		//Y QUE ME CARGUE LOS DATOS EN EL FORMULARIO PREVIAMENTE PARA MODIFICARLO
		$existe = false;
		$id_cambiar = $_POST['codEstudiante'];

		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];

		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$tipo = 3;

		$this->load->model('cms/clientes_model');
   		$usuarios = $this->clientes_model->getUsuarios();
	   		
	   	//REVISTAR ESTO, AL ACTUALIZAR EL DNI Y EL USUARIO PUEDEN SER EL MISMO, ASI QUE NO DEBERIA DAR FALLO EN ESE CASO
	   		foreach ($usuarios as $key => $usuario) {
	   			if($usuario['usuario'] == $user) $existe = true;
	   		}


	   	if(!$existe)
   			$this->clientes_model->put($id_cambiar, $dni,$nombre,$apellido1,$apellido2,$telefono,$email,$user,$pass,$tipo);
   		else
   			echo existe;

		redirect('http://www.p4e.hol.es/cms/estudiantes','refresh');
	}

	public function borrar(){
		
		//DEBO PASAR LA ID CON EL BOTON DE BORRAR

		//IDEA//
		//EN VEZ DE BORRAR, PASARLOS A UN HISTORY EN LA BD
		$id = $_GET['id'];
		$pagina = $_GET['p'];

		$this->load->model('cms/clientes_model');
   		$this->clientes_model->delete($id);

		redirect('http://www.p4e.hol.es/cms/estudiantes?p='.$pagina,'refresh');
	}

}

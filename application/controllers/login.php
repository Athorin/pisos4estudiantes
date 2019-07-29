<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Su propio código de constructor
	}




	public function index()
	{
	        $user = $_POST['user'];
	        $pass = $_POST['pass'];


			$this->load->model('login_model');


			$result = $this->login_model->isAdmin($user, $pass);


			$admin = false;
			$estudiante = false;
			$propietario = false;

			foreach ($result as $key => $value) {
				if($value['USUARIO'] == $user && $value['CONTRASEÑA'] == $pass)
					$admin = true;
			}
		
			if($admin){
				session_name ('Pisos4Estudiantes');
				session_start(); 

				$_SESSION['user'] = $user;
				$_SESSION['tipo'] = "admin";  
				redirect('http://www.p4e.hol.es/cms/profile', 'location');

			}else{
				

				$result = $this->login_model->isEstudiante($user, $pass);

				foreach ($result as $key => $value) {
					
					if($value['usuario'] == $user && $value['contraseña'] == $pass){
						session_name ('Pisos4Estudiantes');
						session_start(); 

						$estudiante = true;
						$_SESSION['user'] = $user; 
						$_SESSION['tipo'] = "estudiante"; 
						redirect('http://www.p4e.hol.es/cms/profile', 'location');
					}

				}

				if(!$estudiante){

					$result = $this->login_model->isPropietario($user, $pass);

					foreach ($result as $key => $value) {
						if($value['usuario'] == $user && $value['contraseña'] == $pass){
							session_name ('Pisos4Estudiantes');
							session_start(); 

							$propietario = true;
							$_SESSION['user'] = $user;
							$_SESSION['tipo'] = "propietario";
							redirect('http://www.p4e.hol.es/cms/profile', 'location');
						}
					}
				}
			}

			if(!$estudiante && !$propietario && !$admin){
				redirect('http://www.p4e.hol.es/', 'location');
			}

   			
			
	}


}


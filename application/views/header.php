<!DOCTYPE html>
<html lang='es'>

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

	<link rel="shortcut icon" href="<?php echo base_url("img/favicon.ico"); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url("img/favicon.ico"); ?>" type="image/x-icon">

	
    <!-- BOOTSTRAP -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<!-- COOKIES CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/cookies.css"); ?>" />
	<!-- ADAPTACION PANTALLA DEL NAVEGADOR PARA MOVILES -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<title>Pisos 4 Estudiantes</title>

</head>



<body>

	<header class="text-center ">
		
		<div id="titulo">
			<a href="http://www.p4e.hol.es/"><img src="http://www.p4e.hol.es/img/logo.png"></a>
		</div>

		<nav class="navbar-inverse navbar-default negro">
		  <div class="container-fluid">
		  
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed navbar-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="http://www.p4e.hol.es/">Pisos 4 Estudiantes</a>
		    </div>


		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		        <li id="inicio" class="<?php if(strcmp($_SERVER['REQUEST_URI'],'/') == 0 || strcmp($_SERVER['REQUEST_URI'],'/index.php') == 0){echo 'active';}?>" > 
		        	<a href="http://www.p4e.hol.es/">Inicio </a></li>
		        <li id="buscar" class="<?php if(strncmp($_SERVER['REQUEST_URI'],'/menu/buscar',12) == 0 || strcmp($_SERVER['REQUEST_URI'],'/resultado') == 0){echo 'active';}?>">
		        	<a href="http://www.p4e.hol.es/menu/buscar">Buscar</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Más</a>
		          <ul class="dropdown-menu" role="menu">
		            <li class="<?php if(strcmp($_SERVER['REQUEST_URI'],'/menu/informacion') == 0 ){echo 'active';}?>" id="informacion">
		            	<a href="http://www.p4e.hol.es/menu/informacion">Informacion</a></li>
		            <li class="<?php if(strcmp($_SERVER['REQUEST_URI'],'/menu/servicios') == 0 ){echo 'active';}?>" id="servicios">
		            	<a href="http://www.p4e.hol.es/menu/servicios">Servicios</a></li>
		            <li class="divider"></li>
		            <li class="<?php if(strcmp($_SERVER['REQUEST_URI'],'/menu/contacto') == 0 ){echo 'active';}?>" id="contacto">
		            	<a href="http://www.p4e.hol.es/menu/contacto">Contacto</a></li>
		          </ul>
		        </li>

			<!-- ACCESO SI NO HAY LOGIN o PANEL DE CONTROL SI HAY SESION ACTIVA -->
			<?php session_name('Pisos4Estudiantes');  session_start(); if(!isset($_SESSION['user'])) : ?>
		       <li class="dropdown">
		          	<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">Acceder</a>
			          			         
			          <ul class="dropdown-menu form-group" role="menu">

				        <li><button type="button" class="form-control btn btn-info " data-toggle="modal" data-target="#acceso">Login</button></li>
				        <li class="divider"></li>

			         </ul>
			      	
		        </li> 
		    <?php else : ?>
		   		<li class="dropdown">
		          	<a href="http://www.p4e.hol.es/cms/profile">Panel de Gestion</a>
		        </li>
		    <?php endif; ?>

		    </ul>





				<!-- Modal Login -->
				<div class="modal fade" id="acceso" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="loginLabel">Iniciar Sesion</h4>
				      </div>
				      <div class="modal-body row">
				      	
				      	<form action="http://www.p4e.hol.es/login" method="post">

				      		<div class="form-group col-sm-2"></div>
				      		<div class="form-group col-sm-4">
							    <input type="text" class="form-control text-center" id="user" name="user" placeholder="Usuario" required>
							</div>
				        	<div class="form-group col-sm-4">
						    	<input type="password" class="form-control text-center" id="pass" name="pass" placeholder="Contraseña" required>
						  	</div>
						  	
						  	<div class="row">
						  		<div class="form-group col-sm-4"></div>
						  		<div class="form-group col-sm-2">
						  			<button type="submit" class="form-control btn btn-success">Acceder</button>
						  		</div>
						  		<div class="form-group col-sm-2">
						  			<button type="reset" class="form-control btn btn-warning">Reset</button>
						  		</div>
						  		<div class="form-group col-sm-4"></div>
						  	</div>

						 </form>

				      </div>
				    </div>
				  </div>
				</div>



		      	<form class="navbar-form navbar-right" role="search"  method="post" action="http://www.p4e.hol.es/search">
		        	<div class="form-group">
		        		<a href="http://www.p4e.hol.es/menu/registrar"><button type="button" class="btn btn-info anunciar">Registrate Gratis</button></a>
		          		<input type="text" class="buscar form-control" placeholder="Buscar...">
		          		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		        	</div>
		        	
		      	</form>

		    </div>
		  </div>
		</nav>

	</header> 


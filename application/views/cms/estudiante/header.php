<!DOCTYPE html>
<html lang='es'>

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


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

	<header class="text-center">
		


	<nav class="navbar-inverse navbar-default negro">
		  <div class="container-fluid">
		  
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed navbar-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand">Estudiante</a>
		    </div>


		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		        <li id="inicio" > 
		        	<a href="http://www.p4e.hol.es/">Inicio </a></li>
		        <li id="panel" class="<?php if(strcmp ($_SERVER['REQUEST_URI'],'/cms/profile') == 0 ){echo 'active';}?>">
		        	<a href="http://www.p4e.hol.es/cms/profile">Panel</a></li>
		      	<li id="viviendas" class="<?php if(strncmp ($_SERVER['REQUEST_URI'],'/cms/viviendas',12) == 0 ){echo 'active';}?>">
		        	<a href="http://www.p4e.hol.es/cms/viviendas">Viviendas</a></li>
		        <li id="grupos" class="<?php if(strncmp ($_SERVER['REQUEST_URI'],'/cms/grupos',9) == 0 ){echo 'active';}?>">
		        	<a href="http://www.p4e.hol.es/cms/grupos">Grupos</a></li>		         
		    </ul>
		    




		      	<div class="navbar-form navbar-right">
		      		<div class="form-group perfil-cont"><a class="perfil" href="http://www.p4e.hol.es/cms/profile/perfil"> <?php echo $_SESSION['user']; ?></a></div>
		        	<div class="form-group">
		        		<a href="http://www.p4e.hol.es/logout"><button type="button" class="btn btn-info anunciar">Logout</button></a>
		        	</div>
		        </div>


			</div>
		</div>
	</nav>

	</header> 


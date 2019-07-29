
	<main class="contenido">


		<div class="jumbotron">
		  	
		  	<div class="container">
			<div class="row">
						

					<div class="col-sm-6">
						<div class="borde ficha">
						<h3 class="text-center">Propietario</h3>
						<h4 class="text-center">Accede a tu área privada para:</h4><br>
						<ul>
							<li>Publicar anuncios de viviendas de alquiler
							<li>Gestionar tus anuncios y consultar estadísticas
							<li>Contactar con nuestro servicio de atención al anunciante
							<li>Acceder a consejos y recomendaciones para alquilar más rápidamente
						</ul>
						<br>
						</div>
						<br><br>
						<div class="col-sm-4"></div>
				        <div class="col-sm-4"><button type="button" class="form-control btn btn-info " data-toggle="modal" data-target="#registroPropietario">Registrarse</button></div>
				    </div>
		
				    <div class="col-sm-6">
				    	<div class="borde ficha">
				        <h3 class="text-center">Estudiante</h3>
						<h4 class="text-center">Accede a tu área privada para:</h4><br>
						<ul>
							<li>Ponerte a la espera de formar un Grupo
							<li>Gestionar tus preferencias de Grupo
							<li>Buscar compañero individual
							<li>Contactar con nuestro servicio de atención al Estudiante
						</ul>
						<br>
						</div>
						<br><br>
				        <div class="col-sm-4"></div><div class="col-sm-4">
				        	<button type="button" class="form-control btn btn-info " data-toggle="modal" data-target="#registroEstudiante">Registrarse</button></div>
				        
				    	</div>
			        </div>





				<div class="modal fade" id="registroPropietario" tabindex="-1" role="dialog" aria-labelledby="regPropLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="regPropLabel">Registrarse como Propietario</h4>
				      </div>
				      <div class="modal-body row">
				      	
							<form class="form-horizontal" action="http://www.p4e.hol.es/registro" method="post">
								
								<br>

								<div class="form-group">
								    <label for="usuario" class="col-sm-4 control-label">Usuario *</label>
								    <div class="col-sm-6">
								    	<input type="text" class="form-control" id="usuario" name="usuario" required>
								    </div>
							  	</div>

							  	<div class="form-group">
								    <label for="contraseña" class="col-sm-4 control-label">Contraseña *</label>
								    <div class="col-sm-6">
								    	<input type="password" class="form-control" id="password" name="password" pattern=".{6,15}" title="Entre 6 y 15 caracteres" required>
								    </div>
							  	</div>

							  	<br>

							  	<div class="form-group">
								    <label for="dni" class="col-sm-4 control-label">DNI *</label>
								    <div class="col-sm-6">
								    	<input type="text" class="form-control" id="dni" name="dni" pattern="[0-9]{8}[A-Z|a-z]{1}" title="El DNI tiene un formato 12345678X" maxlength="9" required>
								    </div>
							  	</div>

								<div class="form-group">
								    <label for="nombre" class="col-sm-4 control-label">Nombre *</label>
								    <div class="col-sm-6">
								    	<input type="text" class="form-control" id="nombre" name="nombre" required>
								    </div>
							  	</div>
							  	<div class="form-group">
								    <label for="apellido1" class="col-sm-4 control-label">Apellidos **</label>
								    <div class="col-sm-3">
								    	<input type="text" class="form-control" id="apellido1" name="apellido1" required>
								    </div>
								    <div class="col-sm-3">
								    	<input type="text" class="form-control" id="apellido2" name="apellido2">
								    </div>
							  	</div>



							  	<div class="form-group">
								    <label for="email" class="col-sm-4 control-label">E-Mail *</label>
								    <div class="col-sm-6">
								    	<input type="email" class="form-control" id="email" name="email" required>
								    </div>
							  	</div>

							  	<div class="form-group">
								    <label for="telefono" class="col-sm-4 control-label">Telefono</label>
								    <div class="col-sm-4">
								    	<input type="number" class="form-control" id="telefono" name="telefono" required>
								    </div>
							  	</div>

							  	<br><input type="hidden" id="op" name="op" value="2">

							  	<div class="form-group">
								    <label for="comentario" class="col-sm-4 control-label"></label>
								    <div class="col-sm-2">
								    	<button type="submit" class="form-control btn-success" id="enviar" >Enviar</button>
								    </div>
								    <div class="col-sm-2">
								    	<button type="reset" class="form-control btn-danger" id="borrar" >Borrar</button>
								    </div>
							  	</div>

							</form>
						

				      </div>
				    </div>
				  </div>
				</div>




				
			<div class="modal fade" id="registroEstudiante" tabindex="-1" role="dialog" aria-labelledby="regEstLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="regEstLabel">Registrarse como Estudiante</h4>
				      </div>
				      <div class="modal-body row">
				      	
							<form class="form-horizontal" action="http://www.p4e.hol.es/registro" method="post">
								
								<br>

								<div class="form-group">
								    <label for="usuario" class="col-sm-4 control-label">Usuario *</label>
								    <div class="col-sm-6">
								    	<input type="text" class="form-control" id="usuario" name="usuario" required>
								    </div>
							  	</div>

							  	<div class="form-group">
								    <label for="contraseña" class="col-sm-4 control-label">Contraseña *</label>
								    <div class="col-sm-6">
								    	<input type="password" class="form-control" id="password" name="password" pattern=".{6,15}" title="Entre 6 y 15 caracteres" required>
								    </div>
							  	</div>

							  	<br>


							  	<div class="form-group">
								    <label for="dni" class="col-sm-4 control-label">DNI *</label>
								    <div class="col-sm-6">
								    	<input type="text" class="form-control" id="dni" name="dni" pattern=".{9,9}" title="El DNI debe tener 9 Caracteres" maxlength="9" required>
								    </div>
							  	</div>

								<div class="form-group">
								    <label for="nombre" class="col-sm-4 control-label">Nombre *</label>
								    <div class="col-sm-6">
								    	<input type="text" class="form-control" id="nombre" name="nombre" required>
								    </div>
							  	</div>
							  	<div class="form-group">
								    <label for="apellido1" class="col-sm-4 control-label">Apellidos **</label>
								    <div class="col-sm-3">
								    	<input type="text" class="form-control" id="apellido1" name="apellido1" required>
								    </div>
								    <div class="col-sm-3">
								    	<input type="text" class="form-control" id="apellido2" name="apellido2">
								    </div>
							  	</div>



							  	<div class="form-group">
								    <label for="email" class="col-sm-4 control-label">E-Mail *</label>
								    <div class="col-sm-6">
								    	<input type="email" class="form-control" id="email" name="email" required>
								    </div>
							  	</div>

							  	<div class="form-group">
								    <label for="telefono" class="col-sm-4 control-label">Telefono *</label>
								    <div class="col-sm-4">
								    	<input type="number" class="form-control" id="telefono" name="telefono" required>
								    </div>
							  	</div>

							  	<br><input type="hidden" id="op" name="op" value="3">

							  	<div class="form-group">
								    <label for="comentario" class="col-sm-4 control-label"></label>
								    <div class="col-sm-2">
								    	<button type="submit" class="form-control btn-success" id="enviar" >Enviar</button>
								    </div>
								    <div class="col-sm-2">
								    	<button type="reset" class="form-control btn-danger" id="borrar" >Borrar</button>
								    </div>
							  	</div>

							</form>
						

				      </div>
				    </div>
				  </div>
				</div>









			</div>
		</div>

	</div>

	


	</main>


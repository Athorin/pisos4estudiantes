

<main class="contenido">


		<div class="jumbotron">
		  	<div class="container">

		  		
		  		<?php if(isset($estudiantes)): ?>
		  		<table class="table table-striped table-responsive margin-tabla text-center row letra-fina">
		  			
		  			<tr class="info">
		  				<th class="text-center col-sm-1">DNI</th>
		  				<th class="text-center col-sm-2">NOMBRE</th>
		  				<th class="text-center col-sm-3">APELLIDOS</th>
		  				<th class="text-center col-sm-1">TELEFONO</th>
		  				<th class="text-center col-sm-2">E-MAIL</th>
		  				<th class="text-center col-sm-2">REGISTRO</th>
		  				<th class="col-sm-1"><button type="button" class="form-control btn btn-success " data-toggle="modal" data-target="#insertar">
		  					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Añadir
		  				</button></th>
		  			</tr>
			  		
			  		<?php	foreach ($estudiantes as $key => $value): ?>
			  		
			  		<tr>
			  			<td> <?php echo $value['DNI']; ?> </td> 
			  			<td> <?php echo $value['NOMBRE']; ?> </td> 
			  			<td> <?php echo $value['APELLIDO1']; ?> <?php echo $value['APELLIDO2']; ?></td>
			  			<td> <?php echo $value['TELEFONO']; ?> </td> 
			  			<td> <?php echo $value['EMAIL']; ?> </td>
			  			<td> <?php echo $value['REGISTRADO']; ?> </td>  
			  			<td class="text-center">
			  				<table><tr><td>
			  				<button type="button" class="form-control btn btn-info " data-toggle="modal" data-target="#actualizar" data-book-id="<?php echo $value['DNI']; ?>">
			  					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
			  				</button></td><td>&nbsp;</td>
			  				<td>
			  				<a href="http://www.p4e.hol.es/cms/estudiantes/borrar?id=<?php echo $value['ID']; ?>&p=<?php echo $pagina_actual; ?>"> <button type="button" class="form-control btn btn-danger">
			  					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			  				</button></a>
			  				</td></tr></table>
			  			</td>
			  		</tr>	


			  		<?php endforeach; ?>
			  			<tr><td><td colspan="5"></td><td><div class="text-center">Total <span class="btn btn-success"><?php echo $total; ?></span></div></td></tr>
			  	</table>

			  	<?php endif; ?>


					<nav>
						<ul class="pagination">
							<?php if($pagina_actual == 1): ?>
								<li class="disabled"><a aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
							<?php else: ?>
								<li><a href="?p=<?php echo $pagina_actual-1; ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
							<?php endif; ?>
								
				  	
				  	<?php  for ($i = 1; $i <= $paginas_totales; $i++): ?> 
				  			
				  			<?php if($i == $pagina_actual): ?>
								<li class="active"><a href="?p=<?php echo $i; ?>"><?php echo $i; ?><span class="sr-only">(current)</span></a></li>
							
							<?php elseif($i == 1 || $i == $paginas_totales || ($i >= $pagina_actual - 2 && $i <= $pagina_actual + 2)): ?>
								<li><a href="?p=<?php echo $i; ?>" class="pagina"><?php echo $i; ?></a></li>

							<?php endif; ?>
					<?php endfor; ?>
							<?php if($pagina_actual == $paginas_totales): ?>
								<li class="disabled"><a aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
							<?php else: ?>
								<li><a href="?p=<?php echo $pagina_actual+1; ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
							<?php endif; ?>
								
							
						</ul>
					</nav>
				

		  	</div>
		</div>		



		<!-- INSERTAR MODAL -->
		<div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="insertarLabel" aria-hidden="true">
			<div class="modal-dialog"> <div class="modal-content"> 
					
					<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="insertarLabel">Insertar Estudiante</h4>
				    </div>

				    <div class="modal-body">
				     	
				     	<form class="form-horizontal" action="http://www.p4e.hol.es/cms/estudiantes/insertar" method="post">
				     	
				     	<br><br>
				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="DNI" class="col-sm-2 control-label">DNI</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="dni" name="dni" placeholder="DNI" pattern="[0-9]{8}[A-Z]{1}" title="FORMATO: 00000000-Z" required>
					    	</div>
					  	</div>


				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					    	<div class="col-sm-8">
								<input type="text" class="form-control text-left" id="nombre" name="nombre" placeholder="Nombre"  required>
					    	</div>
					  	</div>


				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="nombre" class="col-sm-2 control-label">Apellidos</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="apellido1" name="apellido1" placeholder="1er Apellido" required>
					    	</div>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="apellido2" name="apellido2" placeholder="2o Apellido">
					    	</div>
					  	</div>

					  	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="telefono" name="telefono" placeholder="Telefono" required>
					    	</div>
					    </div>

					    <br>
					  	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="nombre" class="col-sm-2 control-label">Usuario</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="user" name="user" placeholder="Usuario" required>
					    	</div>
					    </div>

						<div class="form-group">
					    	<label for="nombre" class="col-sm-3 control-label">Contraseña</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="pass" name="pass" placeholder="Contraseña">
					    	</div>
					  	</div>
					    <div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="email" class="col-sm-2 control-label">Email</label>
					    	<div class="col-sm-8">
								<input type="text" class="form-control text-left" id="email" name="email" placeholder="Email"  required>
					    	</div>
					  	</div>
					  	<br><br>
					  	<div class="form-group">
				     		<div class="col-sm-3"></div>
					    	<div class="col-sm-3">
								<button type="submit" class="form-control btn btn-success">Insertar</button>
					    	</div>

					    	<div class="col-sm-3">
								<button type="reset" class="form-control btn btn-warning">Reset</button>
					    	</div>
					  	</div>



						</form>
				    </div>

			</div></div>
		</div>  




		<!-- ACTUALIZAR MODAL -->
		<div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="actualizarLabel" aria-hidden="true">
			<div class="modal-dialog"> <div class="modal-content"> 
					
					<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="actualizarLabel">Actualizar Estudiante</h4>
				    </div>

				    <div class="modal-body">
				     	
				     	<form class="form-horizontal" action="http://www.p4e.hol.es/cms/estudiantes/actualizar" method="post">
				     	

				     	<div class="row">
				     		<div class="col-sm-3"></div>
				     		<div class="col-sm-3">
				     			<h4>Estudiante</h4> 
				     		</div>
				     		<div class="col-sm-3">
				     			<input type="text" class="form-control text-center" id="codEstudiante" name="codEstudiante"  readonly>
				     		</div>
				     		<div class="col-sm-3"></div>
				     	</div>

				     	<br><br>
				     	
				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="DNI" class="col-sm-2 control-label">DNI</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="dni" name="dni" placeholder="DNI" pattern="[0-9]{8}[A-Z]{1}" title="FORMATO: 00000000-Z" required>
					    	</div>
					  	</div>


				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					    	<div class="col-sm-8">
								<input type="text" class="form-control text-left" id="nombre" name="nombre" placeholder="Nombre"  required>
					    	</div>
					  	</div>


				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="nombre" class="col-sm-2 control-label">Apellidos</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="apellido1" name="apellido1" placeholder="1er Apellido" required>
					    	</div>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="apellido2" name="apellido2" placeholder="2o Apellido">
					    	</div>
					  	</div>

					  	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="telefono" name="telefono" placeholder="Telefono" required>
					    	</div>
					    </div>

					    <br>
					  	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="nombre" class="col-sm-2 control-label">Usuario</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="user" name="user" placeholder="Usuario" required>
					    	</div>
					    </div>

						<div class="form-group">
					    	<label for="nombre" class="col-sm-3 control-label">Contraseña</label>
					    	<div class="col-sm-4">
								<input type="text" class="form-control text-left" id="pass" name="pass" placeholder="Contraseña">
					    	</div>
					  	</div>
					    <div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="email" class="col-sm-2 control-label">Email</label>
					    	<div class="col-sm-8">
								<input type="text" class="form-control text-left" id="email" name="email" placeholder="Email"  required>
					    	</div>
					  	</div>
					  	<br><br>
					  	<div class="form-group">
				     		<div class="col-sm-3"></div>
					    	<div class="col-sm-3">
								<button type="submit" class="form-control btn btn-success">Insertar</button>
					    	</div>

					    	<div class="col-sm-3">
								<button type="reset" class="form-control btn btn-warning">Reset</button>
					    	</div>
					  	</div>



						</form>
				    </div>

			</div></div>
		</div>  



</main>



<script language="javascript">

	$('#actualizar').on('show.bs.modal', function(e) { 

		var bookId = $(e.relatedTarget).data('book-id'); 

		$(e.currentTarget).find('input[name="codEstudiante"]').val(bookId); 

	});


</script>
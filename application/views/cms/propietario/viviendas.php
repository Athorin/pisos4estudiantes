

<main class="contenido">


		<div class="jumbotron">
		  	<div class="container">

		  		
		  		<?php if(isset($viviendas)): ?>
		  		<table class="table table-striped table-responsive margin-tabla text-center row letra-fina">
		  			
		  			<tr class="info">
		  				<th class="text-center col-sm-1">ID</th>
		  				<th class="text-center col-sm-2">PROPIETARIO</th>
		  				<th class="text-center col-sm-2">LOCALIDAD</th>
		  				<th class="text-center col-sm-1">TIPO</th>
		  				<th class="text-center col-sm-6">DIRECCION</th>
		  				
		  			</tr>
			  		
			  		<?php	foreach ($viviendas as $key => $value): ?>
			  		
			  		<tr>
			  			<td> <?php echo $value['ID']; ?> </td> 
			  			<td> <?php echo $value['ID_PROPIETARIO']; ?> </td> 
			  			<td> <?php echo $value['ID_LOCALIDAD']; ?> </td>
			  			<td> <?php echo $value['ID_TIPO']; ?> </td>
			  			<td> <?php echo $value['DIRECCION']; ?> </td>
			  			
			  		</tr>	


			  		<?php endforeach; ?>

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
				        <h4 class="modal-title" id="insertarLabel">Insertar Vivienda</h4>
				    </div>

				    <div class="modal-body">
				     	<form class="form-horizontal" action="http://www.p4e.hol.es/cms/viviendas/insertar" method="post">

				     	
				     	<!-- DEBO HACER UN FOREACH PARA CADA UNO, PARA OBTENER LOS DATOS Y HACER UN DESPLEGABLE PUES LOS DATOS DEBEN EXISTIR ANTES -->
				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="id_propietario" class="col-sm-2 control-label">Propietario</label>
					    	<div class="col-sm-4">
								<select type="text" class="form-control text-left" id="id_propietario" name="id_propietario" placeholder="ID" required>
					    			<option> Poner for each </option>
					    		</select>
					    	</div>
					  	</div>


				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="id_localidad" class="col-sm-2 control-label">Localidad</label>
					    	<div class="col-sm-6">
								<select class="form-control text-left" id="id_localidad" name="id_localidad" placeholder="Localidad"  required>
									<option> Poner for each </option>
								</select>
					    	</div>
					  	</div>


				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="id_tipo" class="col-sm-2 control-label">Tipo</label>
					    	<div class="col-sm-4">
								<select class="form-control text-left" id="id_tipo" name="id_tipo" placeholder="Tipo" required>
					    			<option> Poner for each </option>
					    		</select>
					    	</div>
					  	</div>

					  	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					    	<div class="col-sm-8">
								<input type="text" class="form-control text-left" id="direccion" name="direccion" placeholder="Direccion" required>
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
				        <h4 class="modal-title" id="actualizarLabel">Actualizar Vivienda</h4>
				    </div>

				    <div class="modal-body">
				     	<form class="form-horizontal" action="http://www.p4e.hol.es/cms/localidades/actualizar" method="post">
				     		
				     	<div class="row">
				     		<div class="col-sm-3"></div>
				     		<div class="col-sm-3">
				     			<h4>Vivienda</h4> 
				     		</div>
				     		<div class="col-sm-3">
				     			<input type="text" class="form-control text-center" id="codLocal" name="codLocal"  readonly>
				     		</div>
				     		<div class="col-sm-3"></div>
				     	</div>
				     	<br>
				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="id_propietario" class="col-sm-2 control-label">Propietario</label>
					    	<div class="col-sm-4">
								<select type="text" class="form-control text-left" id="id_propietario" name="id_propietario" placeholder="ID" required>
					    			<option> Poner for each </option>
					    		</select>
					    	</div>
					  	</div>


				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="id_localidad" class="col-sm-2 control-label">Localidad</label>
					    	<div class="col-sm-6">
								<select class="form-control text-left" id="id_localidad" name="id_localidad" placeholder="Localidad"  required>
									<option> Poner for each </option>
								</select>
					    	</div>
					  	</div>


				     	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="id_tipo" class="col-sm-2 control-label">Tipo</label>
					    	<div class="col-sm-4">
								<select class="form-control text-left" id="id_tipo" name="id_tipo" placeholder="Tipo" required>
					    			<option> Poner for each </option>
					    		</select>
					    	</div>
					  	</div>

					  	<div class="form-group">
				     		<div class="col-sm-1"></div>
					    	<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					    	<div class="col-sm-8">
								<input type="text" class="form-control text-left" id="direccion" name="direccion" placeholder="Direccion" required>
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

		$(e.currentTarget).find('input[name="codLocal"]').val(bookId); 

	});


</script>
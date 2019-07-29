

<main class="contenido">


		<div class="jumbotron">
		  	<div class="container">

		  		
		  		<?php if(isset($localidades)): ?>
		  		<table class="table table-striped table-responsive margin-tabla text-center row letra-fina">
		  			
		  			<tr class="info">
		  				<th class="text-center col-sm-2">COD POSTAL</th>
		  				<th class="text-center col-sm-4">LOCALIDAD</th>
		  				<th class="text-center col-sm-4">PROVINCIA</th>
		  				<th class="col-sm-1"><button type="button" class="form-control btn btn-success " data-toggle="modal" data-target="#insertar">
		  					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Añadir
		  				</button></th>
		  			</tr>
			  		
			  		<?php	foreach ($localidades as $key => $value): ?>
			  		
			  		<tr>
			  			<td> <?php echo $value['ID']; ?> </td> 
			  			<td> <?php echo $value['NOMBRE']; ?> </td> 
			  			<td> <?php echo $value['PROVINCIA']; ?> </td>
			  			<td class="text-center">
			  				<table><tr><td>
			  				<button type="button" class="form-control btn btn-info " data-toggle="modal" data-target="#actualizar" data-book-id="<?php echo $value['ID']; ?>">
			  					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
			  				</button></td><td>&nbsp;</td>
			  				<td>
			  				<a href="http://www.p4e.hol.es/cms/localidades/borrar?id=<?php echo $value['ID']; ?>&p=<?php echo $pagina_actual; ?>"> <button type="button" class="form-control btn btn-danger">
			  					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			  				</button></a>
			  				</td></tr></table>
			  			</td>
			  		</tr>	


			  		<?php endforeach; ?>
			  			<tr><td><td colspan="2"></td><td><div class="text-center">Total <span class="btn btn-success"><?php echo $total; ?></span></div></td></tr>
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
				        <h4 class="modal-title" id="insertarLabel">Insertar Localidad</h4>
				    </div>

				    <div class="modal-body row">
				     	<form action="http://www.p4e.hol.es/cms/localidades/insertar" method="post">

				      		<div class="form-group col-sm-4">
							    <input type="text" class="form-control text-center" id="cp" name="cp" placeholder="Codigo Postal" pattern="[0-9]{5}" title="Debe tener 5 cifras" required>
							</div>
				        	<div class="form-group col-sm-4">
						    	<input type="text" class="form-control text-center" id="localidad" name="localidad" placeholder="Localidad" required>
						  	</div>
						  	<div class="form-group col-sm-4">
						    	<input type="text" class="form-control text-center" id="provincia" name="provincia" placeholder="Provincia" required>
						  	</div>
						  	
						  	<div class="row">
						  		<div class="form-group col-sm-4"></div>
						  		<div class="form-group col-sm-2">
						  			<button type="submit" class="form-control btn btn-success">Insertar</button>
						  		</div>
						  		<div class="form-group col-sm-2">
						  			<button type="reset" class="form-control btn btn-warning">Reset</button>
						  		</div>
						  		<div class="form-group col-sm-4"></div>
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
				        <h4 class="modal-title" id="actualizarLabel">Actualizar Localidad</h4>
				    </div>

				    <div class="modal-body">
				     	<form action="http://www.p4e.hol.es/cms/localidades/actualizar" method="post">
				     		
				     	<div class="row">
				     		<div class="col-sm-3"></div>
				     		<div class="col-sm-3">
				     			<h4>Localidad</h4> 
				     		</div>
				     		<div class="col-sm-3">
				     			<input type="text" class="form-control text-center" id="codLocal" name="codLocal"  readonly>
				     		</div>
				     		<div class="col-sm-3"></div>
				     	</div>
				     	<br>
				     	<div class="row">
				      		<div class="form-group col-sm-4">
							    <input type="text" class="form-control text-center" id="cp" name="cp" placeholder="Codigo Postal" pattern="[0-9]{5}" title="Debe tener 5 cifras" required>
							</div>
				        	<div class="form-group col-sm-4">
						    	<input type="text" class="form-control text-center" id="localidad" name="localidad" placeholder="Localidad" required>
						  	</div>
						  	<div class="form-group col-sm-4">
						    	<input type="text" class="form-control text-center" id="provincia" name="provincia" placeholder="Provincia" required>
						  	</div>
						</div>	 
						<br>
						<div class="row">
						  	<div class="form-group col-sm-4"></div>
						  	<div class="form-group col-sm-2">
						  		<button type="submit" class="form-control btn btn-success">Insertar</button>
						  	</div>
						  	<div class="form-group col-sm-2">
						  		<button type="reset" class="form-control btn btn-warning">Reset</button>
						  	</div>
						  	<div class="form-group col-sm-4"></div>
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
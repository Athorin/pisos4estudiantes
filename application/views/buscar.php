
	<main class="contenido">


		<div class="jumbotron">
		  	<div class="container">
		  	<div class="row">


		  	<!-- BUSQUEDA CONTROLADOR Y MODELO Y DEVUELVE VISTA RESULTADO PAGINADA -->
			<form action="http://www.p4e.hol.es/resultado" method="post">

				<div class="col-sm-3 text-center"> 
					<img src="http://www.p4e.hol.es/img/lupa.png" class="borde-redondo" height="100" width="110">
				</div>

				<div class="col-sm-3 text-center">
					
					<select multiple class="selectpicker seleccion" name="donde_busca" required=required>
							<option value="0" class="opcion"> Cualquier localidad </option>
						<?php if( ! empty( $localidades ) ): ?>
						<?php foreach ($localidades as $key => $value): ?>
							<option value='<?php echo $value['NOMBRE']; ?>' class="opcion"> <?php echo $value['NOMBRE']; ?> </option>
						<?php endforeach; endif;?>
					</select>
					
				</div>

				<div class="col-sm-3 text-center">
					<select multiple class="selectpicker seleccion" name="que_busca" required=required>
						<option value='0' class="opcion"> Cualquier Alojamiento</option>
						<option value='1' <?php if(!empty($_GET))if($_GET['opcion']==1){echo "selected";}?> class="opcion"> Piso Compartido</option>
						<option value='2' <?php if(!empty($_GET))if($_GET['opcion']==2){echo "selected";}?> class="opcion"> Estudio</option>
						<option value='3' <?php if(!empty($_GET))if($_GET['opcion']==3){echo "selected";}?> class="opcion"> Compañero</option>
					</select>
				</div>


				<div class="col-sm-3 text-center">
					<button type="submit" id="btn-buscador" class="btn btn-success">Buscar</button>
				</div>
			</form>

			</div>
			</div>
		</div>

	

	</main>


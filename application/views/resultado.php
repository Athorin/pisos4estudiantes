
<main class="contenido">

	<!-- DEBO SEPARAR LAS TABLAS DE USUARIO Y CONTRASEÑA DE LAS DE LAS PERSONAS REGISTRADAS, HACIENDOSE REFERENCIA ENTRE SI -->

	<!-- DEBO TAMBIEN CAMBIAR LA IDEA DE BUSCAR COMPAÑERO, NO ME VALE MOSTRARLE A CUALQUIER TODA LA GENTE QUE TENGO REGISTRADA -->



	<?php if(!empty($viviendas)):  ?>
		<table class="table table-striped table-responsive margin-tabla text-center">
		<tr class="info"><th class="text-center">ID</th><th class="text-center">PROPIETARIO</th><th class="text-center">DIRECCION</th>
			<?php foreach ($viviendas as $key => $value): ?>
				
				<tr><td><?php echo $value['ID']; ?> </td>
					<td><?php echo $value['ID_PROPIETARIO']; ?> </td>
					<td><?php echo $value['DIRECCION']; ?> </td>
				</tr>
	
			<?php endforeach; ?>
		</table>
	<?php endif; ?>

	<?php if(!empty($estudiantes)):  ?>
		<table class="table table-striped table-responsive margin-tabla text-center">
		<tr class="info"><th class="text-center">DNI</th><th class="text-center">NOMBRE y APELLIDOS</th><th class="text-center">TELEFONO</th>
			<?php foreach ($estudiantes as $key => $value): ?>
				
				<tr><td><?php echo $value['DNI']; ?> </td>
					<td><?php echo $value['NOMBRE']; echo " "; echo $value['APELLIDO1']; echo " "; if(!empty($value['APELLIDO2'])) echo $value['APELLIDO2'];?> </td>
					<td><?php echo $value['TELEFONO']; ?> </td>
				</tr>
	
			<?php endforeach; ?>
		</table>

	<?php endif; ?>

	<?php if(empty($estudiantes) && empty($viviendas)):  ?>

		<h3 class="text-center">No hay resultados </h3>

	<?php endif; ?>



</main>
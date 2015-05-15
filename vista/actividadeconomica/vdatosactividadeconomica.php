<?php
	include("controlador/cdatosactividadeconomica.php");  
?>
<div class="forms1">
	<h1>Datos Actividad Economica</h1>
	<table class="table">
		<tr>
			<th>Personas a su cargo:</th>
			<td><?= $PersonasaCargo ?></td>
		</tr>
		<tr>
			<th>Ocupacion Actual:</th>
			<td><?= $Ocupacion ?></td>
		</tr>
		<tr>
			<th>En que trabaja:</th>
			<td><?= $TrabajoPer ?></td>
		</tr>
		<tr>
			<th>Ingresos Mensuales:</th>
			<td><?= $IngresoMensual ?></td>
		</tr>
		<tr>
			<td><a href="javascript:history.back();" class="btn btn-success">Volver</a></td>
			<td><a href="home.php?var=14&id=<?php echo $id;?>" class="btn btn-success">Experiencia Laboral </a></td>
		</tr>
	</table>
</div>

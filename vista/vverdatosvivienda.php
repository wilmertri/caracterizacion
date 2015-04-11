<?php
	include("controlador/cverdatosvivienda.php");  
?>
<div class="forms1">
	<h1>Datos de la vivienda</h1>
	<table class="table">
		<tr>
			<th>Tipo de vivienda</th>
			<td><?= $TipoVivienda ?></td>
		</tr>
		<tr>
			<th>Tipo de pisos</th>
			<td><?= $TipoPisos ?></td>
		</tr>
		<tr>
			<th>Tipo de paredes</th>
			<td><?= $TipoParedes ?></td>
		</tr>
	</table>
</div>

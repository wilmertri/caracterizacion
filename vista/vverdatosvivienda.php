<?php
	include("controlador/cdatosvivienda.php");  
?>
<div class="forms1">
	<h1>Datos de la vivienda</h1>
	<table class="table">
		<tr>
			<th>Tipo de vivienda</th>
			<td><?= $verTipoVivienda[0]['nomval'] ?></td>
		</tr>
		<tr>
			<th>Tipo de pisos</th>
			<td><?= $verTipoPisos[0]['nomval'] ?></td>
		</tr>
		<tr>
			<th>Tipo de paredes</th>
			<td><?= $verTipoParedes[0]['nomval'] ?></td>
		</tr>
	</table>
</div>

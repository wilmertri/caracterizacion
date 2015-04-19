<?php
	include ("controlador/cdatospersona.php");
?>
<h1>Detalle Datos de la Persona</h1>
<table class="table">
	<tr>
		<th>Número de Ficha:</th>
		<td><?php echo $dato1[0]['numficha'] ?></td>
	</tr>
	<tr>
		<th>Primer Nombre:</th>
		<td><?php echo $dato1[0]['pnomper'] ?></td>
		<th>Segundo Nombre:</th>
		<td><?php echo $dato1[0]['snomper'] ?></td>
	</tr>
	<tr>
		<th>Primer Apellido:</th>
		<td><?php echo $dato1[0]['papeper'] ?></td>
		<th>Segundo Apellido:</th>
		<td><?php echo $dato1[0]['sapeper'] ?></td>
	</tr>
	<tr>
		<th>Tipo Documento:</th>
		<?php	
			$tipdoc2 = $ins->valor2($dato1[0]["tipdocper"]); 
		?>
		<td><?php echo $tipdoc2[0]['nomval'] ?></td>
		<th>Numero de documento:</th>
		<td><?php echo $dato1[0]['numdocper'] ?></td>	
	</tr>	
	<tr>
		<th>Genero:</th>
		<?php	
			$gen2 = $ins->valor2($dato1[0]["genper"]); 
		?>
		<td><?php echo $gen2[0]['nomval'] ?></td>
		<th>Estado Civil:</th>
		<?php	
			$estciv2 = $ins->valor2($dato1[0]["estcivper"]); 
		?>
		<td><?php echo $estciv2[0]['nomval'] ?></td>
	</tr>
	<tr>
		<th>Gestante o Lactante: </th>
		<?php	
			$ges2 = $ins->valor2($dato1[0]["geslanper"]); 
		?>
		<td> <?php echo $ges2[0]['nomval'] ?></td>
		<th>Direccion:</th>
		<td><?php echo $dato1[0]['dirper'] ?></td>
	</tr>
	<tr>
		<th> Zona:</th>
		<?php	
			$zona2 = $ins->selzona2($dato1[0]["zonper"]); 
		?>
		<td><?php echo $zona2[0]['nomzona'] ?></td>
		<th>Vereda:</th>
		<?php	
			$ver2 = $ins->selver2($dato1[0]["verper"]); 
		?>
		<td><?php echo $ver2[0]['nomver'] ?></td>
	</tr>
	<tr>
		<th>Sector:</th>
		<td><?php echo $dato1[0]['secper'] ?></td>
		<th>Barrio o Finca: </th>
		<td><?php echo $dato1[0]['barfinper'] ?></td>
	</tr>
	<tr>
		<th>Telefono:</th>
		<td><?php echo $dato1[0]['telper'] ?></td>
		<th>Telefono 2: </th>
		<td><?php echo $dato1[0]['telsegper'] ?></td>
	</tr>
	<tr>
		<th>Fecha de Nacimiento: </th>
		<td><?php echo $dato1[0]['fecnacper'] ?></td>
		<th>Grupo Poblacional:</th>
		<?php	
			$etnia2 = $ins->valor2($dato1[0]["etniaper"]); 
		?>
		<td> <?php echo $etnia2[0]['nomval'] ?></td>
	</tr>
	<tr>
		<th>Hijos a Cargo:</th>
		<?php	
			$hijosacargo2 = $ins->valor2($dato1[0]["hijosacargo"]); 
		?>
		<td> <?php echo $hijosacargo2[0]['nomval'] ?></td>
	</tr>
	<tr>
		<th>Edad</th>
		
		<td> <?= $edad ?></td>
	</tr>
</table>
<div>
<div class="row">
    <div class="col-md-12">
            <a href="javascript:history.back();" class="btn btn-success">Volver</a>
			<a href="home.php?pr=<?php echo $dato1[0]['idpersona'] ?>&var=5" class="btn btn-success">Editar</a>
			<a href="home.php" class="btn btn-success" >Salir</a>
	</div>
</div>
</div>
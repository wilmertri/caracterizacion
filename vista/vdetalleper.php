<?php
	include ("controlador/cdatospersona.php");
?>
<h1>Detalle Datos de la Persona</h1>
<table class="table">
	<tr>
		<td>Número de Ficha:</td>
		<td><?php echo $dato1[0]['numficha'] ?></td>
	</tr>
	<tr>
		<td>Primer Nombre:</td>
		<td><?php echo $dato1[0]['pnomper'] ?></td>
		<td>Segundo Nombre:</td>
		<td><?php echo $dato1[0]['snomper'] ?></td>
	</tr>
	<tr>
		<td>Primer Apellido:</td>
		<td><?php echo $dato1[0]['papeper'] ?></td>
		<td>Segundo Apellido:</td>
		<td><?php echo $dato1[0]['sapeper'] ?></td>
	</tr>
	<tr>
		<td>Tipo Documento:</td>
		<?php	
			$tipdoc2 = $ins->valor2($dato1[0]["tipdocper"]); 
		?>
		<td><?php echo $tipdoc2[0]['nomval'] ?></td>
		<td>Numero de documento:</td>
		<td><?php echo $dato1[0]['numdocper'] ?></td>	
	</tr>	
	<tr>
		<td>Genero:</td>
		<?php	
			$gen2 = $ins->valor2($dato1[0]["genper"]); 
		?>
		<td><?php echo $gen2[0]['nomval'] ?></td>
		<td>Estado Civil:</td>
		<?php	
			$estciv2 = $ins->valor2($dato1[0]["estcivper"]); 
		?>
		<td><?php echo $estciv2[0]['nomval'] ?></td>
	</tr>
	<tr>
		<td>Gestante o Lactante: </td>
		<?php	
			$ges2 = $ins->valor2($dato1[0]["geslanper"]); 
		?>
		<td> <?php echo $ges2[0]['nomval'] ?></td>
		<td>Direccion:</td>
		<td><?php echo $dato1[0]['dirper'] ?></td>
	</tr>
	<tr>
		<td> Zona:</td>
		<?php	
			$zona2 = $ins->selzona2($dato1[0]["zonper"]); 
		?>
		<td><?php echo $zona2[0]['nomzona'] ?></td>
		<td>Vereda:</td>
		<?php	
			$ver2 = $ins->selver2($dato1[0]["verper"]); 
		?>
		<td><?php echo $ver2[0]['nomver'] ?></td>
	</tr>
	<tr>
		<td>Sector:</td>
		<td><?php echo $dato1[0]['secper'] ?></td>
		<td>Barrio o Finca: </td>
		<td><?php echo $dato1[0]['barfinper'] ?></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><?php echo $dato1[0]['telper'] ?></td>
		<td>Telefono 2: </td>
		<td><?php echo $dato1[0]['telsegper'] ?></td>
	</tr>
	<tr>
		<td>Fecha de Nacimiento: </td>
		<td><?php echo $dato1[0]['fecnacper'] ?></td>
		<td>Grupo Poblacional:</td>
		<?php	
			$etnia2 = $ins->valor2($dato1[0]["etniaper"]); 
		?>
		<td> <?php echo $etnia2[0]['nomval'] ?></td>
	</tr>
	<tr>
		<td>Hijos a Cargo:</td>
		<?php	
			$hijosacargo2 = $ins->valor2($dato1[0]["hijosacargo"]); 
		?>
		<td> <?php echo $hijosacargo2[0]['nomval'] ?></td>
	</tr>
	<tr>
		<td>Edad</td>
		
		<td> <?= $edad ?></td>
	</tr>
</table>
<div>
<div class="row">
    <div class="col-md-6">
            <a href="javascript:history.back();" class="btn btn-success">Volver</a>
			<a href="home.php?pr=<?php echo $dato1[0]['idpersona'] ?>&var=5" class="btn btn-primary">Editar</a>
			<a href="home.php" class="btn btn-primary" >Salir</a>
	</div>
</div>
</div>
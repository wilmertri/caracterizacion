<?php
	include("controlador/ctbnegocio.php");
?>
<h1> Actualizar Negocio </h1>
<div class="forms">
	<form name="form1" method="POST" action="home.php?var=18&pr=<?php echo $dato1[0]['numdocper'] ?>">
		<div class="row">
			<div class="form-group">
				<label for="Codigo_Negocio">Codigo</label>
				<td><?php echo $dato2[0]['codnegper']; ?>
					<input type="hidden" name="actu" value="actu">
					<input type="hidden" name="codnegper" value="<?php echo $dato2[0]["codnegper"]; ?>">
				</td>
			</div>
			<div class="form-group">
				<label for="Labor_Negocio">Labor</label>
				<input class="form-control" type="text" name="labneg" value="<?php echo $dato2[0]["labneg"]; ?>">
			</div>
			<div class="form-group">
				<label for="Tipo_Negocio">Tipo</label>
					<input class="form-control" type="text" name="tipneg" value="<?php echo $dato2[0]["tipneg"]; ?>">
			</div>
			<div class="form-group">
				<label for="Duracion_Negocio">Duracion</label>
					<input class="form-control" type="text" name="durneg" value="<?php echo $dato2[0]["durneg"]; ?>">
			</div>
			<div class="form-group">
				<label for="Direccion_Negocio">Direccion</label>
					<input class="form-control" type="text" name="dirneg" value="<?php echo $dato2[0]["dirneg"]; ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Actualizar">
				<a href="home.php" class="btn btn-primary" >Salir</a>
			</div>
		</div>
	</form>	
</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700" class="table table-striped">
			<tr>
				<th>Codigo</th>
				<th>Labor</th>
				<th>Tipo</th>
				<th>Duracion</th>
				<th>Direccion</th>
				<th>Editar</th>
			</tr>
			<?php
				$dato = $ins -> selneg1($pr);
				for($i=0;$i<count($dato);$i++) {
			?>
			<tr>
				<td><?php echo $dato[$i]["codnegper"]; ?></td>
				<td><?php echo $dato[$i]["labneg"]; ?></td>
				<td><?php echo $dato[$i]["tipneg"]; ?></td>
				<td><?php echo $dato[$i]["durneg"]; ?></td>
				<td><?php echo $dato[$i]["dirneg"]; ?></td>
				<td><a href="home.php?var=19&pr=<?php echo $dato1[0]['numdocper'] ?>&cod=<?php echo $dato[$i]["codnegper"]; ?>" class="btn btn-primary">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
		
	</form>
</div>	
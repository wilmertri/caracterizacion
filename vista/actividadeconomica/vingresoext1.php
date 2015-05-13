<?php
	include ("controlador/cingresoext.php");
?>
<h1> Actualizar Datos Ingreso Externo </h1>
<div class="forms">
	<form name="form1" method="POST" action="home.php?var=16&pr=<?php echo $dato1[0]['numdocper'] ?>">
		<div class="row">
			<div class="form-group">
				<label for="Codigo de Ingreso Externo">Codigo</label>
                <input name="codingext" type="text" value = "<?php echo $dato2[0]['codingext'] ?>" class="form-control" disabled>
				<input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="codingext" value="<?php echo $dato2[0]['codingext'] ?>" />
			</div>
			<div class="form-group">
				<label for="Tipo de ingreso externo">Tipo de ingreso externo</label>
                <input name="tipodeingreso" type="text" value = "<?php echo $dato2[0]['tipingext'] ?>" class="form-control" disabled>
				<input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="tipodeingreso" value="<?php echo $dato2[0]['tipingext'] ?>" />
			</div>
			<div class="form-group">
				<label for="Ingreso en dinero">Ingreso en dinero</label>
				<input name="ingresoendinero" type="text" value = "<?php echo $dato2[0]['ingext'] ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="Descripcion de ingreso"> Descripcion de ingreso</label>
				<input name="descdeldinero" type="text" value = "<?php echo $dato2[0]['desingext'] ?>" class="form-control">
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
				<th>Tipo de ingreso externo</th>
				<th>Ingreso en dinero</th>
				<th>Descripcion de ingreso</th>
				<th>Editar</th>
			</tr>
			<?php
				$dato = $ins->selingext2($pr);
				for($i=0;$i<count($dato);$i++) {
			?>
			<tr>
				<td align = "left"><?php echo $dato[$i]["codingext"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["tipingext"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["ingext"]; ?></td>
				<td align = "left"><?php echo $dato[$i]["desingext"]; ?></td>
				<td align = "center"><a href ="home.php?var=17&pr=<?php echo $dato1[0]['numdocper'] ?>&cod=<?php echo $dato[$i]["codingext"]; ?>" class="btn btn-primary">Editar</a></td>
			</tr>
			<?php } ?>
		</table>	
	</form>
</div>
<?phpclude ("controlador/ctbsalud.php");
?>
<h1> Insertar Salud </h1>
<div class="form1">
	<form name="form1" method="POST" action="">
		<!-- Esta afiliado a algún Sistema de Salud. -->
		<div class="row">
			<div class="form-group col-lg-6">
                <label for="Sistema de Salud">Sistema de Salud</label>
                <select name="sissal" class="form-control">
					<option value = 0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($sissal); $i++){
					?>
					<option value ="<?php echo $sissal[$i]['codval'] ?>" ><?php echo $sissal[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
           	<!-- Qué Entidad Promotora de Salud le presta los servcios de salud? -->
          	<div class="form-group col-lg-6 center">
            	<label for="EPS">EPS</label>
                <select name="eps" class="form-control">
					<option value=0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($eps1); $i++){
					?>
					<option value ="<?php echo $eps[$i]['codeps'] ?>" ><?php echo $eps[$i]['nomeps'] ?></option>
					<?php 
						} 
					?>
				</select>
        	</div>
		</div>
		<!-- En los últimos doce meses, ¿le han negado la atención en salud?  PV -->
		<div class="row">
			<div class="form-group col-lg-6">
                <label for="Sistema de Salud">Le han Negado Atención</label>
                <select name="negser" class="form-control">
					<option value = 0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($negser); $i++){
					?>
					<option value ="<?php echo $negser[$i]['codval'] ?>" ><?php echo $negser[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
            <!-- Alguna vez solicitó atención en salud (psicológica o física) despues de haber declarado el hecho victimizante? PV -->
        	<div class="form-group col-lg-6">
                <label for="Sistema de Salud">Ha solicitado atención Médica</label>
                <select name="atevicper" class="form-control">
					<option value = 0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($atevicper); $i++){
					?>
					<option value ="<?php echo $atevicper[$i]['codval'] ?>" ><?php echo $atevicper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        </div>	
		<!-- Cuenta con el esquema de vacunación los niños(as) menores de 6 años del Hogar. PV -->
		<div class="row">
			<div class="form-group col-md-6">
                <label for="Sistema de Salud">Tiene esquema de Vacunación</label>
                <select name="esqvacper" class="form-control">
					<option value = 0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($esqvacper); $i++){
					?>
					<option value ="<?php echo $esqvacper[$i]['codval'] ?>" ><?php echo $esqvacper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        	<!-- En el ultimo año ha estado en control odontológico? PV -->
        	<div class="form-group col-md-6">
                <label for="Sistema de Salud">Ha estado en contro odontologico</label>
                <select name="conodoper" class="form-control">
					<option value = 0> Seleccione una o`($conodoper); $i++){
				 value ="<?php echo $conodoper[$i]['codval'] ?>" ><?php echo $conodoper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        </div>
		<!-- Discapacidad permanente? 
		<div class="row">
        	<div class="form-group col-md-12 center">
                <label for="DISC">Discapacidad</label>
                <select name="dsc1" class="form-control">
					<option value=0> Seleccione una opcion </option>
					<?php 
				//		for ($i=0; $i < count($dsc1); $i++){
					?>
				 	<option value ="<?php // echo $dsc1[$i]['iddiscper'] ?>" ><?php // echo $dsc1[$i]['descripcion'] ?></option>
					<?php 
						} 
					?>
				</select>
        	</div>
		</div>
		Discapacidad Adicional (seleccionar otra discapacidad si aplica). 
				<div class="row">
        	<div class="form-group col-md-12 center">
                <label for="DISC">DiscapacidadAdicional</label>
                <select name="dsc2" class="form-control">
					<option value=0> Seleccione una opcion </option>
					<?php 
						// for ($i=0; $i < count($dsc2); $i++){
					?>
					<option value ="<?php // echo $dsc2[$i]['iddiscper'] ?>" ><?php // echo $dsc2[$i]['descripcion'] ?></option>
					<?php 
						} 
					?>
				</select>
        	</div>
		</div>  -->
		<!-- ¿La discapacidad fue causada por el conflicto armado? PV -->
		<div class="row">
			<div class="form-group col-lg-6">
                <label for="Sistema de Salud">Discapacidad fue por Conflicto Armado</label>
                <select name="disconfarm" class="form-control">
					<option value = 0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($disconfarm); $i++){
					?>
						<option value ="<?php echo $disconfarm[$i]['codval'] ?>" ><?php echo $disconfarm[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        	<!-- Seleccione la rehabilitación Si Aplica? PV -->
        	<div class="form-group col-lg-6">
		   		<label for="C">DiscapacidadAdicional</label>
                <select name="reh1" class="form-control">
					<option value=0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($reh1); $i++){
					?>
						<option value ="<?php echo $reh1[$i]['idtbrehabilitacion'] ?>" ><?php echo $reh1[$i]['nomreh'] ?></option>
					<?php 
						} 
					?>
				</select>
        	</div>
		</div>
		<!-- Seleccione la rehabilitación Adicional Si Aplica? -->
		<div class="row">
			<div class="form-group col-md-6">
                <label for="Sistema de Salud">Discapacidad fue por Conflicto Armado</label>
                <select name="reh2" class="form-control">
					<option value = 0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($reh2); $i++){
					?>
					<option value ="<?php echo $reh2[$i]['idtbrehabilitacion'] ?>" ><?php echo $reh2[$i]['nomreh'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        <!-- Cuantos alimentos consume su hogar en el día normalmente? -->
			<div class="form-group col-md-6">
                <label for="Sistema de Salud">Número Alimentos Diarios</label>
                <select name="comdiaper" class="form-control">
					<option value = 0> Seleccione una opcion </option>
					<?php 
						for ($i=0; $i < count($comdiaper); $i++){
					?>
					<option value ="<?php echo $comdiaper[$i]['codval'] ?>" ><?php echo $comdiaper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
        </div>

		<div class="row">
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Insertar">
				<a href="home.php" class="btn btn-primary" >Salir</a>
			</div>
		</div>
	</form>
</div>
<div class="tbcenter">
	<form id="form1" name="form1" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
			<tr>
				<th>Tiene Sistema de Salud</th>
				<th>Entidad Promotora de Salud?</th>
				<th>Le han negado Atención en salud?</th>
				<th>Ha solicitado atención en Salud?</th>
				<th>Cuenta con esquema de Vacunación?</th>
				<th>Ha estado en contro Odontologico?</th>
				<th>Tiene discapcidad permanente?</th>
			</tr>
			<?php
				$dato = $ins -> selsal1($pr);
				for($i=0;$i<count($dato);$i++) {
			?>
			<tr>
				<td><?php echo $dato[$i]["sissal"]; ?></td>
				<td><?php echo $dato[$i]["eps1"]; ?></td>
				<td><?php echo $dato[$i]["negserper"]; ?></td>
				<td><?php echo $dato[$i]["atesalposvicper"]; ?></td>
				<td><?php echo $dato[$i]["esqvacper"]; ?></t
				<td><?php echo $dato[$i]["conodoper"]; ?></td>
				<td><?php echo $dato[$i]["dsc1"]; ?></td>
				<td><?php echo $dato[$i]["dsc2"]; ?></td>
				<td><?php echo $dato[$i]["disconfarm"]; ?></td>
				<td><?php echo $dato[$i]["reh1"]; ?></td>
				<td><?php echo $dato[$i]["reh2"]; ?></td>
				<td><?php echo $dato[$i]["comdiaper"]; ?></td>


				<td><a href="home.php?var=19&pr=<?php echo $dato1[0]['numdocper'] ?>&cod=<?php echo $dato[$i]["codnegper"]; ?>" class="btn btn-primary">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
		
	</form>
</div>
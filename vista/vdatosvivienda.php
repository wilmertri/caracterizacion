<?php
	include("controlador/cdatosvivienda.php");  
?>
<div class="forms1">
	<h1>Ingresar datos de la vivienda</h1>
	<form name="form1" action="" method="POST">
		<div class="row">
			<div class="form-group col-lg-6">
				<label for="" class="">Tipo de vivienda</label>
				<select name="tipviv" class="form-control" id="">
					<option value="">Seleccione tipo de vivienda</option>
					<?php

						for ($i=0; $i <count($tipovivienda1) ; $i++) 
						{  
					?>
					<option value="<?php echo $tipovivienda1[$i]['codval']; ?>"><?php echo $tipovivienda1[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
			<div class="form-group col-lg-6">
				<label for="" class="">Material predominante de las paredes</label>
				<select name="matpar" class="form-control" id="">
					<option value="">Seleccione tipo de paredes</option>
					<?php

						for ($i=0; $i <count($tipoparedes) ; $i++) 
						{  
					?>
					<option value="<?php echo $tipoparedes[$i]['codval']; ?>"><?php echo $tipoparedes[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
				<label for="" class="">Material predominante de los pisos</label>
				<select name="matpis" class="form-control" id="">
					<option value="">Seleccione tipo de pisos</option>
					<?php

						for ($i=0; $i <count($tipopisos) ; $i++) 
						{  
					?>
					<option value="<?php echo $tipopisos[$i]['codval']; ?>"><?php echo $tipopisos[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
			<div class="form-group col-lg-6">
				<label for="" class="">Material predominante de los techos</label>
				<select name="mattec" class="form-control" id="">
					<option value="">Seleccione tipo de techo</option>
					<?php

						for ($i=0; $i <count($tipotechos) ; $i++) 
						{  
					?>
					<option value="<?php echo $tipotechos[$i]['codval']; ?>"><?php echo $tipotechos[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
				<label for="" class="texto_justificado">En los ÚLTIMOS 2 AÑOS esta zona se ha visto afectada por alguno de los siguientes riesgos:</label>
				<select name="zonrie" class="form-control" id="">
					<option value="">Seleccione tipo de riesgo</option>
					<?php

						for ($i=0; $i <count($tiporiesgos) ; $i++) 
						{  
					?>
					<option value="<?php echo $tiporiesgos[$i]['codval']; ?>"><?php echo $tiporiesgos[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
			<div class="form-group col-lg-6">
				<label for="" class="texto_justificado">De acuerdo con las siguientes condiciones de ocupación de la vivienda, su relación con ella es:</label>
				<select name="relviv" class="form-control" id="">
					<option value="">Seleccione tipo de relación</option>
					<?php

						for ($i=0; $i <count($tiporelacion) ; $i++) 
						{  
					?>
					<option value="<?php echo $tiporelacion[$i]['codval']; ?>"><?php echo $tiporelacion[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
				<label for="">Incluyendo sala-comedor, ¿de cuántos cuartos en total dispone este hogar?</label>
				<input type="number" name="numhabviv" class="form-control">
			</div>
			<div class="form-group col-lg-6">
				<label for="">¿En cuántos de esos cuartos duermen las personas de este hogar?</label>
				<input type="number" name="numhabhab" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-12 center">
                <label for="Servicios basicos">Servicios Basicos</label>
				<div class="checkbox">
					<?php 
						for ($i=0; $i < count($servbas); $i++){
					?>
					<label class="checkbox-inline"><input name="serbas[]" type="checkbox" id="inlineCheckbox1" value="<?php echo $servbas[$i]['codservbas'] ?>"> <?php echo $servbas[$i]['desservbas'] ?></label>
					<?php 
						} 
					?>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-lg-6">
				
			</div>
			<div class="form-group col-lg-6">
				
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
				<input type="submit" class="btn btn-primary">
			</div>	
		</div>
		
	</form>
</div>

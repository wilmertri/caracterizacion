<?php
	include("controlador/cdatosvivienda.php");  
?>
<div class="forms1">
	<h1>Datos de la vivienda</h1>
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
				<label for="" class="">Tipo de pisos</label>
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
		</div>
		<div class="row">
			<div class="form-group col-lg-6">
				<input type="submit" class="btn btn-primary">
			</div>	
		</div>
		
	</form>
</div>

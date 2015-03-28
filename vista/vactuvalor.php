<?php
 	include ("controlador/cparametro.php");
?>
<h1>Actualizar valor</h1>

<div class="forms1">
	<div class="row">
		<div class="form-group col-lg-6 col-md-4 col-sm-12">
			<label for="">Código del valor:</label>
			<input type="text" name="codval" class="form-control" disabled>	
		</div>
		<div class="form-group col-lg-6 col-md-4 col-sm-12">
			<label for="">Nombre del valor:</label>
			<input type="text" name="nomval" class="form-control" value="">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-lg-6">
			<input type="submit" value="Actualizar" class="btn btn-primary">
		</div>
	</div>
</div>

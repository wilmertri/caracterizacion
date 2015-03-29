<?php
	include("controlador/cdatosvivienda.php");  
?>
<div class="forms1">
	<form name="form1" action="" method="POST">
		<div class="row">
			<div class="form-group col-lg-6">
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
		</div>
		
	</form>
</div>

<?php include("controlador/cdatosper.php"); ?>
<div class="forms1">
	<h2>FICHA DE CARACTERIZACIÓN: <?php echo $datos[0]['numficha']; ?></h2>
	<h3>NÚMERO DE IDENTIFICACIÓN: <?php echo $datos[0]['numdocper']; ?></h3>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">DATOS DEL REPRESENTANTE DEL HOGAR <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=4&pr=<?php echo $pr;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=2&pr=<?php echo $pr;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">EDUCACIÓN <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">SALUD <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">DATOS DE LA VIVIENDA <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=76&id=<?php echo $pr;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=75&id=<?php echo $pr;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">ACTIVIDAD ECONÓMICA <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">DESPOJO Y ABANDONO DE TIERRAS <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
	<div class="dropdown esp">
		<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">COMPOSICIÓN FAMILIAR <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">MOSTRAR DATOS</a></li>
			<li><a href="home.php?var=&pr=<?php echo $pr;?>">INGRESAR DATOS</a></li>
		</ul>
	</div>
</div>
<?php
	include("modelo/mtbactividadeconomica.php"); // aun no se tiene el modelo de actividad economica
	$ins= new mtbactividadeconomica(); // instanciar el nombre del modelo actividad economica
		$numpercar= isset($_POST["numpercar"]) ? $_POST["numpercar"]:null; // personas a cargo 
		$ocuperact= isset($_POST["ocuperact"]) ? $_POST["ocuperact"]:null; // ocupacion actual
		$actperact= isset($_POST["actperact"]) ? $_POST["actperact"]:null; // en que trabaja
		$= isset($_POST[""]) ? $_POST[""]:null; // ingresos mensuales -- falta definir variable
		$ingresosn= isset($_POST["ingresosn"]) ? $_POST["ingresosn"]:null; // fuente ingresos 
		$= isset($_POST[""]) ? $_POST[""]:null; // otro cual, esta por definir - no hay variable
		$= isset($_POST[""]) ? $_POST[""]:null; // fuente ingresos externa - Recibe ayuda a traves de alguno de los siguientes programas sociales - no hay variable
		$= isset($_POST[""]) ? $_POST[""]:null; // oficios en los que tiene experiencia laboral - no hay variable
		$= isset($_POST[""]) ? $_POST[""]:null; // ha emprendido algun negocio
		$= isset($_POST[""]) ? $_POST[""]:null; // que tipo de negocio es
		$negactper= isset($_POST["negactper"]) ? $_POST["negactper"]:null; // esta activo el negocio
		$= isset($_POST[""]) ? $_POST[""]:null; // duracion del negocio - aunque se tiene pensado que sea desplegable - sin variable		
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos y si no esta me llama insertar
		$pr= isset($_GET["pr"]) ? $_GET["pr"]:null;
		$dato1= $ins->seleps1($pr);

		if($numpercar && $ocuperact && $actperact && $ && $ingresosn && $ && $ && $ && $ && $ && $negactper && $ && $actu) // && es un Y  
			{
				$ins->updeps($numpercar,$ocuperact,$actperact,$,$ingresosn,$,$,$,$,$,$negactper,$);  // actualizar datos
			}	
		if($numpercar && $ocuperact && $actperact && $ && $ingresosn && $ && $ && $ && $ && $ && $negactper && $  && !$actu) // insertar datos // cuando es ! es para negar  
			{
				$ins->inseps($numpercar,$ocuperact,$actperact,$,$ingresosn,$,$,$,$,$,$negactper,$); 
			}
?>			
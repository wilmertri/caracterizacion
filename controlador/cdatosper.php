<?php

	include("modelo/mdatospersona.php");
	$ins = new mdatospersona();


	$pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL; 

	$datos = $ins->selper1($pr);
 
 ?>
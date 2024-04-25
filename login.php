<?php

	include "modelos/xml.php"; 
	
	$un_array = usuarios_xml();
		
	$entrada = "ko";
		
	foreach($un_array["usuario"] as $usuario){		
		if($_POST["user"] == $usuario["user"] && $_POST["password"] == $usuario["password"]){			
			$entrada = "ok";				
		}		
	}	
		
	if($entrada == "ok"){
		header('Location: filtro.php');
	}else{
		header('Location: index.php');
	}

	
?>

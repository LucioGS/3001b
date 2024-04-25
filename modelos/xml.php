<?php


	function llamada_xml($fichero){
		
		$xml = simplexml_load_file($fichero);
		$json = json_encode($xml);
		$un_array = json_decode($json,TRUE);
		return $un_array;
			
	}

	
	function usuarios_xml(){

		$un_array = llamada_xml("modelos/datos_xml/usuarios.xml");
		return $un_array;

	}
	
	
	function preferidos_xml(){
		
		$un_array = llamada_xml("modelos/datos_xml/preferidos.xml");
		return $un_array;

	}



?>
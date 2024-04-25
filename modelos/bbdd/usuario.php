<?php


	function listado_usuarios(){

		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$usuarios = $mbd->query('SELECT * FROM usuarios');
		$array = $usuarios->fetchAll(PDO::FETCH_ASSOC);
		return $array;
		
	}
	



?>
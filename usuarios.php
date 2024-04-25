<?php 

	include "modelos/bbdd/usuario.php"; 
	$un_array = listado_usuarios();	
	include "vistas/usuarios.htm"; 

?>


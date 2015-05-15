<?php 

	function __autoload($class_name){
		require_once $class_name.".php";
	}


	$usuarios = new Usuarios();

	json_encode($usuario->findAll());
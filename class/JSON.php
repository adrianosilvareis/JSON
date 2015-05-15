<?php 
	
	function __autoload($class_name){
		require_once $class_name.".php";
	}

	$usuarios = new Usuarios();


	if(isset($_GET['view'])){
		#codifica objetos em JSON
		echo json_encode($usuarios->findAll());
	}

	if(isset($_GET['insert'])):
		#recebe dados do angularJS
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		
		#inserir usuarios no objeto
		$usuarios->setNome($request->nome);
		$usuarios->setTelefone($request->telefone);

		# Insert
		if($usuarios->insert()){
			echo "Inserido com sucesso!";
		}
	endif;
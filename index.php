<!DOCTYPE html>
<html ng-app="listaTelefonica">
<head>
	<title>JSON</title>
	<meta charset="UTF-8"/>
	<script src="lib/angular/angular.js"></script>
	<script src="js/function.js"></script>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="lib/css/estilo.css"/>
</head>
<body ng-controller="listaTelefonicaCtrl">

	<div class="conteudo">
		<h1>{{titulo}}</h1>

		<form class="form-inline" name contatoForm>
		  <div class="form-group">
		    <label>Nome</label>
		    <input class="form-control" type="text" ng-model="contato.nome" name="nome" placeholder="Nome" ng-required="true" ng-minlength="10"/>
		  </div>
		  <div class="form-group">
		    <label>Telefone</label>
		    <input class="form-control" type="text" ng-model="contato.telefone" name="telefone" placeholder="Telefone" ng-required="true" ng-pattern="/^\d{4,5}-\d{4}$/"/>
		  </div>
		  <button class="btn btn-primary" ng-click="insert(contato)" ng-disabled="contatoForm.$invalid">Adicionar Contato</button>
		</form>

		<div ng-show="contatoForm.nome.$dirty && contatoForm.nome.$error.required" class="alert alert-danger">
				Por favor, preencha o campo nome!
		</div>
		<div ng-show="contatoForm.nome.$dirty && contatoForm.nome.$error.minlength"class="alert alert-danger">
			O campo nome deve ter no mínimo 10 caracteres.
		</div>
		<div ng-show="contatoForm.telefone.$error.required && contatoForm.telefone.$dirty" class="alert alert-danger">
				Por favor, preencha o campo telefone!
		</div>
		<div ng-show="contatoForm.telefone.$error.pattern" class="alert alert-danger">
			O campo telefone deve ter o formato DDDDD-DDDD.
		</div>

		<table class="table table-striped">
			<tr>{{status}}</tr>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Telefone</th>
			</tr>
			<tr ng-repeat="contato in contatos">
				<td>{{contato.id}}</td>
				<td>{{contato.nome | lowercase}}</td>
				<td>{{contato.telefone}}</td>
			</tr>
		</table>
	</div>

</body>
</html>
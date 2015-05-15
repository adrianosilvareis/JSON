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

	<h3>{{titulo}}</h3>
	{{$scope.lista}}
	<table class="table table-striped">
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Telefone</th>
		</tr>
		<tr>
			<td>{{}}</td>

		</tr>
	</table>
</body>
</html>
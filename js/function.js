var app = angular.module("listaTelefonica", []);

app.controller("listaTelefonicaCtrl", function($scope, $http){

	$scope.titulo = "Lista Telefonica";

	$scope.lista = [];

	$http.get("JSON/class/JSON.php", lista).success(function(dados){
		lista = dados;
	});
});
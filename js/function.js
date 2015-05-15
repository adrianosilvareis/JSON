var app = angular.module("listaTelefonica", []);

app.controller("listaTelefonicaCtrl", function($scope, $http){

	$scope.titulo = "Lista Telefonica";

	$scope.contatos = [];

	var carregarContatos = function(){
		$http.get("class/JSON.php?view").success(function(dados){
			$scope.contatos = dados;
		}).error(function(dados, status){
			$scope.message = "Aconteceu um erro " + dados + " / " + status;
		});
	};

	$scope.insert = function(contato){
		var cont = contato;
		delete $scope.contato;
		$scope.contatoForm.$setPristine();
		inserir(cont);
	}

	var inserir = function(contato){
		$http.post('class/JSON.php?insert', contato ).success(function(response) {
	    	$scope.status = response;
	    	carregarContatos();
	    }).error(function() {
	      $scope.status = 'ERROR!';
	    });
	};
	carregarContatos();
});
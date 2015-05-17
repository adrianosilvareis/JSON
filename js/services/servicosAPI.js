app.factory("contatosAPI", function($http, config){
	var _getContatos = function(){
		return $http.get(config.baseUrl + "?view");
	};

	var _saveContato = function(contato){
		return $http.post(config.baseUrl + '?insert', contato );
	};

	return {
		getContatos: _getContatos,
		saveContato: _saveContato
	};
});
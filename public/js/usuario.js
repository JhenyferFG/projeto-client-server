angular.module('app', []).controller('usuarioCtrl', ["$scope", "$http", function($scope, $http) {
    $scope.nome;
    $scope.cpfcnpj;
    $scope.senha; 
    $scope.endereco;
    $scope.telefone;
    $scope.url = '';

    $scope.logar = function(){
        if($scope.url == ''){
            $http.post("api/usuario/login",   {cpfcnpj: $scope.cpfcnpj, senha: $scope.senha }).then(
                function(ret){
                }
            );
        }else{
            $http.post($scope.url+"api/usuario/login",   {cpfcnpj: $scope.cpfcnpj, senha: $scope.senha }).then(
                function(ret){
                }
            );
        }
        
    }

    $scope.cadastrar = function(){
        if($scope.url == ''){
            $http.post("api/usuario/cadastro",   {nome: $scope.nome, cpfcnpj: $scope.cpfcnpj, senha: $scope.senha, endereco: $scope.endereco, telefone: $scope.telefone}).then(
                function(ret){
                }
            );
        }else{
            $http.post($scope.url+"api/usuario/cadastro",   {nome: $scope.nome, cpfcnpj: $scope.cpfcnpj, senha: $scope.senha, endereco: $scope.endereco, telefone: $scope.telefone}).then(
                function(ret){
                }
            );
        }
    }

    $scope.deslogar = function(){
        $scope.cpfcnpj = '39324090003';
        if($scope.url == ''){
            $http.get("api/usuario/logout/"+ $scope.cpfcnpj).then(
                function(ret){
                }
            );
        }else{
            $http.get($scope.url+"api/usuario/logout/"+ $scope.cpfcnpj).then(
                function(ret){
                }
            );
        }
       
    }

    }
]);


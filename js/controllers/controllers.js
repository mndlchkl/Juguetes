// Declare app modulo donde se indican los filtros y servicios.
//El nombre del modulo debe ser igual al que se declaro en el html 'myApp'
var app = angular.module('myApp', ['myApp.services']);
//Crear un controllador en el modulo
//Llamamos el nombre myController con el nombre del html

app.controller('myController', ['$scope', 'PhpService',
   function ($scope, PhpService) {
        $scope.benef = {};
        $scope.enviar = function () {
            var enviar = {};
            enviar = $.param({"enviado": JSON.stringify($scope.benef)}); //convertimos a url string todos los parametros para enviarlos como tipo 'form' 
            PhpService.enviar(enviar);
        };
    }]);


app.controller('Listar_ctrl', ['$scope', 'PhpService',
   function ($scope, PhpService) {
        $scope.reg= {};
        $scope.lista={};
        $scope.listar = function () {
            var listar = {};
            listar = $.param({"listar": JSON.stringify($scope.reg)}); //convertimos a url string todos los parametros para enviarlos como tipo 'form' 
            PhpService.listar(listar);
           
      
        
        };
       
       $scope.cargar = function(){
          PhpService.obtener().$promise.then(function(resultado){
              $scope.lista =  resultado.resultado;
              
          }) ;
           
       };
       
       
    }]);
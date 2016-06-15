
var svc = angular.module('myApp.services', ['ngResource']);


svc.factory('PhpService', ['$resource', function ($resource) {

        return $resource('', null, {
       
            obtener:{method:'GET',url:'php/ListarTodos.php'}
        });
    }
]);

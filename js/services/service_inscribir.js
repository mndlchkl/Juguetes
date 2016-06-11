var svc = angular.module('myApp.services', ['ngResource']);


svc.factory('PhpService', ['$resource', function ($resource) {

        return $resource('', null, {
            enviar: {method: 'POST', url: 'php/PostInscribir2.php', headers: {'Content-Type': 'application/x-www-form-urlencoded'}}
        });
    }
]);

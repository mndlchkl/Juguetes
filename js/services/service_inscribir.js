var svc = angular.module('myApp.services', ['ngResource']);


svc.factory('PhpService', ['$resource', function ($resource) {

        return $resource('', null, {
            enviar: {method: 'POST', url: 'php/POST_Inscribir.php', headers: {'Content-Type': 'application/x-www-form-urlencoded'}}
                    
        });
    }
]);


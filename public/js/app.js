/*Definición de App y de Rutas con Angular Route*/
var plexApp = angular.module('plexApp', [
  'ngRoute',
  'plexAppControllers'
]);


plexApp.config(['$routeProvider', function($routeProvider) {
    
    $routeProvider.
    when('/login', {
        templateUrl: 'partials/login.html',
        controller: 'LoginController'
    }).
    when('/signup', {
        templateUrl: 'partials/signup.html',
        controller: 'SignupController'
    }).
    when('/', {
        templateUrl: 'partials/index.html',
        controller: 'MainController'
    }).
    otherwise({
        redirectTo: '/'
    });

}]);
var plexAppControllers = angular.module('plexAppControllers', []);

plexAppControllers.controller('LoginController', ['$scope', '$http', function ($scope, $http) {

}]);

plexAppControllers.controller('SignupController', ['$scope', '$http', function ($scope, $http) {

}]);

plexAppControllers.controller('MainController', ['$scope', '$http', function ($scope, $http) {
    
}]);
//# sourceMappingURL=app.js.map

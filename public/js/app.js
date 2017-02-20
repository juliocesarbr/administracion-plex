/*Definición de App y de Rutas con Angular Route*/
var plexApp = angular.module('plexApp', [
  'ngRoute',
  'plexAppControllers'
]);

plexApp.config(['$routeProvider', function($routeProvider) {
    
    $routeProvider.
    when('/', {
        templateUrl: 'templates/users/login.html',
        controller: 'LoginController'
    }).
    when('/logout', {
        templateUrl: 'templates/users/logout.html',
        controller: 'LogoutController'
    }).
    when('/dashboard', {
        templateUrl: 'templates/users/dashboard.html',
        controller: 'MainController'
    }).
    otherwise({
        redirectTo: '/'
    });

}]);
//# sourceMappingURL=app.js.map

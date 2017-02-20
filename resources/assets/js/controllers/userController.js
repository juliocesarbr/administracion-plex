var plexAppControllers = angular.module('plexAppControllers', []);

plexAppControllers.controller('LoginController', ['$scope', '$http', '$location', function ($scope, $http, $location) {
	
	angular.extend($scope, {
		doLogin: function (loginForm) {
			console.log(loginForm)
			$http({
				headers: {
					'Content-Type':'application/json'
				},
				url: baseUrl + 'api/auth',
				method: "POST",
				data:{
					email: $scope.login.username,
					password: $scope.login.password
				}
			})
			.then(function (response) {
				//console.log(response);
				$location.path('/dashboard');
			})
			.catch(function(error) {
      			//console.log(error);
    		});
		}	
	});
	

}]);

plexAppControllers.controller('LogoutController', ['$scope', '$http', function ($scope, $http) {

}]);

plexAppControllers.controller('MainController', ['$scope', '$http', function ($scope, $http) {
    
}]);
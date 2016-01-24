

TheHub.controller('loginController', function( $scope, $http ) {

	$scope.login = function() {
		
		var
		data = 
		{
			username : username.value,
			password : password.value
		}

		console.log(data);

	}


});


TheHub.controller('registerController', function( $scope, $http ) {

	$scope.register = function() {
		
		var
		data = 
		{
			username : username.value,
			password : password.value,
			email : email.value
		}

		console.log(data);

	}


});
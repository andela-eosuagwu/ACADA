

TheHub.controller('subscribeController', function( $scope, $http ) {

	$scope.subscribe = function() {

		swal({
			title: "Sweet!",
			text: "A mail will be sent to " + subscribe.value + " shortly",
			imageUrl: "images/thumbs-up.jpg" });
	}

});
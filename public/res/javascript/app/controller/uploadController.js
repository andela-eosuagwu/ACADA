

TheHub.controller('uploadController', function( $scope, $http ) {


	$scope.uploadVideo = function() {

		var data =
		{
			"url" 			: video_url.value,
			"title" 		: video_title.value,
			"category" 		: video_category.value,
			"discription" 	: video_discription.value
		}

		console.log(data);

	}

});
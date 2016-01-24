

TheHub.controller('videoController', function( $scope, $http ) {

	$scope.likeVideo = function() {
		alert('like')
	}

	$scope.deleteVideo = function() {
		swal({
			title: "Are you sure?",
			text: "You want to delete this video",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Yes",
			cancelButtonText: "Cancel",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function(isConfirm) {

			if (isConfirm)
			{
				swal("Deleted!", "Your post has been deleted.", "success");
			}
			else
			{
				swal("Cancelled", "Your post is safe :)", "error");
			}
		});
	}


	$scope.favoriteVideo = function() {
		alert('favorite')
	}



});
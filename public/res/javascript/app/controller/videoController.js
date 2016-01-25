$(document).ready(function(){






	$('.video_like_action').click(function() {
		var
		hidden_input = $(this).parent().siblings('.hidden_input'),
		token		= hidden_input.attr('token'),
		video_id 	= hidden_input.attr('video_id'),
		user_id		= hidden_input.attr('user_id')

		data = {
			url 		: "video/like",
			method 		: "POST",
			user_id 	: user_id,
			_token		: token,
			video_id 	: video_id
		}

		ajaxCall(data)
		console.log(data);
	});
















	$('.video_delete_action').click(function () {

		var
		hidden_input = $(this).parent().siblings('.hidden_input'),
		token		= hidden_input.attr('token'),
		video_id 	= hidden_input.attr('video_id'),
		user_id		= hidden_input.attr('user_id')

		data = {
			user_id 	: user_id,
			_token		: token,
			video_id 	: video_id
		}


		swal({
			title: "Are you sure?",
			text: "You want to delete this video!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Yes, delete it!",
			closeOnConfirm: false
		},
		function(){
			swal("Deleted!", "Your post has been deleted.", "success");
			$(this).parent().parent().parent().hide();
			console.log(data);

		});
	})











	function ajaxCall ( data )
	{
		$.ajax({
			url: data.url,
			type: data.method,
			data: data.parameter,
			success: function (response)
			{
				console.log(response)
			},
			error: function ()
			{
				alert('Are you sure you doing this the right way?');
			},
		});
	}








});

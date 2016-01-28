
$(document).ready(function() {

	$('.like-btn').click(function () {

		var
		status 		= $(this).attr("like-status"),
		like_count	= $(this).html();

		
		if (status === "like")
		{
			$(this).removeClass("like");
			$(this).addClass("dislike");
			$(this).attr("like-status", "dislike");

			likeEpisode()

			like_count = Number(like_count) + 1;

			$(this).text( " " + like_count);
		}

		if (status === "dislike")
		{
			$(this).removeClass("dislike");
			$(this).addClass("like");
			$(this).attr("like-status", "like");

			dislikeEpisode()

			like_count = Number(like_count) - 1;

			$(this).text(" " + like_count);
		}

		if (status === "must_login") 
		{
			window.location = '/auth/login';
		}


	})


	/*
	# Like Episode Function
	*/
	function likeEpisode()
	{
		var
		url 			= "/video/favourite",
		token 			= document.getElementById("token").value,
		method 			= "POST";

	  	var data =
	    {
	        url         	: url,
	        method 			: method,
	        parameter   	:
	        {
	          _token		: token,
	          user_id		: document.getElementById('user_id').value,
	          video_id		: document.getElementById('video_id').value
	        }
	    }
	    console.log(data)
		ajaxCall(data)
	}

	/*
	# Dislike Episode Function
	*/
	function dislikeEpisode()
	{
		var
		url 			= "/video/unfavourite",
		token 			= document.getElementById("token").value,
		method 			= "post";

	  	var data =
	    {
	        url         	: url,
	        method 			: method,
	        parameter   	:
	        {
	          _token		: token,
	          user_id		: document.getElementById("user_id").value,
	          video_id		: document.getElementById("video_id").value
	        }
	    }

	    console.log(data)
		ajaxCall(data)
	}

	/*
	# Ajax
	*/
	function ajaxCall(data)
	{
		$.ajax({
			url		: data.url,
			type	: data.method,
			data	: data.parameter,
			success: function (response)
			{
			},
			error: function()
			{
				alert("Are you sure you doing this the right way?");
			},
		});
	}
})
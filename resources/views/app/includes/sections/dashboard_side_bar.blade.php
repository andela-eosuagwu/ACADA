<div class="col s3 l3 hide-on-med-and-down">

  <ul class="collection with-header">
    <li class="collection-header center-align">
    	<img class="responsive-img user-profile-img" src="{{ asset('res/images/profile.png') }}">
        <h5>{{ $data['user_data'] }}</h6>
        <a class="waves-effect waves-light btn modal-trigger" href="#profileModal">Edit profile</a>
    </li>

  </ul>
</div>


<!-- Modal Structure -->
<!-- <div id="profileModal" class="modal">
    <div class="modal-content">
	    <div class="row">
		    <form class="col s12 l6 auth-container">

		        <div class="row">
		            <div class="input-field col s12">
		                <input value="" id="video_title" type="text" class="validate">
		                <label for="title">Title</label>
		            </div>
		        </div>

		        <div class="file-field input-field">
		            <div class="btn">
		                <span>File</span>
		                <input type="file">
		            </div>
		            <div class="file-path-wrapper">
		                <input class="file-path validate" type="text">
		            </div>
		        </div>

		        <p class="social-btn-container">
		            <a class="social-btn waves-effect waves-light btn" ng-click="updateProfile()">
		                <i class="fa fa-upload"></i>
		                Save
		            </a>
		        </p>
		    </form>
	    </div>
    </div>
    <div class="modal-footer">
    	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" ng-click="uploadVideo()">Cancel</a>
    </div>
</div>
 -->
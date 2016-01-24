  <!-- Modal Structure -->
  <div id="uploadModal" class="modal" ng-controller="uploadController">
    <div class="modal-content">
        <div class="row">
            <form class="col s12 l6 auth-container">

                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="video_title" type="text" class="validate">
                        <label for="title">Title</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="video_url" type="text" class="validate">
                        <label for="disabled">Video Url</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="video_category" type="text" class="validate">
                        <label for="disabled">Category</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="video_discription" type="text" class="validate">
                        <label for="password">Discription</label>
                    </div>
                </div>

                <p class="social-btn-container">
                    <a class="social-btn waves-effect waves-light btn" ng-click="uploadVideo()">
                        <i class="fa fa-upload"></i>
                        Upload
                    </a>
                </p>

            </form>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" ng-click="uploadVideo()">Cancel</a>
    </div>
  </div>






    <!-- Modal Structure -->
    <div id="profileModal" class="modal" ng-controller="profileController">
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
















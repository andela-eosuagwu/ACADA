<!-- Modal Structure -->
<div id="modal1" class="modal" ng-controller="uploadController">
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

    </div>
</div>




















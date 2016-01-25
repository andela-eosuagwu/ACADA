@extends('app.master')

@section('title', 'Login')

@section('content')


	@if(isset($response))
		<script>
			swal("Login Failed!", "invalid username or password!", "error")
		</script>
	@endif()

	<section class="section" ng-controller="loginController">
		<h2 class="font-1 center">Login</h2>

		<div class="row">
			<form action="/auth/login" method="post" class="col s12 l6 auth-container">


				<div class="row">
					<div class="input-field col s12">
					<input
						name="username"
						id="username"
						type="text"
						class="validate"
						required="required" />

					<label for="username">Username</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
					<input
						name="password"
						id="password"
						type="password"
						class="validate"
						required="required" />

					<label for="password">Password</label>
					</div>
				</div>

				<p class="social-btn-container">
					<button class="social-btn waves-effect waves-light btn" ng-click="login()">
						<i class="fa fa-facebook-official"></i>
						Login
					</button>
					<a class="s3 social-btn waves-effect waves-light btn">
						<i class="fa fa-facebook-official"></i>
						GitHub
					</a>
					<a class="s3 social-btn waves-effect waves-light btn">
						<i class="fa fa-facebook-official"></i>
						Twitter
					</a>
					<a class="s3 social-btn waves-effect waves-light btn">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>


				</p>

			</form>
		</div>

	</section>

@endsection
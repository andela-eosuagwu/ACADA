@extends('app.master')

@section('title', 'Register')

@section('content')


	@if(isset($response))
		<script>
			swal("Registration Failed!", "username or password already taken!", "error")
		</script>
	@endif()

	<section class="section" ng-controller="registerController">
		<h2 class="font-1 center">Register</h2>

		<div class="row">
			<form action="/auth/register" method="post" class="col s12 l6 auth-container">

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
						name="email"
						id="email"
						type="email"
						class="validate"
						required="required" />

					<label for="email">Email</label>
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
					<button class="social-btn waves-effect waves-light btn" ng-click="register()">
						<i class="fa fa-facebook-official"></i>
						Register
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
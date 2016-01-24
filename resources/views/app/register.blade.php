@extends('app.master')

@section('title', 'Register')

@section('content')

	<section class="section" ng-controller="registerController">
		<h2 class="font-1 center">Register</h2>

		<div class="row">
			<form class="col s12 l6 auth-container">

				<div class="row">
					<div class="input-field col s12">
						<input  id="username" type="text" class="validate">
						<label for="username">Username</label>
					</div>
				</div>


				<div class="row">
					<div class="input-field col s12">
					<input id="email" type="email" class="validate">
					<label for="email">Email</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
					<input id="password" type="password" class="validate">
					<label for="password">Password</label>
					</div>
				</div>

				<p class="social-btn-container">
					<a class="social-btn waves-effect waves-light btn" ng-click="register()">
						<i class="fa fa-facebook-official"></i>
						Login
					</a>
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
<!DOCTYPE html>
<html lang="en">


<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Login</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">



	<meta name="viewport" content="width=device-width, initial-scale=1">



<link id="{bootstrap-style" href="{{('backend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
<link id="base-style" href="{{('backend/css/style.css')}}" rel="stylesheet">
<link id="base-style-responsive" href="{{('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>



			<style type="text/css">
			body { background: url(backend/img/bg-login.jpg) !important; }
		</style>



</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">

			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<p class="alert-danger">
					<?php
					$messege=Session::get('messege');
					  if($messege)
					  {
						  echo $messege;
						  Session::put('messege',null);
					  }
					 
					?>
					</p>
					<h2>Login to your account</h2>
					<form class="form-horizontal" action="{{url('/admin-dashboard')}}" method="post">
						{{csrf_field() }}
						<fieldset>

							<div class="input-prepend" title="Admin_Email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email" type="text" placeholder="type email address"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="admin_password"  type="password" placeholder="type password"/>
							</div>


							<div class="button-login">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>
				</div>

			</div>




</body>
</html>

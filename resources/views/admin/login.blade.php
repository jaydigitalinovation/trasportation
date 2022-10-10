
<!DOCTYPE html>
<html>
<head>
	<title>ARQX</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/home.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="icon" href="Seqtyimage/logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">


<style type="text/css">

</style>
</head>
<body class="body body1">


	<div class="user-form-part">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6">
					<div class="user-form-logo">
						<a href="index.html"><img src="/Seqtyimage/logo.jpg"></a>
					</div>
					<div class="user-form-card">
						@if(session()->has('error'))
					    <div class="alert alert-success">
					        {{session()->get('error')}}
					    </div>
					    @endif
						<div class="user-form-title">
							<h2>welcome!</h2>
							<p>Use your credentials to access</p>
						</div>
						<form class="user-form" method="post" action="{{url('admin/authenticate')}}">
							@csrf
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Enter your email">
								@if($errors->has('email')) <p class="error_mes">{{ $errors->first('email') }}</p> @endif
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Enter your password">
								@if($errors->has('password')) <p class="error_mes">{{ $errors->first('password') }}</p> @endif
							</div>
							<div class="form-button">
								<button type="submit">login</button>
								<p>Forgot your password?<a href="{{url('admin/forget_password')}}">reset here</a></p>
							</div>
						</form>
					</div>
					<!-- <div class="user-form-remind">
						<p>Don't have any account?<a href="BB_signup.html">register here</a></p>
					</div> -->
					<div class="user-form-footer">
						<p>Organe | © Copyright by <a href="#">Mironcoder</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
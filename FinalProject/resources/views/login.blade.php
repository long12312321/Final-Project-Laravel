<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="font-login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="font-login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-login/css/util.css">
	<link rel="stylesheet" type="text/css" href="font-login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="font-login/images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="post" action="{{route('lo')}}">
                @csrf
					<span class="login100-form-title">
						Member Login
					</span>
							@if (session('notification'))
							<span>{{session('notification')}}</span>
							@endif
							@if (session('forgetPass'))
							<span>{{session('forgetPass')}}</span>
							@endif
							@if (session('message2'))
							<span>{{session('message2')}}</span>
							@endif
							
				
					<div class="form-group" >
						<input class="input100" type="text" name="email" placeholder="Email">
						<div class="alert ">
								@error('email'){{$message}}@enderror	
    					</div>
					</div>
					

					<div class="form-group" >
						<input class="input100" type="password" name="pass" placeholder="Password">
						<div class="alert ">
								@error('pass'){{$message}}@enderror	
    					</div>
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="{{route('getPass')}}">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{route('regis')}}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="font-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="font-login/vendor/bootstrap/js/popper.js"></script>
	<script src="font-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="font-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="font-login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="font-login/js/main.js"></script>

</body>
</html>
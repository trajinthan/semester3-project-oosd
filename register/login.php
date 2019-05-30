<?php include('login-server.php') ?>

<!DOCTYPE html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Add style -->
	<link rel="icon" type="icon" href="images/login.png">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/login_util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="login.php">
					<?php include('errors.php') ?>
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" placeholder="Enter CSE Email" name="email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" placeholder="Enter password" name="password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox"></div>

						<div><a href="forgot_password.php" class="txt1"> Forgot Password? </a></div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login_user"> Login </button>
					</div>
					
					<div class="validate-input" style="position: absolute; bottom: 5px; margin-right: 100px; margin-bottom: 26px">
						<span class="register-text">Don't have an account?</span>
						<span class="register-text"><a href="email.php"> Register here </a></span>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!--  -->
	<script src="jquery/jquery-3.2.1.min.js"></script>
	<script src="js/validate.js"></script>
</body>
</html>
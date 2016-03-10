<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden">
				<span id="logo">IEEE
					<span> eGrid</span>
				</span>
			</h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Sign up</h2>
			</div>
			<!-- sign up form-->
                    <form action = "signuplandpage.php" method="POST">
						<label for="name">Name</label>
						<br/>
							<input type="text" id="name" name="name">
						<br/>
						<label for="email">Email</label>
						<br/>
							<input type="text" id="email" name="email">
						<br/>
						<label for="username">Username</label>
						<br/>
							<input type="text" id="usernameSignUp" name="username">
						<br/>
						<label for="password">password</label>
						<br/>
							<input type="password" id="password" name="password">
						<br/>
						<button type="submit"> Create your account </button>
                        <br/>
                    </form>


			<a href="#">
				<p class="small">Forgot your password?</p>
			</a>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#logo').addClass('animated fadeInDown');
			$("input:text:visible:first").focus();
		});
		$('#username').focus(function() {
			$('label[for="username"]').addClass('selected');
		});
		$('#username').blur(function() {
			$('label[for="username"]').removeClass('selected');
		});
		$('#password').focus(function() {
			$('label[for="password"]').addClass('selected');
		});
		$('#password').blur(function() {
			$('label[for="password"]').removeClass('selected');
		});
	</script>
</body>


</html>

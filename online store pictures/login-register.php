<?php include('php_server.php') ?>
<!DOCTYPE html>

<html>
	<head>
		<title>Registration system PHP and MySQL</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body background="img/loginbg.jpg">

		<div >
			<?php include('errors.php'); ?>
		</div>

			
		        
		<div class="container-dark-login">

			<img src="./img/logo.png" width="240" height="80">

			<form method="post" action="login-register.php">

				<h2>Login</h2> 
							
				<div>
					<label>Username<input type="text" placeholder="Enter Your User Name" name="username" ></label>			
				</div>

				<div>
					<label>Password<input type="password" placeholder="Enter Your Password" name="password"></label>			
				</div>

				<div>
					<button type="submit" class="button" name="loginuser">Login</button><br><br><br>
				</div>			

			</form>

			


			<hr>
				<div>
					<p>Not yet a member?</p>
				</div>
			<hr>
		
			<form method="post" action="login-register.php">

				<h2>Register</h2>

				<div>
					<label>Name<input type="text" name="name"></label>   							
				</div>

				<div>
					<label>Username<input type="text" name="username" ></label>
				</div>

				<div>
					<label>Email<input type="email" name="email"></label>
				</div>

				<div>
					<label>Password<input type="password" name="password_1"></label>
				</div>

				<div>
					<label>Confirm password<input type="password" name="password_2"></label>			
				</div>

				<div>
					<button type="submit" class="button" name="reguser">Register</button>
				</div>

			</form>
			
		</div>


	</body>

</html>
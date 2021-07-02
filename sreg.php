<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<form action="sreg_acc.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800; ">Register</p>
			<div class="input-group">
				<input type="text" id="name" name="name" placeholder="name"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" id="email" required>
			</div>
			<div class="input-group">
				<input type="tel" id="phno" name="phno" placeholder="Phone no."  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="passowrd" required>
           		</div>

			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="slogin.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>
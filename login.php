<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="loginacc.php" method="post">
	<h2>Login to your account</h2><br><br>
		Username: <input type="text" name="name" placeholder="Enter name"><br><br>
		Password: <input type="password" name="password" placeholder="Enter Password"><br><br>
		<input type="submit" value="Login">
	</form>
	<p style="color:red">
	<?php
		if(isset($_REQUEST['message'])){
			echo $_REQUEST['message'];
		}
	?>
	</p>
</body>
</html>

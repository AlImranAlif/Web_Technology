<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
</head>
<body>

	<form action="Second.php" method="post">
		<label for="uname">Username</label>
		<input type="text" name="uname" id="uname" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ""; ?>">
		<span>
			<?php echo isset($_SESSION['usernameErrMsg']) ? $_SESSION['usernameErrMsg'] : ""; ?>
		</span>

		<br><br>

		<label for="password">Password</label>
		<input type="password" name="password" id="password">
		<span>
			<?php echo isset($_SESSION['passwordErrMsg']) ? $_SESSION['passwordErrMsg'] : ""?>
		</span>

		<br><br>
		<input type="submit" value="Login">
	</form>

</body>
</html>
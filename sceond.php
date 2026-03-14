<?php 

session_start();

$method = $_SERVER['REQUEST_METHOD'];
if ($method === "POST") {
	$username = $_POST['uname'];
	$password = $_POST['password'];
	$_SESSION['usernameErrMsg'] = "";
	$_SESSION['username'] = "";
	$_SESSION['passwordErrMsg'] = "";
	$isValid = true;

	if (empty($username)) {
		$_SESSION['usernameErrMsg'] = "Username is empty";
		$isValid = false;
	}
	else {
		$_SESSION['username'] = $username;
	}
	if (empty($password)) {
		$_SESSION['passwordErrMsg'] = "Password is empty";
		$isValid = false;
	}

	if ($isValid) {
		$_SESSION['isLoggedIn'] = true;
		header("Location: Home.php");
	}
	else {
		header("Location: form.php");
	}
} 
else {
	echo "Something went wrong. Please contact the administrator";
}

?>
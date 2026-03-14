<?php
session_start();

if (!isset($_SESSION['isLoggedIn'])) {
    header("Location: lab1.php");
    exit();
}

// demo password
if (!isset($_SESSION['password'])) {
    $_SESSION['password'] = "1234";
}

$msg = "";

if (isset($_POST['changePass'])) {
    if ($_POST['oldpass'] === $_SESSION['password']) {
        $_SESSION['password'] = $_POST['newpass'];
        $msg = "Password changed successfully!";
    } else {
        $msg = "Old password is incorrect!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">

    <script>
        function showSection(id) {
            document.getElementById("home").style.display = "none";
            document.getElementById("profile").style.display = "none";
            document.getElementById("password").style.display = "none";

            document.getElementById(id).style.display = "block";
        }
    </script>
</head>
<body onload="showSection('home')">

<header>This is WebTec Lab Task</header>

<nav>
    <a href="#" onclick="showSection('home')">Home</a>
    <a href="#" onclick="showSection('profile')">Profile</a>
    <a href="#" onclick="showSection('password')">Change Password</a>
    <a href="lab3.php">Logout</a>
</nav>

<!-- HOME -->
<div class="home-content" id="home">
    <h2>Welcome, <?php echo $_SESSION['username']; ?> 🎉</h2>
    <p>This is the home page.</p>
</div>

<!-- PROFILE -->
<div class="home-content" id="profile" style="display:none;">
    <h2>My Profile</h2>
    <p><b>Username:</b> <?php echo $_SESSION['username']; ?></p>
    <p><b>Status:</b> Logged In</p>
</div>

<!-- CHANGE PASSWORD -->
<div class="home-content" id="password" style="display:none;">
    <h2>Change Password</h2>

    <form method="post">
        Old Password<br>
        <input type="password" name="oldpass" required><br><br>

        New Password<br>
        <input type="password" name="newpass" required><br><br>

        <input type="submit" name="changePass" value="Change Password">
    </form>

    <p style="color:green;"><?php echo $msg; ?></p>
</div>

<footer>Thank You</footer>

</body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>This is WebTec Lab Task</header>

<div class="container">
    <h2>Login</h2>

    <form action="lab4.php" method="post">
        Username
        <input type="text" name="uname"
               value="<?php echo $_SESSION['username'] ?? ''; ?>">
        <span><?php echo $_SESSION['usernameErrMsg'] ?? ''; ?></span>

        <br><br>

        Password
        <input type="password" name="password">
        <span><?php echo $_SESSION['passwordErrMsg'] ?? ''; ?></span>

        <br><br>
        <input type="submit" value="Login">
    </form>
</div>

<footer>Thank You</footer>
</body>
</html>

<?php
date_default_timezone_set("Asia/Dhaka");
$defaultExpiry = time() + (7 * 24 * 60 * 60);
if (isset($_POST['set_cookie'])) {

    $color = $_POST['color'];
    if (!empty($_POST['expire_datetime'])) {
        $expireTimestamp = strtotime($_POST['expire_datetime']);
    } else {
        $expireTimestamp = $defaultExpiry;
    }

    setcookie("bg_color", $color, $expireTimestamp, "/");

    header("Location: cookie_example.php");
    exit();
}

$message = "";
if (isset($_POST['destroy_cookie'])) {
    setcookie("bg_color", "", time() - 3600, "/");
    $message = "Cookie destroyed successfully.";
}
$bgColor = $_COOKIE['bg_color'] ?? "#ffffff";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?= $bgColor ?>;
        }
        
        label {
            display: block;
            margin-top: 10px;
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<h2>Cookie Example</h2>
<p><strong>Time zone:</strong> Asia/Dhaka</p>

<div class="box">
    <h3>Set Cookie</h3>
    <form method="post">
        <label>
            Select a color:
            <input type="color" name="color" required>
        </label>

        <label>
            Expire on :
            <input type="datetime-local" name="expire_datetime">
        </label>

        <button type="submit" name="set_cookie">Set Cookie</button>
    </form>
</div>

<div class="box">
    <h3>Destroy Cookie</h3>
    <form method="post">
        <button type="submit" name="destroy_cookie">Destroy Cookie</button>
    </form>
    <p><?= $message ?></p>
</div>

</body>
</html>

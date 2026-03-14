<?php
session_start();
session_destroy();
header("Location: lab1.php");
exit();

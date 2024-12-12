<?php
    require "config/log_In.php";
    if(!isset($_SESSION['login'])) {
        header("Location: authorize.php");
        exit;
    }
?>
<html>
<head>
    <title>Секретна інформація</title>
</head>
<body>
    <h1>Секретна інформація</h1>
    <p>Ця інформація доступна тільки авторизованим користувачам.</p>
    <a href="secretInfo.php">Перегід на secretInfo</a>
</body>
</html>
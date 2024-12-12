<?php
require "../db.php";
    require "config/log_In.php";
    $query_res = mysqli_query($db_server,"SELECT * FROM user_for_session WHERE login='".$_SESSION['login']."' AND password='".$_SESSION['password']."'");
    if (mysqli_num_rows($query_res) == 0) {
        Header("Location: authorize.php");
    }
?>
<html>
    <head><title>Secret info</title></head>
    <body>
        <br>Деяка секрктна інформація<br>
        <h3 class='back'><a href='lab10_6.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
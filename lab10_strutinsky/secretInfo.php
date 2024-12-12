<?php
    require "config/log_In.php";
    print_r($_SESSION);
    if (!($_SESSION['login']=='pit' && $_SESSION['passWord']=='123')){
        Header("Location: authorize.php");
    }
?>
<html>
    <head><title>Secret info</title></head>
    <body>
        <br>Деяка секрктна інформація<br>
        <h3 class='back'><a href='lab10_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>


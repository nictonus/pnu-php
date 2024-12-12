<?php
    require "config/log_In.php";
    setcookie("cookie[1]","Перший");
    setcookie("cookie[2]","Другий");
    setcookie("cookie[3]","Третій");
    if (isset($_COOKIE['cookie'])){
        foreach ($_COOKIE['cookie'] as $name => $value) {
        echo "$name: $value <br>";
    }
}
?>
<html>
    <head><title>cookie_mass</title></head>
    <body>
        <h2>Приклад масиву кукі, який виводить елементи</h2>
        <h3 class='back'><a href='lab10.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
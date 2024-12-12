<?php
    include "scripts/script.php";
?>
<html>
    <head>
        <title>lab6_4</title>
        <style>
    </style>
    <head>
    <body>
        <?php
            echo "<form method='post'>
                <p>Ввидіть ім'я</p>
                <input type='text' class='' name='firstName'>
                <p>Ввидіь фамілію</p>
                <input type='text' class='' name='secondName'>
                <p>Ввидіть логін</p>
                <input type='text' class='' name='login'>
                <p>Ввидіть пароль</p>
                <input type='password' class='' name='pass'>
                <p>Ввидіть підтвердження паролю</p>
                <input type='password' class='' name='passCheck'>
                <p>Ввидіть електрону адресу</p>
                <input type='email' class='' name='emails'><br>
                <hr>
                <input type='submit' value='Відправити'>
            </form>";
            FormChecker($_POST['firstName'],$_POST['secondName'],$_POST['login'],$_POST['pass'],$_POST['passCheck'],$_POST['emails']);
        ?>
            <h3 class='back'><a href='lab6_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
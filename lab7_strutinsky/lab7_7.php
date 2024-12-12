<?php
    include "script/classes.php";
    include "script/script.php";
?>
<html>
    <head>
        <title>lab7_7</title>
    <head>
    <body>
        <h3>Завдання№7</h3>
        <p> 
            Створіть клас користувача, з полями: прізвище, ім'я, вік і e-mail.<br>
            У HTML формі користувач вводить в чотири різні поля: прізвище, ім'я, вік і e-mail. 
            Після натискання клавіші кнопки ГОТОВО створюється об'єкт користувача, з методом, 
            який вносить ці дані в поля об'єкту і далі виводить їх використовуючи другий метод класу користувача.
            У формі передбачити перевірку, що всі поля перед відправленням не порожні.<br>
            Результат:
        </p>
        <?php
            echo "<form method='post'>
                <p>Ввидіть ім'я</p>
                <input type='text' name='name'>
                <p>Ввидіь фамілію</p>
                <input type='text' name='surname'>
                <p>Ввидіть вік</p>
                <input type='text' name='age'>
                <p>Ввидіть електрону адресу</p>
                <input type='email' name='emails'><br>
                <hr>
                <input type='submit' value='Відправити'>
            </form>";
            FormChecker($_POST['name'],$_POST['surname'],$_POST['age'],$_POST['emails']);
        ?>
            <h3 class='back'><a href='lab7_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
<?php
    include "script/classes.php";
    $num1 = new MultiplicationTable(4);
?>
<html>
    <head>
        <title>lab7_5</title>
    <head>
    <body>
        <h3>Завдання№5</h3>
        <p> 
        Створіть клас для виведення таблиці множення для вказаного числа (передавати в конструкторі). 
        Створити окремий метод для обчислення. Далі створити кілька об'єктів даного класу для демонстрації 
        працездатності класу. Вивід оформити у вигляді таблиці.<br>
            Результат:
        </p>
        <?php
            $num1->TableCraetor();
        ?>
            <h3 class='back'><a href='lab7_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
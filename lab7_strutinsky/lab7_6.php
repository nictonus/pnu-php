<?php
    include "script/classes.php";
    $countries = array(new Country ("France","Paris","5.55"),
                      new Country ("Finland","Helsinki","67.97"),
                      new Country ("Fiji","Suva","0.93")
                    );
?>
<html>
    <head>
        <title>lab7_6</title>
    <head>
    <body>
        <h3>Завдання№6</h3>
        <p> 
        Створіть клас країни в якому будуть поля: назва країни, населення і назва столиці
            (дані вказуйте тих країн, перша літера англійської назви яких співпадає з першою 
            літерою Вашого прізвища, якщо такі країни відсутні, тоді імені, потім по-батькові). 
            Створіть масив об'єктів, виведіть кожний з них у таблицю в три рядки по дві комірки в кожному.
            У лівій комірці ім'я елемента, в правій - його значення.<br>
            Результат:
        </p>
        <?php
            echo "<table border=1 cellpadding=4 cellspacing=4>";
            echo "<tr><td>Назва елементу</td><td>Значення елементу</td></tr>";
            foreach ($countries as $country) {
                $country->TableCraetor();
            }
            echo "</table>";
        ?>
            <h3 class='back'><a href='lab7_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
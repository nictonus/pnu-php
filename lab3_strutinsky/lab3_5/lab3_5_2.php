<?php
//    require '../config.php';
include_once "../function/function.php";
?>
<html>
    <head>
        <title>lab3_5_2</title>
    </head>
    <body>
        <?php
        echo "<h4>Для двовимірного масиву NxN, де N=(a%10+1)*2, значення згенерувати випадковим чином з діапазону від 1 до 100. Створити функцію, що виводить переданий в неї двовимірний масив у вигляді таблиці і два одновимірні масиви: елементами першого є мінімальні значення рядків вхідного масиву, а другого — числа, які знаходяться в останньому стовпці.
        </h4>";
        if (!empty($_GET['a_value'])) {
            $a_value = $_GET['a_value'];
            $a_value = ($a_value % 10+1)*2;
            $my_array = array( );
            for ($i=0; $i < $a_value; $i++) { 
                for ($j=0; $j < $a_value; $j++) { 
                    $my_array[$i][$j] = rand(1,100);
                }
            }
            mas_printer_2($my_array, 3, 8, 8);
        }
            echo "
                <form method='get'>
                Ввидіть розмір масиву за (a % 10+1)*2 формулою<br>
                <input type='text' name='a_value'><br>
                <input type='submit' value='Submit'><br></form></div>";
        ?>
        <h3 class='back'><a href='lab3_5.php' >Назад</a></h3>
    </body>
</html>

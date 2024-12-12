<?php
//    require '../config.php';
include_once "../function/function.php";
?>
<html>
    <head>
        <title>lab3_5_1</title>
    </head>
    <body>
        <?php
        echo "<h4>
        Приклад функції що виводить заданий масив чисел разом із індексами в заданому і оберненому 
        порядку. Задану послідовність вказати при виклику функції.(За замовчуваню в сапаючиму)
        </h4>";
        echo "<form method='get'>
        Вибиріть порядо сападючий або зростаючий:<br>
        <input type='radio' name='order'value='".true."'>Зростаючий<br>
        <input type='radio' name='order'value='".false."'>Спадаючий<br>
        <input type='submit' value='Submit'><br></form></div>";
        $order = $_GET['order'];
        $my_array = $rand_num_array = range(0,9);
        mas_printer($my_array,$order);
        ?>
        <h3 class='back'><a href='lab3_5.php' >Назад</a></h3>
    </body>
</html>
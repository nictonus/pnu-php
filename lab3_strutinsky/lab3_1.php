<?php
//    require '../config.php';
include_once "function/function.php";
?>
<html>
    <head>
        <title>lab3_1</title>
    </head>
    <body>
        <?php
        echo "<h4>Приклад виконання функції 'create_table2' з іншого файлу<h4>";
            $my_array = array('Рядок 1', 'Рядок 2','Рядок 3');
            create_table2($my_array, 3, 8, 8);
        ?>
        <h3 class='back'><a href='lab3_index.php' >Назад</a></h3>
    </body>
</html>

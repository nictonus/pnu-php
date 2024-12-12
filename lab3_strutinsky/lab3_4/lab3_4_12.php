<?php
//    require '../config.php';
include_once "../function/function.php";
?>
<html>
    <head>
        <title>lab3_4_12</title>
    </head>
    <body>
        <h4>Таблиця коринів</h4>
        <?php
            $num_array = range(1,10);
            create_table($num_array);
        ?>
        <h3 class='back'><a href='lab3_4.php' >Назад</a></h3>
    </body>
</html>
<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab3_4_14</title>
    </head>
    <body>
        <h4>Дано натуральне число N=10. Знайти суму та кількість усіх членів ряду S=1+1/2+1/3+...+1/N.</h4>
        <?php 
            $n_num = 10;
            $sum = 0.0;
            for ($i=1; $i < $n_num; $i++) { 
                $sum += (1/$i);
            } 
            echo "Сума ряду S = ".$sum."<br>Кількість усіх членів ряду S = ".($i);
        ?>
        <h3 class='back'><a href='lab3_4.php' >Назад</a></h3>
    </body>
</html>
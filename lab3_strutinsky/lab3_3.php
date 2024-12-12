<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab3_3</title>
    </head>
    <body>
        <?php
        echo "<h4>Генерація випадкових елементі в діапазоні 1->10 з піднесенням до степені<h4>
            <h4>які запесуються в мисив, вивід елементів через foreach</h4>";
        $rand_num_array = range(1,5);
            foreach ($rand_num_array as $current) {
                $rand_num_array[$current] = mt_rand(1,10);
                echo $rand_num_array[$current]."<sup>2</sup> = ".($rand_num_array[$current]**2)."<br>";
            }
        ?>
        <h3 class='back'><a href='lab3_index.php' >Назад</a></h3>
    </body>
</html>
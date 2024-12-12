<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab3_2</title>
    </head>
    <body>
        <?php
            echo "<h4>Генерація випадкових елементі в діапазоні 1->'Вказане число'+10<h4>
                <h4>які запесуються в мисив</h4>";
            if(empty($_POST['max_rand_num'])){
                $max_rand_num = 100;
            }else{
                $max_rand_num = $_POST['max_rand_num'];
            }
            $array_summ = 0;
            $rand_num_array = range(1,10);
            for ($i=0; $i < 10; $i++) {
                $rand_num_array[$i] = mt_rand(1,$max_rand_num+10);
                $array_summ += $rand_num_array[$i];
                echo "Число під індексом ".$i." = ".$rand_num_array[$i]."<br>";
            }
            $array_average = $array_summ / sizeof($rand_num_array);
            sort($rand_num_array);
            $array_min = $rand_num_array[0];
            $array_max = $rand_num_array[sizeof($rand_num_array)-1];
            echo "Середнє значення = $array_average;<br> Мінімальне значення = $array_min;<br> Максимальне значення = $array_max;<br>";
            echo "<div>
            <form method='post'>
            <input type='text' name='max_rand_num'><br>
            <input type='submit' value='Submit'><br></form></div>";
        ?>
        <h3 class='back'><a href='lab3_index.php' >Назад</a></h3>
    </body>
</html>
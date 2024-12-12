<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab3_4_13</title>
    </head>
    <body>
        <h4>Знайти та роздрукувати середнє арифметичне квадратів усіх цілих чисел від a до b.</h4>
        <?php
            echo "<div>
            <form method='post'>
            Максимальне значення(b):<br>
            <input type='text' name='num_max'><br>
            Мінімальне значення(a):<br>
            <input type='text' name='num_min'><br>
            <input type='submit' value='Submit'><br></form></div>";
            if(empty($_POST['num_max']+1)){
                $num_max = 10;
            }else{
                $num_max = $_POST['num_max'];
            }
            if(empty($_POST['num_min']+1)){
                $num_min = 3;
            }else{
                $num_min = $_POST['num_min'];
            }
            $average = 0;
            for ($i = $num_min; $i < $num_max ; $i++) { 
                $average += ($i**2);
            }
            echo "Середнє значення = ".($average/$i)."<br>";
        ?>
        <h3 class='back'><a href='lab3_4.php' >Назад</a></h3>
    </body>
</html>
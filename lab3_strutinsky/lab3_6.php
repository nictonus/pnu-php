<?php
//    require '../config.php';
include_once "function/function.php";
?>
<html>
    <head>
        <title>lab3_6</title>
    </head>
    <body>
        <h4>Перевірка натурального числа</h4>
        <?php
            $data=$_GET['num'];
            $num = 0 + $data;
            if (is_int($num) && $num > 0){
                echo "Дане число натуральне: ".$num."<br>";
                nut_num($num);
            }else{
                echo "Дане число не є натуральним: ".$num."<br>";
            }
            echo "<div>
            <form action='lab3_6.php' method='get'>
                Введіть натуральне число<br>
                <input type='text' name='num'><br>
                <input type='submit' value='Submit'><br>
            </form>
            </div>";
        ?>
        
        <h3 class='back'><a href='lab3_index.php' >Назад</a></h3>
        <?php
            include_once "lab3_7.php";
        ?>
    </body>
</html>
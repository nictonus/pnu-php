<?php

?>
<html>
    <head>
        <title>lab2_3</title>
    </head>
    <body>
        <?php
            $x_num = $_POST['x_num'];
            $y_num = $_POST['y_num'];
            echo "<div>
                Існують такі варіанти:
                xy > 0<br>
                y < 0 та x > 3y<br>
                Та варіант який не відповідає попериднів потребам<br>
                <form method='post'>
                    <p>Число x</p>
                    <input type='text' name='x_num'><br>
                    <p>Число y</p>
                    <input type='text' name='y_num'><br>
                    <input type='submit' value='Submit'><br>
                </form>
            </div>";
            if ($x_num*$y_num > 0) {
                echo"Так як $x_num * $y_num > 0, то відповідь<br>$x_num - $y_num = ".$x_num - $y_num."<br>";
            }elseif ($y_num < 0 & $x_num > 3 * $y_num){
                echo"Так як $y_num < 0 та $x_num > 3 * $y_num, то відповідь<br>$x_num<sup>2</sup> - ($y_num / $x_num) = ".$x_num**2 - $y_num / $x_num."<br>";
            }else{
                echo"інакше<br>3 * $x_num * $y_num - $x_num<sup>2</sup> - $y_num<sup>2</sup> = ". 3 * $x_num * $y_num - $x_num**2 - $y_num**2 ."<br>";
            }
        ?>
        <h3 class='back'><a href='lab2_index.php'>Назад</a></h3>
    </body>    
</html>
<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab4_1</title>
    </head>
    <body>
        <?php
            $cubic_array = array();
            $square_array = array();
            echo "Масив квадратів від 10 до 20 <br>";
            for ($i= 10; $i < 21; $i++) { 
                $square_array[$i] = $i**2;
                echo "[$i] = ".$square_array[$i]."; ";
            }
            echo "<br>Масив кубів від 0 до 10 <br>";
            for ($i= 0; $i < 11; $i++) { 
                $cubic_array[$i] = $i**3;
                echo "[$i] = ".$cubic_array[$i]."; ";
            }
            echo "<br>Об'єднання двух масивів<br>";
            $array_merge = array_merge($cubic_array, $square_array);
            for ($i= 0; $i < count($array_merge); $i++) {
                echo "[$i] = ".$array_merge[$i]."; ";
            }
        ?>
        <h3 class='back'><a href='lab4_index.php' >Назад</a></h3>
    </body>
</html>

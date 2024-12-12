
<?php
    require '../config.php';
    $rand_num = rand(0,3);
    $rand_num_array = array(0 =>rand(0,5),1 =>rand(0,5),2 =>rand(0,5),3 =>rand(0,5),);
    $rand_q = $rand_num_array[$rand_num];
 ?>
<html>
    <title>PHP</title> 
    <body>
    <?php
        echo"  
            <h3>Приклади з теорії</h3>
            <a href='lab2_1.php'>lab2_1</a><br>
            <a href='lab2_2.php'>lab2_2</a><br>
            <a href='lab2_3.php'>lab2_3</a><br>
            <a href='lab2_4.php?rand_num=".$rand_num."'>lab2_4</a><br>
            <a href='lab2_5.php?rand_num1=".$rand_num_array[0]."&rand_num2=".$rand_num_array[1]."&rand_num3=".$rand_num_array[2]."&rand_num4=".$rand_num_array[3]."&rand_q=".$rand_q."'>lab2_5</a><br>
            <h3 class='back'><a href='../'>Повернутися в меню</a><br></h3>
            </div>
        "
    ?>
    </body>
</html>

<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab2_1</title>
    </head>
    <body>
        <?php
            $x_num = $_POST['x_line'];
            $y_num = $_POST['y_line'];
            $z_num = $_POST['z_line'];
            echo "<div>
                <form method='post'>
                    <p>Число x</p>
                    <input type='text' name='x_line'><br>
                    <p>Число y</p>
                    <input type='text' name='y_line'><br>
                    <p>Число z</p>
                    <input type='text' name='z_line'><br>
                    <input type='submit' value='Submit'><br>
                </form>
            </div>";
            echo "F = (1 - $x_num/$y_num)**2 + $z_num = ".((1-($x_num/$y_num))**2) + $z_num;
        ?>
        <h3 class='back'><a href='lab2_index.php'>Назад</a></h3>
    </body>
</html>

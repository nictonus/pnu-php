<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab2_1</title>
    </head>
    <body>
        <?php
            $variable = $_POST['formvariable'];
            $num_1 = $_POST['second_num'];

            echo "<div>
            <form method='post'>
            <input type='text' name='formvariable'><br>
            <input type='text' name='second_num'><br>
            <input type='submit' value='Submit'><br></form></div>";
            echo "$variable - $num_1 = ".$variable - $num_1."<br>";
            echo "$variable * $num_1 = ".$variable * $num_1."<br>";
            echo "$variable % $num_1 = ".$variable % $num_1;
        ?>
        <h3 class='back'><a href='lab2_index.php' >Назад</a></h3>
    </body>
</html>

<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab4_3</title>
    </head>
    <body>
    <h1> Використання циклу foreach </h1> 
    <?php
        $my_topic = array('2' => "Помада",
                          '3' => "Туш",
                          '4' => "Лак для нігтів",
                          '5' => "Пудра для леця", );
        $my_topic_swap = array();
        foreach ($my_topic as $key => $value) {
        echo "<b>[$key]: $value;</b><br>";
        $my_topic_swap[$value] = $key;
        }
        foreach ($my_topic_swap as $key => $value) {
            $my_topic_swap[$value] = $key;
            echo "<b>[$key]: $value;</b><br>";
        }
    ?>
        <h3 class='back'><a href='lab4_index.php' >Назад</a></h3>
    </body>
</html>
<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab4_5</title>
    </head>
    <body>
        <h2> Завдання№1 </h2>
        <?php

            $my_topic = array("Перше речення",
                            "Друге речення",
                            "Третє речення",
                            );
            for ($i = 0; $i < count($my_topic); $i++) {
                echo "<b>[$i]: $my_topic[$i];</b><br>";
            }
            for ($i = 0; $i < count($my_topic); $i++) {
                if($i == 0){
                    $temp = $my_topic[0];
                    $my_topic[0] = $my_topic[count($my_topic)-1];
                    $my_topic[count($my_topic)-1] = $temp;
                }
                echo "<b>[$i]: $my_topic[$i];</b><br>";
            }
        ?>
        <h2> Завдання№2 </h2>
        <?php
            $region = array("transcarpathia_cities" => array(
                        "rakhiv"  =>  array("Рахів",15536,),
                        "uzhhorod"  =>  array("Ужгород",115449,),
                        "vinohradiv"  =>  array("Виноградів",25317,),
                    ),
                    "lviv_cities" => array(
                        "lviv"  =>  array("Львів",721301,),
                        "stebnik" => array("Стебник", 20200,),
                        "drohobych" => array("Дрогобич", 73682,),
                    ),
                    "сhernihiv_cities" => array(
                        "сhernihiv"  =>  array("Чернігів",282747),
                        "novgorod-siverskyi"  =>  array("Новгород-Сіверський",65830),
                        "nizhin"  =>  array("Ніжин",65830),
                    ));
            $max_value = PHP_INT_MIN;
            $summ = 0;
            $temp = 0;
            foreach ($region as $key => $current) {
                foreach ($region[$key] as $i => $count) {
                    foreach ($region[$key][$i] as $j => $count) {
                        if (is_int($count)&$max_value < $count) {
                            $max_value = $count;
                        }
                    }
                }
            }
            echo "<table border=1 cellpadding=4 cellspacing=4><br>";
            echo "<tr>";
            foreach ($region as $key => $value) {
                switch ($key) {
                    case "transcarpathia_cities":
                        echo "<td colspan='3'>Закаратська обл.</td>";
                        break;
                    case "lviv_cities":
                        echo "<td colspan='3'>Львівська обл.</td>";
                        break;
                    case "сhernihiv_cities":
                        echo "<td colspan='3'>Чернівкцька обл.</td>";
                        break;
                    default:
                        echo "ітератор вийшов за межі масиву";
                        break;
                }
            }
            echo"</tr>\n";
            foreach ($region as $key => $current) {
                foreach ($region[$key] as $i => $count) {
                    foreach ($region[$key][$i] as $j => $count) {
                        if (is_string($count)) {
                            echo "<td>".$count."</td>";
                        }
                    }
                }
            }
            echo "<tr>";
            foreach ($region as $key => $current) {
                foreach ($region[$key] as $i => $count) {
                    foreach ($region[$key][$i] as $j => $count) {
                        if (is_int($count)) {
                            if($max_value == $count){
                                echo "<td style='color: blue'>".$count."</td>";
                            }else{
                                echo "<td>".$count."</td>";
                            }
                        }
                    }
                }
            }
            echo"</tr>\n";
            echo "<tr>";
            foreach ($region as $key => $value) {
                foreach ($region[$key] as $i => $count) {
                    foreach ($region[$key][$i] as $j => $count) {
                        if (is_int($count)) {
                            $temp++;
                            $summ += $count;
                            if($temp > 2){
                                $temp = 0;
                                echo "<td colspan='3'>".$summ."</td>";
                                $summ = 0;
                            }

                        }
                    }
                }
            }
            echo "</tr>\n";
            echo '</table>';
        ?>
        <h3 class='back'><a href='lab4_index.php' >Назад</a></h3>
    </body>
</html>
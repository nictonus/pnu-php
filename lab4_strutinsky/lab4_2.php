<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab4_2</title>
    </head>
    <body>
    <h1> Використання циклу foreach </h1> 
    <?php
        $names["Бойчук"]="Іван";
        $names["Мельник"]="Борис"; 
        $names["Швець"]="Антон";
        $names["54"]="45";
        $names["qwerty"]="qwerty";
        $names[" = 16"]="4*4";
        foreach ($names as $key => $value) {
        echo "<b>$value $key</b><br>";}
    ?>
        <h3 class='back'><a href='lab4_index.php' >Назад</a></h3>
    </body>
</html>
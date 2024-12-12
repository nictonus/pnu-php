<?php
    include "scripts/script.php";
    $file = "files/text.txt";
?>
<html>
    <head>
        <title>lab6_1</title>
    <head>
    <body>
        <h3>Завдання№1</h3>
        <p>весь заданий текст;</p>
        <?php
            textPrint($file);
        ?>
        <h3>Завдання№2</h3>
        <p>тільки назви відкриваючих тегів;</p>
        <?php
            TegPrint($file);
        ?>
        <h3>Завдання№3</h3>
        <p>назви відкриваючих тегів разом і кутовими дужками;</p>
        <?php
            TegPrintWithBrackets($file);
            PrintAllTegWords($file);
        ?>
            <h3 class='back'><a href='lab6_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
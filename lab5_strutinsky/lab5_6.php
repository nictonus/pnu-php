<?php
    include "scripts/script.php";
?>
<html>
    <head>
        <title>lab5_6</title>
    <head>
    <body>
    <h1>Завдання №1</h1>
        <p>Потроїти кожне входження символу «P» в кожному слові.</p>
        <?php
            Triad_letter_P("files/ferents_vladyslav_text.txt");
        ?>
        <h1>Завдання №2</h1>
        <p>Вивести на екран речення у якому знаходиться слово «програмування».</p>
        <?php
            Found_word("files/text_variant_13.txt");
        ?>
        <h1>Завдання №3</h1>
        <p>У тексті між словами вставити замість «,» символ «;».</p>
        <?php
            Replace_coma_to_semicolon("files/text_variant_14.txt");
        ?>
            <h3 class='back'><a href='lab5_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
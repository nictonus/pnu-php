<?php
    include "scripts/script.php";
?>
<html>
    <head>
        <title>lab5_5</title>
    <head>
    <body>
        <h1>Завдання №1</h1>
        <p>Функція, що виводить слова заданого тексту (файл last_name_text.txt) у алфавітному 
            порядку (для розбиття тексту на окремі елементи можна скористатися функцією explode)</p>
        <?php
            Sort_text("files/ferents_vladyslav_text.txt");
        ?>
        <h1>Завдання №2</h1>
        <p>Задано текст (файл last_name_text.txt). Вивести список двох слів, які 
            найчастіше зустрічаються у тексті.</p>
        <?php
            Word_counter("files/ferents_vladyslav_text.txt");
        ?>
        <h1>Завдання №3</h1>
        <p>Задано текст (файл last_name_text.txt). Вивести найдовше слово тексту і його довжину, 
            якщо декілька слів мають найбільшу довжину, то вивести всі з них.</p>
        <?php
            Found_longest_word("files/ferents_vladyslav_text.txt");
        ?>        
        <h1>Завдання №4</h1>
        <p>Задано текст (файл last_name_text.txt). Вивести найкоротше слово тексту і його довжину, 
            якщо декілька слів мають найбільшу довжину, то вивести всі з них.</p>
        <?php
            Found_shortest_word("files/ferents_vladyslav_text.txt");
        ?>
        <h1>Завдання №5</h1>
        <p>Знайти в тексті (файл last_name_text.txt) всі слова, які починаються на першу літеру вашого імені. 
            Якщо таких слів не буде, то додайте до тексту будь-яке речення, яке містить необхідні слова.</p>
        <?php
            Found_name_letter_starts_word("files/ferents_vladyslav_text.txt");
        ?>
        <h1>Завдання №6</h1>
        <p>В тексті (файл last_name_text.txt) замінити всі малі літери “о” на великі “О”.</p>
        <?php
            Replace_letter_o_to_uppcase("files/ferents_vladyslav_text.txt");
        ?>
        <h1>Завдання №7</h1>
        <p>Створити РНР-сценарій, який випадковим чином виводить абзац тексту з п’яти 
            заданих абзаців (текст візьміть зі свого варіанту + текст із наступних 4-х варіантів).</p>
        <?php
            Rund_text_varible_printer(rand(0,3));
        ?>
            <h3 class='back'><a href='lab5_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
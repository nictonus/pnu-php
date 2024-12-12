<?php
    include "scripts/script.php";
    $file = "files/text.txt";
?>
<html>
    <head>
        <title>lab6_2</title>
    <head>
    <body>
        <p>У тексті ( файл text.txt), використовуючи регулярні вирази, знайти всі входження 
            слова незалежно від регістру (в тому числі слова, частиною яких є вказане слово): </p>
        <h3>Завдання№1</h3>
        <p>тег</p>
        <?php
            PrintAllTegWords($file);
        ?>
        <h3>Завдання№2</h3>
        <p>HTML</p>
        <?php
            PrintAllHTMLWords($file);
        ?>
        <h3>Завдання№3</h3>
        <p>частини слова, введеної в однорядкове текстове поле</p>
        <?php
            echo  "<form method='get'>
            <input type='text' name='word' value=''>
            <input type='submit' value='Готово'>
        </form>
        ";
        PrintAllUserWords($file,$_GET['word']);
        ?>
            <h3 class='back'><a href='lab6_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
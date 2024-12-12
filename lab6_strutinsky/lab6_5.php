<?php
    include "scripts/script.php";
    $file = "files/text.txt";
?>
<html>
    <head>
        <title>lab6_5</title>
    <head>
    <body>
        <?php
            echo "<form method='post'>
            <p>Почтовий індикс (Попереду 'V-' або 'I-' потім 5 цифр)</p>
            <input type='text' name='index' value=''>
            <hr>
            <input type='submit' value='Відправити'>
            ";
            CheckMailIndex($_POST['index']);
        ?>
            <h3 class='back'><a href='lab6_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
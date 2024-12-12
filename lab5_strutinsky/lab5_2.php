<?php
    include "scripts/script.php";
?>
<html>
    <head>
        <title>lab5_2</title>
    <head>
    <body>
        <?php
        echo  "<form method='get'>
                <input type='text' name='file' value='files/ex1.txt'>
                <input type='submit' value='Готово'>
            </form>
            ";
            Found_file($_GET['file']);
        ?>
            <h3 class='back'><a href='lab5_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
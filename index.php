<?php
require 'config.php';
?>
<html>
<title> My PHP</title> 
    <form action="lab1_strutinsky/lab1.php">
        <table border=0><tr><td>Login:</td><td><input type='text' name='ULogin'></td><tr>
        <tr><td>Пароль:</td><td><input type='password' name='Passw'></td><tr>
        <tr><td><input type='submit' value='Go' name='Send'></td><td>&nbsp</td></td></tr> </table>
    </form>
    <?php
    $zm=10;
    echo "<h2>Програмування мовою PHP</h2>
    <h3>Перелік лабораторних робіт Струтинського Володимира</h3>
    <h4>Варіант №12</h4>
    <div class=list>
        <a href=lab1_strutinsky/lab1.php?zm=$zm>lab1.php</a><br>
        <a href=lab2_strutinsky/lab2_index.php>lab2.php</a><br>
        <a href=lab3_strutinsky/lab3_index.php?zm=".$zm.">lab3.php</a><br>";
    echo "</div>";
    echo "zm=$zm <br>";
    echo "Zm=$Zm <br>";
    echo 'zm=$zm <br>';
    ?>

</html>

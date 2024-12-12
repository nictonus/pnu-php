<?php
    include "script/classes.php";
    $student1 = new Student;
    $student1 -> name = "Vladyslav";
    $student1 -> surname = "Ferents";
    $student1 -> group = "IPZ-24";
    $student2 = new Student;
    $student2 -> name = "Mary";
    $student2 -> surname = "Shevchenko";
    $student2 -> group = "IPZ-22";
    $student3 = new Student;
    $student3 -> name = "Maxim";
    $student3 -> surname = "Galkin";
    $student3 -> group = "IPZ-41";
    $classesArray = array($student1,$student2,$student3,$student4);
?>
<html>
    <head>
        <title>lab7_1</title>
    <head>
    <body>
        <h3>Завдання№1</h3>
        <p> 
            1.створити клас Student з властивостями name, suname, group;<br> 
            2.створити три об'єкти класу Student;<br>
            3.задати довільні значення властивостям для кожного з об'єктів.<br>
            Перевірка створення класу:
        </p>
        <?php
        for ($i=0; $i < count($classesArray); $i++) { 
            if (is_object($classesArray[$i])) {
                echo "Клас student".$i+1 ." існує<br>";
            }else{
               echo "Клас student".$i+1 ." не існує<br>";
            }
        }
        ?>
            <h3 class='back'><a href='lab7_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
<?php
    include "script/classes.php";
    $student1 = new Student2("Vladyslav","Ferents","IPZ-24");
    $student2 = new Student2("Mary","Shevchenko","IPZ-22");
    $student3 = new Student2("Maxim","Galkin","IPZ-41");
    $classesArray = array($student1,$student2,$student3,$student4);
?>
<html>
    <head>
        <title>lab7_4</title>
    <head>
    <body>
        <h3>Завдання№4</h3>
        <p> 
            1.в класі Student описати метод __clone ();<br> 
            2.метод __clone повинен задавати початкові значення властивостей 
                за замовчуванням при копіюванні об'єктів;<br>
            3.створити сьомий об'єкт, скопіювавши один з наявних об'єктів.<br>
            Перевірка створення Функції:
        </p>
        <?php
        for ($i=0; $i < count($classesArray); $i++) { 
            if (is_object($classesArray[$i])) {
                $classesArray[$i]->GetInfo();
            }else{
               echo "Клас student".$i+1 ." не існує<hr>";
            }
        }
        $student4 = clone $student3;
        $student4->GetInfo();
        ?>
            <h3 class='back'><a href='lab7_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
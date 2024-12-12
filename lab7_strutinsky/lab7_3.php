<?php
    include "script/classes.php";
    $student1 = new Student2("Vladyslav","Ferents","IPZ-24");
    $student2 = new Student2("Mary","Shevchenko","IPZ-22");
    $student3 = new Student2("Maxim","Galkin","IPZ-41");
    $classesArray = array($student1,$student2,$student3,$student4);
?>
<html>
    <head>
        <title>lab7_3</title>
    <head>
    <body>
        <h3>Завдання№3</h3>
        <p> 
            1.в класі Student необхідно описати конструктор;<br> 
            2.конструктор повинен задавати початкові значення властивостей name, suname, group;<br>
            3.створити крім існуючих трьох об’єктів класу Student, додатково ще три об'єкти 
            з використання конструктора.<br>
            Перевірка створення Функції:
        </p>
        <?php
        for ($i=0; $i < count($classesArray); $i++) { 
            if (is_object($classesArray[$i])) {
                $classesArray[$i]->GetInfo();
            }else{
               echo "Клас student".$i+1 ." не існує<br>";
            }
        }
        ?>
            <h3 class='back'><a href='lab7_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
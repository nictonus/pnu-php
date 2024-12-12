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
        <title>lab7_2</title>
    <head>
    <body>
        <h3>Завдання№2</h3>
        <p> 
            1.в класі Student потрібно описати метод getInfo();<br> 
            2.метод getInfo() повинен виводити значення властивостей об'єкта;<br>
            3.викликати метод getInfo() для кожного об'єкта.<br>
            Перевірка створення Функції:
        </p>
        <?php
        for ($i=0; $i < count($classesArray); $i++) { 
            if (is_object($classesArray[$i])) {
                $classesArray[$i]->GetInfo();
                echo "<br>";
            }else{
               echo "Клас student".$i+1 ." не існує<br>";
            }
        }
        ?>
            <h3 class='back'><a href='lab7_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
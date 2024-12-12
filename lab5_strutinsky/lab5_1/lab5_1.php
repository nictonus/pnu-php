<html>
<head>
<title>lab5_1</title>
 </head>
 <body>
    <h3>Приклад 1:</h3>
    <?php
        include 'top1.php'; 
        echo "<H2>Частина у фалі lab5_1.php</H2>"; 
    ?>
    <h3>Приклад 2:</h3>
    <?php
        $string = include 'top2.php'; 
        echo "<br>Вивід рядок за допомогою return: $string<br>"; 
    ?>
    <h3>Приклад 3:</h3>
    <?php 
        include 'top3.php'; 
        $file = "top2.php"; 
        infoFile($file);
    ?>
    <h3>Приклад 4:</h3>
    <?php 
        include 'top4.php'; 
        $file = "ex1.txt"; 
        filereader($file);
    ?>
        <h3>Приклад 8:</h3>
    <?php 
        include 'top8.php';
        // $file = "ex1.txt";
        // File_up_load($file);
    ?>  
 </body> 
</html> 

<?php
    header('Content-Type: text/html; charset=utf-8');
    #require '../config.php';
    require "../db.php";
    $selectTitle=$_GET['selectTitl'];
    $i == 0;
?>
<html>
    <head>
        <title>topic</title>
        <meta charset=utf-8>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    </head>
    <body>
        <?php
        echo "<b>$selectTitle</b><br><br>";
            $query_res = mysqli_query($db_server,"select * from ferents_news WHERE title='$selectTitle' ORDER BY topic ASC");
            if (mysqli_num_rows($query_res) > 0) {
                while($row = mysqli_fetch_row($query_res)) {
                  echo $row[4]." <br><br>".$row[3];
                }
            } else {
                echo "0 results";
            }
        ?>
        <h3 class='back'><a href='lab9_4.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
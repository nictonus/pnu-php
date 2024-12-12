<?php
    header('Content-Type: text/html; charset=utf-8');
    #require '../config.php';
    require "../db.php";
    $file = "file/news.txt";
    $selectTopic = $_GET['selectTopic'];
    $i == 0;
?>
<html>
    <head>
        <title>topic</title>
        <meta charset=utf-8>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <style>
            .title{
                color: black;   
            }
            a{
                text-decoration: none;
            }
            a:hover{
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <?php
        
        if ($selectTitl != "true") {
            echo "<b>Головне</b><br>";
            $query_res = mysqli_query($db_server,"select * from ferents_news ORDER BY time ASC");
        }else{
            echo "<b>$selectTopic</b><br>";
            $query_res = mysqli_query($db_server,"select * from ferents_news WHERE topic='$selectTopic' ORDER BY topic ASC");
        }
        if (mysqli_num_rows($query_res) > 0) {
            while($row = mysqli_fetch_row($query_res)) {
               echo $row[4]." <a href='news.php?selectTitl=".$row[2]."'>".$row[2]."</a><br>"; 
            }
        } else {
            echo "0 results";
        }
        ?>
        <h3 class='back'><a href='lab9_4.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
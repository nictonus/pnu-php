<?
    #require '../config.php';
    require "../db.php";
    $file = "file/news.txt";
    $i == 0;
?>
<html>
    <head>
        <title>lab9</title>
        <meta charset=utf-8>
        <meta content="text/html;" charset="UTF-8" http-equiv="Content-Type">
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
            echo "<a href='topic.php?selectTopic=true'>Головне</a><br><br>";
            $query_res = mysqli_query($db_server, "select * from ferents_news ORDER BY time ASC");
            if (mysqli_num_rows($query_res) > 0) {
                while($row = mysqli_fetch_row($query_res)) {
                    if ($i > 2) {
                        $topic = $row[1];
                        break; 
                    }
                    echo "<a class='title' href='news.php?selectTitl=".$row[2]."'>".$row[2]."</a><br>";  
                   $i++;
                }
                $query_res = mysqli_query($db_server,"select * from ferents_news ORDER BY topic ASC");
                while($row = mysqli_fetch_row($query_res)) {
                    if ($topic != $row[1]){
                        $topic = $row[1];
                        echo "<br><a href='topic.php?selectTopic=".$topic."'>".$topic."</a><br><br>";
                    }
                   echo "<a class='title' href='news.php?selectTitl=".$row[2]."'>".$row[2]."</a><br>"; 
                   $i++;
                }
            } else {
                echo "0 results";
            }
        ?>
        <h3 class='back'><a href='lab9_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
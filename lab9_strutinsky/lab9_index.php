<?php
    require '../config.php';
    require "../db.php";
    $file = "file/news.txt";
    //mysqli_query($db_server, "drop table ferents_news");
    mysqli_query($db_server, "CREATE TABLE IF NOT EXISTS ferents_news(id SERIAL PRIMARY KEY, 
    topic NVARCHAR(500),title NVARCHAR(500), content TEXT, time DATETIME)");
     mysqli_query($db_server,"ALTER TABLE ferents_news CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci");
    // mysqli_query($db_server, "CREATE TABLE IF NOT EXISTS ferents_news(id SERIAL PRIMARY KEY, 
    // topic NVARCHAR(50),title NVARCHAR(50), content TEXT, time DATETIME)");
    // mysqli_query($db_server,"ALTER TABLE ferents_news CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci");
    $query_res = mysqli_query($db_server, "select * from ferents_news");
    if (mysqli_num_rows($query_res) == 0) {
        if (file_exists($file)) {
            $text = file_get_contents($file);
            $contentArray = explode("&",$text);
            for ($i=0; $i < count($contentArray); $i++) { 
                $contentArray_2 = explode("~",$contentArray[$i]);
                $topic = $contentArray_2[0];
                $title = $contentArray_2[1];
                $content = $contentArray_2[2];
                $date = $contentArray_2[3];
                $q = "INSERT INTO ferents_news(topic, title, content, time) 
                VALUES ('$topic','$title','$content','$date')";
                mysqli_query($db_server, $q);
            }
        }else{
            echo "<p>File not exists</p>";
        }
    }
    file_put_contents("file/out.txt",mysqli_num_rows($query_res));
?>
<html>
    <head>
        <title>lab9</title>
        <meta charset=utf-8>
    </head>
    <body>
        <h3>PHP. Регулярні вирази</h3>
        <a href='lab9_3.php'>lab9_3</a><br>
        <a href='lab9_4.php'>lab9_4</a><br>
        <a href='lab9_5_6.php'>lab9_5-6</a><br>
        <h3 class='back'><a href='../'>Повернутися в меню</a><br></h3>
    </body>
</html>
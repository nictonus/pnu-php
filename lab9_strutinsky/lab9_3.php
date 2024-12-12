<?
    #require '../config.php';
    require "../db.php";
    $file = "file/news.txt";
?>
<html>
    <head>
        <title>lab9</title>
        <meta charset=utf-8>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    </head>
    <body>
    <table border="2">
        <h2>Fetch result:</h2>
            <tr><th>№</th><th>Тема</th><th>Заголовок</th><th>Контент</th><th>Дата та час</th></tr>
            <?php
                $query_res = mysqli_query($db_server, "select * from ferents_news");
                if (mysqli_num_rows($query_res) > 0) {
                    while($row = mysqli_fetch_row($query_res)) {
                        echo $row[1];
                       echo "<tr>
                            <td>".$row[0]."</td><td>".$row[1]."</td>
                            <td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td>
                       </tr>";
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($db_server);   
            ?>
        <h3 class='back'><a href='lab9_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
<?php
    #require '../config.php';
    require "../db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $topic = $_POST["topic"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $time = $_POST["date"]." ".$_POST["time"];
    if (isset($_POST["deletID5"])) {
        mysqli_query($db_server, "DELETE FROM ferents_news WHERE id = 5");
    }
    if(mysqli_query($db_server, "INSERT INTO ferents_news(topic,title,content,time) VALUES ('$topic', '$title', '$content','$time')")){
        echo "<p>User successfully added!</p>";
    }
}
?>

<html>
    <head> 
        <title>lab9_5_6</title>
    </head>
    <body>
        <form action="" method="POST">
            <p>Тема:</p>
            <input type="text" name="topic" placeholder="Тема:" required>
            <p>Заголовок:</p>
            <textarea name="title" rows="4" cols="50"></textarea>
            <p>Контент:</p>
            <textarea name="content" rows="4" cols="50"></textarea>
            <p>Дата:</p>
            <input type="date" name="date" required>
            <p>Час:</p>
            <input type="time" name="time" required><br><br>;
            <input type="submit" value="Sign up!"><hr>
        </form>
        <form action="" method="POST">
            <p>Чек-бокс для видалення 5-id в таблиці</p>
            <input type="checkbox" name="deletID5"><br><br>
            <input type="submit" value="Sign up!"><hr>
            
        </form>
        <table border="2">
            <tr><th>№</th><th>Тема</th><th>Заголовок</th><th>Контент</th><th>Дата та час</th></tr>

            <?php
                $query_res = mysqli_query($db_server, "select * from ferents_news order by id");
    
                if (mysqli_num_rows($query_res) > 0) {
                    while($row = mysqli_fetch_assoc($query_res)) {
                        echo "<tr><td>".$row['id']."</td><td>".$row['topic']."</td><td>".$row['title']."</td><td>".$row['content']."</td><td>".$row['time']."</td></tr>";
                    }
                } else {
                    echo "0 results";
                }  
                mysqli_close($db_server);   
            ?> 
        </table>

        <h3 class='back'><a href='lab9_index.php'>Назад</a></h3>
    </body>
</html>
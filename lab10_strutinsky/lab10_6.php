<?
    require "config/log_In.php";
    require "../db.php";
    require "../config.php";
    $SERVER_ROOT = "/http:\/\/ferents.infinityfreeapp.com\/lab10_ferents/";
    if(preg_match($SERVER_ROOT,$_SERVER['HTTP_REFERER'])){
        if (!isset($_POST['go'])) {
            echo "<form method=POST>
            Логін: <input type=text name=login><br>
            Пароль: <input type=password name=passWord><br>
            <input type=submit name=go value=go>
            </form>";
        }else{
            $query_res = mysqli_query($db_server,"SELECT * FROM user_for_session WHERE login='".$_POST['login']."' AND password='".$_POST['passWord']."'");
            if (!mysqli_num_rows($query_res) == 0) {
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $_POST['passWord'];
                Header("Location: secret_info2.php"); 
            }else{
                echo "неправильний ввід, спробуйте ще раз <br>
                Ця сторінка доступна тільки користувачу з логіном з бази данних<br>";
            }
        }
    }
?>
<html>
    <head><title>authorize</title></head>
    <body>
        <h3 class='back'><a href='lab10_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
<?
    require "config/log_In.php";
    if (!isset($_GET['go'])) {
        echo "<form>
        Логін: <input type=text name=login><br>
        Пароль: <input type=password name=passWord><br>
        <input type=submit name=go value=go>
        </form>";
    }else{
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passWord'] = $_GET['passWord'];
        if ($_GET['login']=="pit" && $_GET['passWord']=="123") {
            Header("Location: secretInfo.php"); 
        }else{ 
            echo "неправильний ввід, спробуйте ще раз <br>
            Ця сторінка доступна тільки користувачу з логіном 'pit' та паролем '123'<br>";
        }
    }
    print_r($_SESSION);
?>
<html>
    <head><title>authorize</title></head>
    <body>
        <h2>Приклад cианусу</h2>
        <h3 class='back'><a href='lab10_index.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
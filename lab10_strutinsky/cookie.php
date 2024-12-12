<?
    require "config/log_In.php";
    if (isset($_COOKIE['Mortal'])){
        $cnt=$_COOKIE['Mortal']+1;
    }
    else {
        $cnt=0;
    }
    setcookie("Mortal",$cnt, 0x6FFFFFFF);
    echo "<p>Ви відвідували цю сторінку <b>".@$_COOKIE['Mortal']."</b> раз</p>";
?>
<html>
    <head><title>cookie</title></head>
    <body>
        <h2>Прмклад кукі, який виводить кількість разів ви відвідували цю сторінку</h2>
        <h3 class='back'><a href='lab10.php'>Повернутися в меню</a><br></h3>
    </body>
</html>
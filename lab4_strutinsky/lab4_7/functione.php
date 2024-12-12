<?php
echo "<html>";
echo "<head>";
echo "<meta http-equiv='Content-Type' content='text/html'; charset='windows-1251'>";
echo "<title> Test </title>";
echo "</head>";
echo "<body>";
echo "<h3> Тестова форма </h3>";
echo "<hr size=1>";
echo "<p> Оберіть жанр фільмів який вам подобається:";
if(isset($_POST["first"]))
{
    if($_POST["first"] == "Комедія") echo "<b> Комедія </b>";
    elseif($_POST["first"] == "Хоррор") echo "<b> Хоррор </b>";
    elseif($_POST["first"] == "Бойовик") echo "<b> Бойовик </b>";
    elseif($_POST["first"] == "Жодин з вказаних") echo "<b> Жодин з вказаних </b>";
}else{
    echo "<b> Відповдь не була вказана </b>";
}
echo "</p>";
echo "<p> Оберіть книги які вам подобаються: </p>";
if (isset($_POST["check_1"])|isset($_POST["check_2"])|isset($_POST["check_3"])|isset($_POST["check_4"])) {
    if(isset($_POST["check_1"])) echo "<p> <b> Захар Беркут </b> </p>";
    if(isset($_POST["check_2"])) echo "<p> <b> Енаїда </b> </p>";
    if(isset($_POST["check_3"])) echo "<p> <b> Кобзар </b> </p>";
    if(isset($_POST["check_4"])) echo "<p> <b> Лісова пісня </b> </p>";
}
else echo "<p> <b>Відповдь не була вказана</b> </p>";
echo "<hr size=1>";
echo "<p> Оберіть олюбленого поета України:<br><b>".$_POST["sel"]."</b> </p>";
echo "<hr size=1>";
echo "<p> Вибиріть ваше хобі: </p>";
if (isset($_POST["sel_2"])) {
    foreach($_POST["sel_2"] as $keys => $values){
        echo "<b> $values </b> <br>";
    }
}else{
    echo "<b> Відповдь не була вказана </b> <br>";
}
echo "<hr size=1>";
echo "</body>";
echo "</html>";
?>

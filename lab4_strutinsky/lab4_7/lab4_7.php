<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
        <title> Test </title>
    </head>
    <body>
        <h3> Тестова форма </h3>
        <form name="form" method="post" action="functione.php">
            <p>Оберіть жанр фільмів який вам подобається</p>
            <input type="radio" name="first" value ="Комедія">Комедія<br>
            <input type="radio" name="first" value ="Хоррор">Хоррор<br>
            <input type="radio" name="first" value ="Бойовик">Бойовик<br>
            <input type="radio" name="first" value ="Жодин з вказаних">Жодин з вказаних
            <p>Оберіть книги які вам подобаються</p>
            <input type="checkbox" name="check_1">Захар Беркут<br>
            <input type="checkbox" name="check_2">Енаїда<br>
            <input type="checkbox" name="check_3">Кобзар<br>
            <input type="checkbox" name="check_4">Лісова пісня
            <p>Оберіть олюбленого поета України</p>
            <select name=sel size=1>
                <option value="Тарас Шевченко" selected>Тарас Шевченко</option>
                <option value="Іван Франко">Іван Франко</option>
                <option value="Леся Українка">Леся Українка</option>
                <option value="Михайло Коцюбинський">Михайло Коцюбинський</option>
            </select>
            <p>Вибиріть ваше хобі(можете обрати декілька)</p>
            <select name=sel_2[] size=4 multiple>
                <option value="Відео ігри">Відео ігри</option>
                <option value="Спорт">Спорт</option>
                <option value="Перегляд фільмів">Перегляд фільмів</option>
                <option value="Благодійність">Благодійність</option>
            </select>
            <p>
                <input type="submit" value="Готово">
                <input type="reset" value="Очистити форму">
            </p>
        </form>
    </body>
</html>
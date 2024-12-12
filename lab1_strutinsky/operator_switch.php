<?php
#require("../config.php");
#include_once("../db.php");
#include_once("../function.php");
?>
<html>
<head>
<title>Приклад оператора switch</title>
</head>
<body>
<?php 


echo "<div>
Показати фото тварин:<br>
1)Фото 1<br>
2)Фото 2<br>
3)Фото 3<br>
<form method='get'>
Введіть число:<br>
<input type='text' name='choice'><br>
<input type='submit' value='Показати'>
</form></div>
<h3 class='back'><a href='lab1.php'>Назад</a></h3>";

if (!empty($_GET['choice'])) {
    $number=$_GET['choice']; 
    switch ($number) {
	case '1':
	echo "<img src='images/animal1.jpg'>";
		break;
	case '2':
	echo "<img src='images/animal2.jpg'>";
		break;
	case '3':
	echo "<img src='images/animal3.jpg'>";
		break;
	default:
		echo "Некоректно введені дані, повторіть спробу";
		break;
	}
}
?>

</body>
</html>
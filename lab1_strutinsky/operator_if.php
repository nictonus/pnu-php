<?php
#require("../config.php");
#include_once("../db.php");
?>
<html>
<head>
<title>Приклад операторів if, eseif, else</title>
</head>
<body>
<?php 
echo "<div> Перевірка числа(додатнє, від'ємне або нуль)<br>
<form method='get'>
Введіть число:<br>
<input type='text' name='number'><br>
<input type='submit' value='Перевірити'>
</form>
</div>";
if (!empty($_GET['number'])) {
  $number=$_GET['number'];
  if($number>0){
    echo "<div>Число ".$number." - додатнє</div>";
  }
  elseif ($number<0) {
    echo "<div>Число ".$number." - від'ємне<div>";
  }
  else{  
    echo "<div>Число ".$number." дорівнює нулю</div>"; 
  }
}
?>
<h3 class='back'><a href="lab1.php" >Назад</a></h3>
</body>
</html>

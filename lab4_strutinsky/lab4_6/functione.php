<?php
function table_creator(){
    $date = array('Пароль' => $_POST['pswfield'],
    'Перевірка_паролю' => $_POST['check_pswfield'],
    'ім\'я' => $_POST['name'],
    'Фамілія' => $_POST['first_name'],
    'Пошта' => $_POST['E-mail'],
    );
    echo"<table border=1 cellpadding=4 cellspacing=4>";
    $a = 0;
    while ($a < 2) {
        echo "<tr>";
        if ($a == 0) {
            foreach ($date as $key => $value) {
                echo "<td>$key</td>";
            }
        }else{
            foreach ($date as $key => $value) {
                echo "<td>$value</td>";
            }
        }
        echo "</tr>";
        $a++;
    }
    echo "</table>";
}

echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title> lab4_6 </title>';
echo '</head>';
echo '<body>';
echo '<h3> Тестова форма </h3>';
echo '<p> Значення списку із множинним вибором: </p>';
if(isset($_POST['pswfield'],$_POST['check_pswfield'],$_POST['name'],$_POST['first_name'],$_POST['E-mail'])){
    if($_POST['pswfield'] == $_POST['check_pswfield']){
        table_creator();
    }else{
        echo "<b>Перевіка паролю не була пройденою</b>";
    }
}else{
    echo "<b>Поля даних не були заповнені</b>";
}
echo '</body>';
echo '</html>';
?>
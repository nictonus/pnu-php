<?php
    include_once "function/function.php"
?>

<?php
    $rund_num = mt_rand(1,6);
    echo "<a href='lab3_7.php?$rund_num'>lab3_7.php</a><br>";
    switch ($rund_num) {
        case 1:
            fun1();
            break;
        case 2:
            fun2();
            break;
        case 3:
            fun3();
            break;      
        default:
            echo "Некоректні дані<br>";
            break;
    }
?>
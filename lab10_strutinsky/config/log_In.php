<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['passWord'])){
    echo "Ви війшли як ".$_SESSION['login']."<br>";
}else{
    echo "Ви війшли як гість<br>";
}
?>
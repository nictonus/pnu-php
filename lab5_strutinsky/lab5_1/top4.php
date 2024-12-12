<?php
    function filereader($f){
        $f = fopen("$f","r") or die("Файла не існує");
        while (!feof($f)) {
            echo(fgets($f,1024));
        }
    }
?>
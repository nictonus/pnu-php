<?php
    function infoFile($f){
        if(!file_exists($f)){
            echo"$f незнайдений!";return;
        }
        echo "$f - ".(is_file($f)?"":"не")."файл<br>";
        echo "$f - ".(is_dir($f)?"":"не")."каталог<br>";
        echo "$f ".(is_readable($f)?"":"не")."доступний для читання<br>";
        echo "$f ".(is_writable($f)?"":"не")."доступний для запису<br>";
        echo "размір $f в байтах - ".(filesize($f))."<br>"; 
        echo "остання зміна $f - ".(date("d M.Y.H:i",filemtime($f)))."<br>";
        echo "останнє звернення до $f - ".(date("d M.Y.H:i",fileatime($f)))."<br>";
    }
?>
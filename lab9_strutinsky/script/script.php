<?
    function FileExists($file){
        if (!file_exists($file)) {
            echo "<p>File not exists</p>";
            return false;
        }
    }
?>
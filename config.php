<?php
   $LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME']))); 
   $LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix); 
   echo "Файл був змінений: $LastModified"."<br>";
   
?>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
        <link rel='stylesheet' href='/css/style.css' type='text/css' media='screen, projection'/>
        <script type='text/javascript' src='/js/jquery-3.6.0.min.js'></script>
        <script type='text/javascript' src='/js/my.js'></script>
    </head>
    <body>
        <p id="main"> <a href='index.php'>На головну</a></p>
    </body>
</html>
<?php
?>

<?
    function FileExists($file){
        if (!file_exists($file)) {
            echo "<p>File not exists</p>";
            return false;
        }
    }
    function textPrint($file){
        if (FileExists($file)) {
            return;
        }
        $text = file_get_contents($file);
        $patten = "/(<)/";
        $text = preg_replace($patten,"< ",$text);
        echo $text;
    }
    function TegPrint($file){
        if (FileExists($file)) {
            return;
        }
        $text = file_get_contents($file);
        $patten = "/HR|B|\w+/";
        preg_match_all($patten,$text,$tegs);
        $tegs = array_map("array_unique",$tegs);
        foreach ($tegs as $key => $value) {
            foreach($value as $key2 => $value2){
                echo $value2.";<br>";
            }
        }
    }
    function TegPrintWithBrackets($file){
        if (FileExists($file)) {
            return;
        }
        $text = file_get_contents($file);
        $patten = "/(<)/";
        $patten2 = "/< \w+>/";
        $text = preg_replace($patten,"< ",$text);
        preg_match_all($patten2,$text,$tempArray);
        $tegs = array_map("array_unique",$tempArray);
        foreach ($tegs as $key => $value) {
            foreach($value as $key2 => $value2){
                echo $value2."<br>";
            }
        }
    }
    function PrintAllTegWords($file){
        if (FileExists($file)) {
            return;
        }
        $text = file_get_contents($file);
        $text = preg_replace("/</","< ",$text);
        $patten = "/тег-\w+|\W+тег+\w\W|\W+тег\W+/ui";
        $parts = explode(".",$text);
        $i = 0;
        preg_match_all($patten,$text,$tegs);
        foreach ($parts as $key => $value) {
            if (preg_match($patten,$value)) {
                $value = preg_replace($patten,"<b>".$tegs[0][$i]."</b>",$value);
                echo $value.";<br>";
                $i++;
            }
        }
    }
    function PrintAllHTMLWords($file){
        if(FileExists($file)) {
            return;
        }
        $text = file_get_contents($file);
        $text = preg_replace("/</","< ",$text);
        $patten = "/HTML-\w+|HTML/ui";
        $parts = explode(".",$text);
        $i = 0;
        preg_match_all($patten,$text,$tegs);
        foreach ($parts as $key => $value) {
            if (preg_match($patten,$value)) {
                $value = preg_replace($patten,"<b>".$tegs[0][$i]."</b>",$value);
                echo $value.";<br>";
                $i++;
            }
        }
    }
    function PrintAllUserWords($file,$word){
        if($word == ''){
            return;
        }
        if (FileExists($file)) {
            return;
        }
        $text = file_get_contents($file);
        $patten = "/$word-\w+|$word+\w+\W|$word/ui";
        $parts = explode(".",$text);
        $i = 0;
        preg_match_all($patten,$text,$tegs);
        foreach ($parts as $key => $value) {
            if (preg_match($patten,$value)) {
                $value = preg_replace($patten,"<b>".$tegs[0][$i]."</b>",$value);
                echo $value.";<br>";
                $i++;
            }
        }
    }

    function CheckEmptyValues($value){
        if ($value == '') {
            echo "Ви не заповнили $value";
            return True;
        }
    }
    function NameCheck($names){
        if (CheckEmptyValues($names)){
            return;
        }
        $pattern = "/[A-Z,А-Я]+\w+/u";
        if (preg_match($pattern,$names)) {
            echo "True $names<br>";
        }else{
            echo "False $names<br>";
        }
    }
    function LoginCheck($login){
        if (CheckEmptyValues($login)){
            return;
        }
        $pattern = "/\w+/";
        if (preg_match($pattern,$login)) {
            echo "True $login<br>";
        }else{
            echo "False $login<br>";
        }
    }
    function PasswordCheck($pass,$passCheck){
        if (CheckEmptyValues($pass)){
            return;
        }
        LoginCheck($pass);
        $pattern = "/(\w|\d)+(\w|\d)+(\w|\d)+(\w|\d)+(\w|\d)+(\w+|\d+)+/";
        if ($pass === $passCheck) {
            echo "True $passCheck<br>";
            if (preg_match($pattern,$pass)) {
                echo "True $pass<br>";
            }else{
                echo "False $pass<br>";
            }
        }else{
            echo "False $passCheck<br>";
        }
    }//^([a-z0-9]+)(\.[a-z0-9]+)*@(pnu+)(\.edu+)(\.ua+);
    function EmailCheck($emails){
        if (CheckEmptyValues($emails)){
            return;
        }
        $pattern ="/(\w+|\d+)*@(pnu\.edu|gmail)(\.(ua|com))/";
        if (preg_match($pattern,$emails)) {
            echo "True $emails<br>";
        }else{
            echo "False $emails<br>";
        }
    }
    function FormChecker($firstName,$secondName,$login,$pass,$passCheck,$emails){
        NameCheck($firstName);
        NameCheck($secondName);
        LoginCheck($login);
        PasswordCheck($pass,$passCheck);
        EmailCheck($emails);
    }
    function CheckMailIndex($index){
        if (CheckEmptyValues($index)){
            return;
        }
        $pattern = "/(V-+|I-+)\d+\d+\d+\d+\d/";
        if (preg_match($pattern,$index)) {
            echo "<br>Повідомлення було відправлене на адресу $index";
        }else{
            echo "<br>Не кориктні данні $index";
        }
    }
    function RemoveTegs($file){
        if (FileExists($file)) {
            return;
        }
        $text = file_get_contents($file);
        $pattern = "/<(\w+|\\w+)>/";
        $text = preg_replace($pattern,"",$text);
        echo $text;
    }
?>
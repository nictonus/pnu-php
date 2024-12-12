<?
    function Found_file($file){
        $sup_file = $file;
        if(!file_exists($sup_file)){
            echo "$sup_file не було знайдино";
            return;
        }
        echo "$sup_file було знайдино впоточній деректорії<br>";
        echo "Розмір $sup_file ".(filesize($sup_file))."<br>";
        echo "Останій час зміни файлу $sup_file ".date("d M.Y.H:i",filemtime($sup_file))."<br>";
        echo "Час створення файлу $sup_file ".date("d M.Y.H:i",filectime($sup_file))."<br>";
        echo "Вміст файлу<br>";
        $fp = fopen( $file, "r" ) or die( "Не вдалося відкрити файл!" );
        while(!feof($fp)) {
            echo(fgets($fp,1024));
        }
    }
    function Bilder_table_of_tags($file){
        $counter = true;
        $file = fopen("$file","r") or die("Файла не існує");
        echo "<table border='1px solid'>
                <tr>
                    <th>Запис тегу</th>
                    <th>Опис тегу</th>
                </tr>";
        while (!feof($file)) {
            if ($counter === true){
                echo "<tr>
                        <td>
                            <<b>".(fgets($file,1024))."</b>>
                        </td>";
                $counter = false;
            }else {
                echo "
                    <td>
                        ".(fgets($file,1024))."
                    </td>
                </tr>";
                $counter = true;
            }
        }
        echo "</table>";
        fclose($file);
    }
    function Bilder_table_of_tags2($file){
        $counter = 0;
        $file = fopen("$file","r") or die("Файла не існує");
        echo "<table border='1px solid'>
                <tr>
                    <th>Запис тегу</th>
                    <th>Опис тегу</th>
                </tr>";
        while (!feof($file)) {
            $counter++;
            $parts = explode("-",fgets($file,1024));
            echo "<tr>
                <td>".$parts[0]."</th>
                <td>".$parts[1]."</th>
            </tr>";
        }
        echo "</table>";
        fclose($file);
        $file_out = "out.txt";
        if(!file_exists("files/$file_out")){
            touch("files/$file_out");
        }
        $file_out_dir = fopen("files/$file_out","w") or die("Файла не існує");
        fputs($file_out_dir,"Всього у файли $file_out описано $counter тегів");
        fclose($file_out_dir);
        $file_out_dir = fopen("files/$file_out","r") or die("Файла не існує");
        while (!feof($file_out_dir)) {
            echo (fgets($file_out_dir,1024));
        }
        fclose($file_out_dir);
    }
    function Sort_text($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $parts = explode(" ",fgets($file,1024));
        $string = "";
        asort($parts);
        foreach ($parts as $key => $value) {
            echo $value."; ";
        }
        fclose($file);
    }
    function Word_counter($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $parts = explode(" ",fgets($file,1024));
        $word_counts = array_count_values($parts);
        asort($word_counts);
        echo "Най частіші слова у тексті: ";
        $top_words = array_slice($word_counts, 0, 2);
        foreach($top_words as $key => $value) {
            echo $key." ";
        }
        fclose($file);
    }
    function Found_longest_word($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $parts = explode(" ",fgets($file,1024));
        $max_length = 0;
        $longest_word = array();
        foreach ($parts as $key => $value) {
            $word_length = strlen($value);
            if ($max_length < $word_length) {
                $max_length = $word_length;
            }
        }
        foreach ($parts as $key => $value) {
            $word_length = strlen($value);
            if ($max_length == $word_length) {
                $longest_word[] = $value;
            }
        }
        foreach ($longest_word as $key => $value) {
            echo $value.", ";
        }
        fclose($file);
    }
    function Found_shortest_word($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $parts = explode(" ",fgets($file,1024));
        $max_length = PHP_INT_MAX;
        $longest_word = array();
        foreach ($parts as $key => $value) {
            $word_length = strlen($value);
            if ($max_length > $word_length) {
                $max_length = $word_length;
            }
        }
        foreach ($parts as $key => $value) {
            $word_length = strlen($value);
            if ($max_length == $word_length) {
                $longest_word[] = $value;
            }
        }
        foreach ($longest_word as $key => $value) {
            echo $value.", ";
        }
        fclose($file);
    }
    function Found_name_letter_starts_word($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $parts = explode(" ",fgets($file,1024));
        $name_word = array();
        foreach ($parts as $key => $value) {
            if ("в" == mb_substr($value,0,1) or "В" == mb_substr($value,0,1)) {
                $name_word[] = $value;
            }
        }
        foreach ($name_word as $key => $value) {
            echo $value.", ";
        }
        fclose($file);
    }
    function Replace_letter_o_to_uppcase($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $parts = explode(" ",fgets($file,1024));
        $name_word = array();
        foreach ($parts as $key => $value) {
            echo (str_replace("о","О",$value))." ";
        }
        fclose($file);
    }
    function Rund_text_varible_printer($rand_num){
        $text_link_array = array( 0 =>"files/ferents_vladyslav_text.txt",
                                  1 =>"files/text_variant_13.txt",
                                  2 =>"files/text_variant_14.txt",
                                  3 =>"files/text_variant_15.txt");
        echo "Варіант№ ".($rand_num + 1)."<br>";
        $file = fopen($text_link_array[$rand_num],"r") or die("Файла не існує");
        while (!feof($file)) {
            echo (fgets($file,1024));
        }
        fclose($file);
    }
    function Triad_letter_P($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $parts = explode(" ",fgets($file,1024));
        foreach ($parts as $key => $value) {
            $word_changer = str_replace('P',"PPP",$value);
            echo $word_changer." ";
        }
        fclose($file);
    }
    function Found_word($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $parts = explode(".",fgets($file,1024));
        foreach ($parts as $key => $value) {
            $parts_of_parts = explode(" ",$value);
            foreach ($parts_of_parts as $key2 => $value2){
                if ($value2 == "програмування") {
                    echo ($value)."<br>";
                }
            }
        }
        fclose($file);
    }
    function Replace_coma_to_semicolon($file){
        $file = fopen($file,"r") or die("Файла не існує");
        $temp_line = "";
        while (!feof($file)) {
            $temp_line = (fgets($file,1024));
        }
        $text_in_file = str_replace(",",";",$temp_line);
        echo $text_in_file;
        fclose($file);
    }
?>
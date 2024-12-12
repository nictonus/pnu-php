<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab4_4</title>
    </head>
    <body>
    <h1> Використання циклу foreach </h1> 
    <h2> Завдання№1</h2><br> 
    <?php
        $country["Ukraine"]=array("name"=>"Україна", "capital"=>"Київ", "popul"=>"44");
        $country["France"]=array("name"=>"Франція", "capital"=>"Париж", "popul"=>"68");
        $country["Poland"]=array("name"=>"Польща", "capital"=>"Варшава", "popul"=>"38");
        echo "<table border=1 cellpadding=4 cellspacing=4><br>";
        echo "<tr>";
        foreach ($country as $key => $value) {
            foreach ($country[$key] as $i => $count) {
                switch ($i) {
                    case "name":
                        echo "<td>Назва</td>";
                        break;
                    case "capital":
                        echo "<td>Столиця</td>";
                        break;
                    case "popul":
                        echo "<td>Населення в млн.</td>";
                        break;
                    default:
                        echo "ітератор вийшов за межі масиву";
                        break;
                }
            }
            break;
        }
        echo"</tr>\n";
        foreach ($country as $key => $current) {
            echo "<tr>";
            foreach ($country[$key] as $i => $count) {
                echo "<td>".$count."</td>";
            }
            echo"</tr>\n";
        }
        echo '</table>';
    ?>
    <h2> Завдання№2</h2><br> 
    <?php
        foreach ($country as $key => $value) {
            echo "Столиця ";
                if($key == "Ukraine"){
                    echo "України";
                }elseif($key == "France"){
                    echo "Франції";
                }else {
                    echo "Польщі";
                }
                echo " - ".$value["capital"].", населення - ".$value["popul"]." млн.<br>";
            }
    ?>
    <h2> Завдання№3</h2><br> 
    <?php
        foreach ($country as $key => $value) {
            echo "$key:<br>";
            foreach ( $country[$key] as $i => $count) {
                echo "$i => $count<br>";
            }
        }
    ?>
    <h2> Завдання№4</h2><br>
    <pre>
    <?php
        print_r($country);
    ?>
    </pre>
        <h3 class='back'><a href='lab4_index.php' >Назад</a></h3>
    </body>
</html>
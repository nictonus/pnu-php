<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab2_4</title>
    </head>
    <body>
        <?php
        $rand_num = $_GET['rand_num'];
            $id_array = array( 0 => "туш", 
                            1 => "помада",
                            2 => "пудра для лиця",
                            3 => "лак для нігтів",);
            $URL_array = array( 0 => "images/indian_ink.jpg", 
                            1 => "images/pomade.jpg",
                            2 => "images/face_powder.jpg",
                            3 => "images/nail_polish.jpg",);
            echo "<div>
                <p>Натисніть, будь ласка, на зображення ".$id_array[$rand_num]."</p>
                <form method='get'>
                    <a href='lab2_4.php?selected_image=2&rand_num=".$rand_num."'><img src='images/pomade.jpg' width='100' height='100'></a> 
                    <a href='lab2_4.php?selected_image=1&rand_num=".$rand_num."'><img src='images/indian_ink.jpg' width='100' height='100'></a> 
                    <a href='lab2_4.php?selected_image=4&rand_num=".$rand_num."'><img src='images/nail_polish.jpg' width='100' height='100'></a> 
                    <a href='lab2_4.php?selected_image=3&rand_num=".$rand_num."'><img src='images/face_powder.jpg' width='100' height='100'></a> 
                </form>
            </div>";
            if(!empty($_GET['selected_image'])){
                $selected_image = $_GET['selected_image']-1;
                echo "Ви вибрали ".$id_array[$selected_image]."<br><img src='".$URL_array[$selected_image]."' width='100' height='100'><br>";
                if ($id_array[$selected_image] == $id_array[$rand_num]) {
                    echo "Правильна відповідь!";
                }else{
                    echo "Це неправильно";
                }
            }
        ?>
        <h3 class='back'><a href='lab2_index.php'>Назад</a></h3>
    </body>
</html>

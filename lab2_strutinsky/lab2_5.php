<?php
//    require '../config.php';
?>
<html>
    <head>
        <title>lab2_4</title>
    </head>
    <body>
        <?php
            $rand_num1 = $_GET['rand_num1'];
            $rand_num2 = $_GET['rand_num2'];
            $rand_num3 = $_GET['rand_num3'];
            $rand_num4 = $_GET['rand_num4'];
            $rand_num = $_GET['rand_q'];
            $name_array = array( 0 => "туш", 
                            1 => "помада",
                            2 => "пудра для лиця",
                            3 => "лак для нігтів",
                            4 => "накладні нігті",
                            5 => "парфюм",);
            $id_array = array( 0 => 0, 
                            1 => 1,
                            2 => 2,
                            3 => 3,
                            4 => 4,
                            5 => 5,);
            $URL_array = array( 0 => "images/indian_ink.jpg", 
                            1 => "images/pomade.jpg",
                            2 => "images/face_powder.jpg",
                            3 => "images/nail_polish.jpg",
                            4 => "images/fake_nails.jpg",
                            5 => "images/perfume.jpg",);
            echo "<div>
                <p>Натисніть, будь ласка, на зображення ".$name_array[$rand_num]."</p>
                <form method='get'>
                    <a href='lab2_5.php?rand_num1=".$rand_num1."&rand_num2=".$rand_num2."&rand_num3=".$rand_num3."&rand_num4=".$rand_num4."&selected_image=".($rand_num1+1)."&rand_q=".$rand_num."'><img src='".$URL_array[$rand_num1]."' width='100' height='100'></a> 
                    <a href='lab2_5.php?rand_num1=".$rand_num1."&rand_num2=".$rand_num2."&rand_num3=".$rand_num3."&rand_num4=".$rand_num4."&selected_image=".($rand_num2+1)."&rand_q=".$rand_num."'><img src='".$URL_array[$rand_num2]."' width='100' height='100'></a> 
                    <a href='lab2_5.php?rand_num1=".$rand_num1."&rand_num2=".$rand_num2."&rand_num3=".$rand_num3."&rand_num4=".$rand_num4."&selected_image=".($rand_num3+1)."&rand_q=".$rand_num."'><img src='".$URL_array[$rand_num3]."' width='100' height='100'></a> 
                    <a href='lab2_5.php?rand_num1=".$rand_num1."&rand_num2=".$rand_num2."&rand_num3=".$rand_num3."&rand_num4=".$rand_num4."&selected_image=".($rand_num4+1)."&rand_q=".$rand_num."'><img src='".$URL_array[$rand_num4]."' width='100' height='100'></a> 
                </form>
            </div>";
            if(!empty($_GET['selected_image'])){
                $selected_image = $_GET['selected_image']-1;
                echo "Ви вибрали ".$name_array[$selected_image]."<br><img src='".$URL_array[$selected_image]."' width='100' height='100'><br>";
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

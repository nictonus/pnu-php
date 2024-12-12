<?php
    // if(!empty($subdir)){
    //     echo "<p>Ім'я переданої змінної $subdir<br>";
    // }else{
    //     echo "<p>Зміна $subdir не знайдина</p>";
    // }
    // echo "subdir = $subdir";
    $dir = "";
    $result = move_uploaded_file($_FILES['ufile']['tmp_name'], $dir.$_FILES['ufile']['name']);
    echo "<div align='center'>
        <form action='$subdir?subdir=$subdir' method='post' enctype='multipart/form-data'>
        <input type='file' name='uploadfile'>
        <input type='submit' value='Завантажити'>
        </form></div>
        <hr/>";
    $uploaddir = "../files/$subdir/";
    echo "<p>uploaddir=$uploaddir";
    $uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
    echo "<p>uploadfile=$uploadfile";
    if(copy($_FILES['uploadfile']['tmp_name'],$uploadfile)){
        echo "<p>Файл завантажений на сервер";
    }else{
        echo "<p>Файл нe завантажений на сервер!";
    }
    echo "<p>Оригінальна назва ".$_FILES['uploadfile']['name']."</p>";
    echo "<p>Тип файлу ".$_FILES['uploadfile']['type']."</p>";
    echo "<p>Розмір ".$_FILES['uploadfile']['size']."</p>";
    echo "<p>Тимчасове ім'я "  .$_FILES['uploadfile']['tmp_name']."</p>";
?>

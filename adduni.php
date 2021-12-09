<?php
if (isset($_POST["add"])){
    $file=$_FILES["logo"];
    $tmp_name = $_FILES["logo"]["tmp_name"];
    $fileName = $_FILES["logo"]["name"];
    $fileDestination = "img/".$fileName;
    move_uploaded_file($tmp_name, $fileDestination);

    $name=$_POST['name'];
    $domain=$_POST['domain'];

    $str = file_get_contents('data/unidata.json');
    $json = json_decode($str, true);
    $json['university'][] = array('name'=>$name, 'domain'=>$domain, 'logo'=>$fileName);

    file_put_contents('data/unidata.json', json_encode($json));
    header("Location: myuni.php");
}
<?php
if (isset($_POST["add"])){
    require 'conn.php';
    $file=$_FILES["logo"];
    $tmp_name = $_FILES["logo"]["tmp_name"];
    $fileName = $_FILES["logo"]["name"];
    $fileDestination = "img/".$fileName;
    move_uploaded_file($tmp_name, $fileDestination);

    $name=$_POST['name'];
    $domain=$_POST['domain'];

    header("Location: index.php?university=added");
    $sql="insert into university (uniLogo, uniName, uniDomain) values ('$fileName','$name', '$domain')";
    mysqli_query($conn,$sql);
}
?>
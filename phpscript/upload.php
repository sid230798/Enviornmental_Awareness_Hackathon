<?php

require_once "../includes/common.php";
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $content = $_POST['story'];
    $target = "../includes/images/";
    $image = $_FILES['image']["name"];
    $target_file = $target . basename($_FILES["image"]["tmp_name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
|| $imageFileType == "gif" ) {

    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $query = "INSERT INTO user_stories(title, content, imag_url) values('$title', '$content', '$target_file')";
    $result = $con->query($query);
    if($result){
        header("Location: ../sucess.html");
    }else{
        header("Location: ../WentWrong.html");
    }
    }else{
        header("Location: ../WentWrong.html");
    }

}


?>
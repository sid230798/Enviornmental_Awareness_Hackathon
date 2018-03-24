<?php

require "../includes/common.php";
session_start();
if(! (isset($_SESSION['name']))){
	header("Location: ../login.php");
}
if(isset($_POST['name'])){
    //echo $_FILES['image'];
    $name = $_POST['name'];
    $email = mysqli_escape_string($con,$_POST['email']);
    $title = mysqli_escape_string($con,$_POST['title']);
    $content = mysqli_escape_string($con,$_POST['story']);
    $target = "../includes/images/";
    $target_file = $target . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $id = $_SESSION['id'];
    //echo $id;

    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    $query = "INSERT INTO `user_stories`(`user_id`, `title`, `content`, `imag_url`) values('$id','$title', '$content', '$target_file')";
    $result = mysqli_query($con, $query);
    if($result){
        //echo $target_file;
        //echo $image;
        header("Location: ../sucess.html");
    }else{
       // echo $con->error;
        //echo "bc";
        header("Location: ../WentWrong.html");
    }

}


?>

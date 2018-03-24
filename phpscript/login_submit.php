<?php
require_once "../includes/common.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $query = "SELECT id, password, name from user WHERE email = '$email'";
    $result = $con->query($query);
    if($result && $result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(md5($pass) == $row['password']){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../index.php");
        }else{
            header("Location: ../login.php?error=Wrong password");
        }
    }else{
        header("Location: ../login.php?error=Email does not exist");
    }
}else{
    header("Location: ../login.php?error=email or password is wrong");
}


?>
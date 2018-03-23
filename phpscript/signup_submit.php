<?php 
require_once '../includes/common.php';
$name = mysqli_real_escape_string($con,filter_input(INPUT_POST,'name'));
$email_chk = filter_input(INPUT_POST,'email');
$regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
if(!preg_match($regex_email,$email_chk)){
    header('location: signUp.php?error=Invalid Email');
}else{
$email = mysqli_real_escape_string($con,$email_chk);
$pass = filter_input(INPUT_POST,'password');
if(strlen($pass)<7){
        header('location: ../signup.php?error=Password Requirement Failed');
}else{
$password = mysqli_real_escape_string($con,md5($pass));
$insert_query = "INSERT INTO user(name,email,password) values('$name','$email','$password')";
$insert_result = mysqli_query($con, $insert_query);
if($insert_result){
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['id'] = mysqli_insert_id($con);
    $_SESSION['name'] = $name;
    header('location: ../index.php');
}else{
    header("Location: ../signup.php?error=Email already exist");
}
}
}
?>
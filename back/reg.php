<?php
ob_start();
include_once 'connect.php';

if(isset($_POST['password']) and isset($_POST['email']) and isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $querych = "SELECT * FROM `users` WHERE `username` = '$username' OR `email` = '$email'";
    $resultch = mysqli_query($connection, $querych);

    $count = mysqli_num_rows($resultch);
    print($count);
    if ($count >= 1){
        echo "такой юзер уже есть";
    } else {
        $password = md5($password."dfsalhadsf4311543");
        $query = "INSERT INTO `users` (`email`,`username`,`pass`, `name`, `surname`, `theme`) VALUES ('$email','$username','$password', '', '', '.css')";
        $result = mysqli_query($connection, $query);
        header('Location: ../login.php');
    }
//    if($num == 0){
//
//    } else {
//
//    }
}

ob_end_flush();
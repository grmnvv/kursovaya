<?php
session_start();

include 'connect.php';



if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password."dfsalhadsf4311543");
    $query = "SELECT * FROM `users` WHERE (`username` = '$email' OR `email` = '$email') AND `pass` = '$password'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1){
        $_SESSION['email'] = $email;
        include 'theme.php';
    } else {
        echo "Oshibka";
    }


}



<?php

include 'connect.php';

if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['name']) && isset($_POST['surname'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $user = $_SESSION['email'];
    $query = "UPDATE `users` SET `name` = '$name', `surname` = '$surname' WHERE `email` = '$email'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    header('Location: ../profile.php');
}
<?php
ob_start();
    session_start();
    include "connect.php";
if(isset($_SESSION['email'])){

    $email = $_SESSION['email'];
//    $query = "SELECT `theme` FROM `users` WHERE `email` = '$email'";
//    $resultch = mysqli_query($connection, $query);
//    while ($result = mysqli_fetch_array($resultch)) {
//        echo "{$result['theme']}";
//    }
    $query = "SELECT `theme` FROM `users` WHERE `email` = '$email'";
    $resultch = mysqli_query($connection, $query);
    while ($result = mysqli_fetch_array($resultch)) {
        $theme = "{$result['theme']}";
        setcookie("theme", $theme, time()*60*60*24*365*10, "/");
        echo $theme;
    }

    if(isset($_POST['light'])){
        $querys = "UPDATE `users` SET `theme` = '-dark.css' WHERE `email` = '$email' OR `username` = '$email'";
        $resultchs = mysqli_query($connection, $querys);
        $query = "SELECT `theme` FROM `users` WHERE `email` = '$email'";
        $resultch = mysqli_query($connection, $query);
        while ($result = mysqli_fetch_array($resultch)) {
            $theme = "{$result['theme']}";
            setcookie("theme", $theme, time()*60*60*24*365*10, "/");
        }
    }
    if(isset($_POST['dark'])){
        $queryq = "UPDATE `users` SET `theme` = '.css' WHERE `email` = '$email' OR `username` = '$email'";
        $resultchq = mysqli_query($connection, $queryq);
        $query = "SELECT `theme` FROM `users` WHERE `email` = '$email'";
        $resultch = mysqli_query($connection, $query);
        while ($result = mysqli_fetch_array($resultch)) {
            $theme = "{$result['theme']}";
//            setcookie("theme", $theme, time()-86400);
            setcookie("theme", $theme, time()*60*60*24*365*10, "/");
        }
    }

} else {
    echo ".css";
}
header('Location: ../profile.php');
ob_end_flush();
?>
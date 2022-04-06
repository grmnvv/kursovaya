<?php
    session_start();
    include_once "connect.php";

    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $querych = "SELECT * FROM `users` WHERE `email` = '$email'";
        $resultch = mysqli_query($connection, $querych);
        if ($resultch) {
            while ($result = mysqli_fetch_array($resultch)) {
                echo "<p class='p__theme'>{$result['email']}</p>";
            }
        }
    }



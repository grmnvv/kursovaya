<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>profile</title>
    <link rel="icon" href="https://faviconka.ru/ico/1/faviconka.ru_1_117615.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/main<?php
    session_start();
    include "back/connect.php";
    $email = $_SESSION['email'];
    $query = "SELECT `theme` FROM `users` WHERE `email` = '$email'";
    $resultch = mysqli_query($connection, $query);
    while ($result = mysqli_fetch_array($resultch)) {
        if(isset($result['theme'])){
            echo "{$result['theme']}";
        } else {
            echo ".css";
        }
    }

    ?>" id="them">
    <script src="js/main.js"></script>
</head>
<body>


<!--HEADER HEADER HEADER HEADER HEADER-->
<header>
    <div class="container">
        <div class="header">
            <div class="logo">
                urHash
            </div>
            <?php include "back/avtor.php";?>
        </div>
    </div>
</header>


<!--LIST LIST LIST LIST LIST LIST LIST LIST-->
<div class="container">
    <div class="prof__profile">
        <div class="prof__filt">
            <div class="prof__settings">
                <ul>
                    <li class="prof__articles">
                        <button id="lmao1" class="prof__input__button" onclick="account()">
                            Account info
                        </button>
                    </li>
                    <hr style="margin: 30px 0 30px 0">
                    <li class="prof__articles">
                        <button id="lmao2" class="prof__input__button nch" onclick="hash_method()">
                            Hash method
                        </button>
                    </li>
                    <hr style="margin: 30px 0 30px 0">
                    <li class="prof__articles nch" >
                        <button id="lmao3" class="prof__input__button nch"onclick="theme()">
                            Theme
                        </button>
                    </li>
                </ul>
            </div>
            <div class="vert"></div>
        </div>
        <div id="account" class="prof__info">
            <form class="form_input" action="#" method="post" onsubmit="return false;" id="profform" >
<!--                <p id="data" class="prof__name hidden red">Change ur data</p>-->
                <p class="prof__name">Email</p>
                <div class="">
                    <input type="email" name="email" class="change cannot_change" value="<?php
                    session_start();
                    include "connect.php";
                    if(isset($_SESSION['email'])){
                        $email = $_SESSION['email'];
                        $querych = "SELECT * FROM `users` WHERE `email` = '$email'";
                        $resultch = mysqli_query($connection, $querych);
                        if ($resultch) {
                            while ($result = mysqli_fetch_array($resultch)) {
                                if($result['email']){
                                    echo "{$result['email']}";
                                }
                            }
                        }
                    }
                    ?>" readonly id="email">
                </div>
                <hr>
                <p class="prof__name">Login</p>
                <div class="">
                    <input type="text" name="username" class="change cannot_change" value="<?php
                    if(isset($_SESSION['email'])){
                        $email = $_SESSION['email'];
                        $querych = "SELECT * FROM `users` WHERE `email` = '$email'";
                        $resultch = mysqli_query($connection, $querych);
                        if ($resultch) {
                            while ($result = mysqli_fetch_array($resultch)) {
                                echo "{$result['username']}";
                            }
                        }
                    }
                    ?>" readonly id="username">
                </div>
                <hr>
                <p class="prof__name abc">Name</p>
                <div class="">
                    <input type="text" name="name" class="change cannot_change" value="<?php
                    if(isset($_SESSION['email'])){
                        $email = $_SESSION['email'];
                        $querych = "SELECT * FROM `users` WHERE `email` = '$email'";
                        $resultch = mysqli_query($connection, $querych);
                        if ($resultch) {
                            while ($result = mysqli_fetch_array($resultch)) {
                                if($result['name']){
                                    echo "{$result['name']}";
                                } else {
                                    echo "Not undefined";
                                }
                            }
                        }
                    }
                    ?>" readonly id="name">
                </div>
                <hr>
                <p class="prof__name abc">Surname</p>
                <div class="">
                    <input type="text" name="surname" class="change cannot_change" value="<?php
                    if(isset($_SESSION['email'])){
                        $email = $_SESSION['email'];
                        $querych = "SELECT * FROM `users` WHERE `email` = '$email'";
                        $resultch = mysqli_query($connection, $querych);
                        if ($resultch) {
                            while ($result = mysqli_fetch_array($resultch)) {
                                if($result['surname']){
                                    echo "{$result['surname']}";
                                } else {
                                    echo "Not undefined";
                                }
                            }
                        }
                    }
                    ?>" readonly id="surname">
                </div>
                <hr>
                <button onclick="chage()" id="save" type="submit" name="submit" class="prof__button">Изменить</button>
            </form>
            <form method="post" action="back/logout.php">
                <button onclick="chage()" name='submit' type="submit" class="prof__button">Выйти</button>
            </form>
        </div>
        <div id="method" style="display: none" class="prof__info">
            ЕЩЕ НЕ СДЕЛАНО
        </div>
        <div id="theme" style="display:none" class="prof__theme">
            <form method="post" id="themmm" class="form_input__img" action="back/theme.php">
                <div class="light">
                    <p class="p__theme">Light theme</p>
                    <button type="submit" name="light" class="prof__input__button__img" onclick="document.cookie = 'theme=-dark.css; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT';" id="light">
                        <img src="src/light_theme.png" width="100%" height="100%">
                    </button>
                </div>
                <div class="dark">
                    <p class="p__theme">Dark theme</p>
                    <button type="submit" name="dark" class="prof__input__button__img" onclick="document.cookie = 'theme=.css; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT';" id="dark" >
                        <img src="src/dark_theme.png" width="100%" height="100%" >
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/main.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</body>
</html>
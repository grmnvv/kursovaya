<?php

$user = 'cy08763_hashik';
$password = 'Hooligan28';
$db = 'cy08763_hashik';
$host = 'localhost';


$connection = mysqli_init();
$success = mysqli_real_connect(
    $connection,
    $host,
    $user,
    $password,
    $db
);



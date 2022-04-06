<?php
ob_start();
session_start();
include 'connect.php';
$email = $_SESSION['email'];
$query = "SELECT `theme` FROM `users` WHERE `email` = '$email'";
$resultch = mysqli_query($connection, $query);
while ($result = mysqli_fetch_array($resultch)) {
    $theme = "{$result['theme']}";
    echo "<script  type='text/javascript'> document.cookie = 'theme={$theme}; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT'; </script>";
}
session_destroy();
echo '<script type="text/javascript">
window.location.href="../index.php";
</script>';



exit();
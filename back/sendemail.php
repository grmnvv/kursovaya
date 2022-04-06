<?php
echo "hfsd";
    $to = "russianfracture@gmail.com";
    $subject = "Robot - Робот";
    $message = "Hello World!<br /><i>Это письмо отправлено <b>роботом</b> и отвечать на него не нужно!</i>";
    $headers = "From: MyRusakov.ru <abc@gmail.com>\r\nContent-type: text/html; charset=windows-1251 \r\n";
    mail ($to, $subject, $message, $headers);
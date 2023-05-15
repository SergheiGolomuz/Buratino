<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "golomuzserghei@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Сообщение c сайта russiansoton.co.uk";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>
<video style="width:100%" src="./video/v7.mp4" autoplay muted></video>
<p>Sending your message, please expect to hear from us</p>
<p>Ваше сообщение отправляется, пожалуйста ожидайте нашего ответа.</p>

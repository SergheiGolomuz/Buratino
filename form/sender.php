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
    Сообщение: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Ваше сообщение отправлено, пожалуйста ожидайте обратной связи.</p><br>
<video id="myModal" src="./video/v7.mp4" autoplay muted></video>
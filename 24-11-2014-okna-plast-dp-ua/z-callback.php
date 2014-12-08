<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$what_form = $_POST['what_form'];
$message = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><body>';
$message .= '<h3>Имя</h3>'.$name.'<h3>Телефон</h3>'.$phone.'<h3>Форма сайта:</h3>'.$what_form;
$message .= '</body></html>';
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=utf-8"."\r\n"; // можно отправлять письмо в html
$headers .= "From: demo okna-plast.dp.ua";
mail('charleksvik@gmail.com', 'кто-то заполнил форму на демке okna-plast.dp.ua', $message, $headers);
header("location: ".$_SERVER['HTTP_REFERER']);
//header("Location: after-send.html");
exit;
?>
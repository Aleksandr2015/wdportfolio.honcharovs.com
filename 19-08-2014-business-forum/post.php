<?php

$name = $_POST['name'];
$company = $_POST['company'];
$position = $_POST['position'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Получить подробную информацию</title><body>';
$message .= '<h3>ФИО</h3>'.$name.'<h3>Компания</h3>'.$company.'<h3>Должность</h3>'.$position.'<h3>Телефон</h3>'.$tel.'<h3>Email<h3>'.$email;

$message .= '</body></html>';

$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=utf-8"."\r\n"; // можно отправлять письмо в html
$headers .= "From: Information_Request"."\r\n";

mail('info@honcharovs.com', 'Получить подробную информацию - заполнена форма на http://coderporto.honcharovs.com/19-08-2014-business-forum/index.html', $message, $headers);

header("location: ".$_SERVER['HTTP_REFERER']);
//header('Location: http://');

?>

<?php

$name = $_POST['name'];
$tel = $_POST['tel'];
$message = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Письмо с демонстрационной страницы wdportfolio.honcharovs.com-31-07-2014-club-house-artemovskiy</title><body>';
$message .= '<h3>От:</h3>'.$name.'<h3>E-mail:</h3>'.$tel.'<h3>Сообщение:</h3>';

$message .= '</body></html>';

$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=utf-8"."\r\n"; // можно отправлять письмо в html
$headers .= "From: wdportfolio.honcharovs.com-31-07-2014-club-house-artemovskiy"."\r\n";

mail('info@honcharovs.com', 'Кто-то заполнил ФОС на демо странице портфолио http://wdportfolio.honcharovs.com/31-07-2014-club-house-artemovskiy/index.html', $message, $headers);

//header("location: ".$_SERVER['HTTP_REFERER']);

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/non-responsive.css" rel="stylesheet">
        <!--Font-->
        <link rel="stylesheet" href="fonts/font.css" type="text/css" />
        <!--Cust styles-->
        <link href="css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">    
            <nav class="cust-nav navbar navbar-default">
                <!--<div class="container">-->
                    <ul class="nav navbar-nav fs14">
                        <a class="navbar-brand logo" href="#home">Клубный дом "Артемовский"</a>
                        <li><a href="index.html#home">Главная</a></li>
                        <li><a href="index.html#photo">Фото объекта</a></li>
                        <li><a href="index.html#process">Процесс покупки</a></li>
                        <li><a href="index.html#rewievs">Отзывы</a></li>
                        <li><a href="index.html#contacts">Контакты</a></li>
                        <li><a href="index.html#callback">Заказать обратный звонок</a></li>
                    </ul>
                <!--</div>-->
            </nav>
            
            <div class="row cust-r-aa text-center">
                
                    <div class='cust-a fs34 text-uppercase'>Спасибо за то, что вы выбрали нас!</div>
                    <div class='cust-b fs21'>Мы с Вами свяжемся в самое ближайшее время.</div>
                    <div class='fs21'>Наши телефоны для быстрой связи:</div>
                    <div class='fs25'>Тел. +38 (123) 45-67-890</div>
                    <div class='fs25'>Тел. +38 (123) 45-67-890</div>
                
            </div>

            <div class="row box cust-r-j">
                <div class='fs21 text-center text-uppercase'>
                    <img src="img/fig-10.png" /> 
                    клубный дом "артемовский" 2014
                </div>
            </div>
            
        </div><!-- .container -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- compiled and minified Bootstrap JavaScript -->
        <script src="js/bootstrap.js"></script>
    </body>
</html>
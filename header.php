<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/thumbelina.css" >
    <link rel="stylesheet" type="text/css" href="/css/fancybox.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/js/fancybox.umd.js"></script>
    <script src="https://vk.com/js/api/openapi.js?169" type="text/javascript"></script>
    <title>ТехноПром-Юг</title>
</head>

<body>
<?php
include_once 'dbConfig.php';
?>
    <header class="header">
        <div class="container">
            <div class="header__top">
                <div class="header__logo">
                    <a href="http://tpyug/index.php"><img src="img/logo1.png" alt="Логотип"></a>
                </div>
                <div class="header__left-block">
                    <nav class="header__links ">
                        <ul><li><a href="/index.php" class="header__link">Главная</a></li>
                            <li> <a href="/about.php" class="header__link">О нас</a></li>
                            <li><a href="#" class="header__link" class="list">Оборудование и детали</a>
                        <ul>
                            <li><a href="/Zapchasti-drobilok.php" class="header__link">Запчасти дробилок</a></li>
                            
                            <li><a href="/Valtcevie-stanki.php" class="header__link">Вальцевые станки</a></li></li>
                            
                            <li><a href="/Maslopressa.php" class="header__link">Маслопресса</a></li></li>
                            <li><a href="/Jarovny.php" class="header__link">Жаровни</a></li></li>
                                                    </ul></li>
                                                    <li> <a href="/services.php" class="header__link">Услуги</a></li>
                                                    <li><a href="/contacts.php" class="header__link">Контакты</a></li>
                    </ul></nav>
                </div>
                <div class="header__right-block">
                    <div class="phone">
                        +7(938)427-27-56 <br>
                        +7(938)427-27-36 </div>
                    <div class="email">Texnoug@mail.ru</div>
                    <div class="phone-none">Не смогли дозвониться?</div>
                    <div class="phone"> <button data-modal class="btn" onclick="contactsCall()">Закажите звонок</button></div>
                </div>
            </div>
            <div class="logo__block">
                <h1>ООО "Технопром-Юг" </h1><h3>Изготовление и ремонт оборудования для маслозаводов</h3>
                <div class="btn order-btn o-b" onclick="orderPage()"> <img class="cart" src="/icons/cart.png" alt="Оформить заказ">
                <span>Оформить Заказ</span>
                </div>
               <!-- <p>Мы специализируется на выпуске запасных частей и оборудования для переработки масличных культур, также имеем большой опыт по ремонту различного технологического оборудования и приводных механизмов к нему.
            </p> -->
        </div>
        <br>
        </div>
    </header>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- start linking  -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/app.css">
  
  <!-- icon -->
  <link rel="icon" href="/icons/favicon.ico">
  <!-- end linking -->
  <title>tp-yug admin</title>
</head>
<body>
<?php
session_start ();
if (!$_SESSION['admin']) {
    echo '<section class="ftco-section">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-6 text-center mb-5">';
    echo '   <h2 class="heading-section">Вам нужно<a href="login.php"> авторизоваться</a></h2>';
    echo ' </div>';
    echo '</div>';
    echo'</div';
    echo'</section>';
die ();
};
?>
    <?
include_once 'DbConfig.php';
?>

<!-- start admin -->
<section id="admin">
<div class="sidebar">
    <div class="head">
        <a href="index.php" class="btn"><img src="/img/logo1.png" alt=""></a>
    </div>
    <div id="list">
<ul class="nav flex-column">
<li class="nav-item"><a href="index.php" class="nav-link active" ><i class="fa fa-adjust"></i>Главная</a></li>
<li class="nav-item"><a href="orders.php" class="nav-link"><i class="fa fa-dollar-sign"></i>Заказы</a></li>
<li class="nav-item"><a href="requests.php" class="nav-link"><i class="fa fa-inbox"></i>Запросы</a></li>
<li class="nav-item"><a href="contacts.php" class="nav-link"><i class="fa fa-user"></i>Контакты</a></li>
<li class="nav-item"><a href="tables.php" class="nav-link"><i class="fa fa-table"></i>Таблицы БД</a></li>
<li class="nav-item"><a href="reports.php" class="nav-link"><i class="fa fa-users"></i>Отчёты</a></li>
<li class="nav-item"><a href="about.php" class="nav-link"><i class="fa fa-life-ring"></i>О предприятии</a></li>
<li class="nav-item"><a href="razrab.php" class="nav-link"><i class="fa fa-money-bill-alt"></i>О системе</a></li>
</ul>
        </div>
</div>

<div class="content">
    <div class="head">
        <div class="top">
            <div class="left">
                <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
                <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
                <a href="http://tpyug/" ><button class="btn btn-info hidden-xs-down"><i class="fa fa-home"></i>На сайт</button></a>
    </div>
    <div class="right">
        <a href="orders.php"><button class="btn btn-info hidden-xs-down"><i class="fa fa-bell"></i></button></a>
        <a href="requests.php"><button class="btn btn-info hidden-xs-down"><i class="fa fa-envelope"></i></button></a>
        <div class="dropdown">
            <a href="http://tpyug/Admin_panel/logout.php"><button class="btn btn-info " id="userDropdown"  aria-haspopup="true" aria-expanded="false">Выйти</button></a>
          <div class="dropdown-menu" aria-labelledby="userDropdown">
           <a class="dropdown-item" href="#">profile</a>
           <a class="dropdown-item" href="#">sitting</a>
           <a class="dropdown-item" href="#">log out</a>
         </div>
        </div>
      </div>
</div>
<div class="bottom">
    <div class="left">
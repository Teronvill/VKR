
<?require 'header.php' ?>

<h1>Таблицы базы данных</h1>
</div>
</div>

<div id="real">
    <div class="tbl_btn">
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.services');">Услуги</button>
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.requests');">Запросы</button>
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.nomenclature');">Номенклатура</button>
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.delivery');">Доставка</button>
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.clients');">Клиенты</button>
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.orders');">Заказы</button>
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.carts');">Корзины</button>
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.warehouse');">Склады</button>
<button class="btn btn-info "aria-haspopup="true" aria-expanded="false" onclick="togglediv('.staff');">Сотрудники</button>
</div>


<!-- При клике на строку таблицы она выводится в инпут и потом при кнопке происходит запрос и если такая запись есть то изменяет если нет то добавляет -->

<div class="services hide block">
<h2>Услуги</h2>
<div class="result" id="#results"></div>
<div class="form">

    <form class="add_form grey" id="s_form" method="POST" ">

    <span>id</span>
<input type="text"  name="s_id" id="s_id">

Наименование услуги:
<input type="text"   name="s_name" id="s_name">
<br>
<div class="btn btn-info" id="sub_btn" type="submit">Добавить/Изменить</div>
<div class="btn btn-info" id="del_btn" type="submit">Удалить</div>
</form></div>
<?php
  $sql = mysqli_query($link, "SELECT `id`, `service` FROM `services`");
  echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Услуга</th><tr>";

  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr class='orange table-warning' id='change_serv'><td class='wid s_id'>{$result['id']}</td><td class='td-left service'>{$result['service']}</td></tr>";
   
  }
  echo '</table>';
?>

</div>

<div class="requests hide block">
  <h2>Запросы</h2>
  <div class="result" id="#results"></div>
  <div class="form">
 
      <form class="add_form grey" id="r_form" method="POST" ">
  
      <span>id</span>
  <input type="text" name="r_id" id="r_id">
  Статус:
  <input type="text" name="r_status" id="r_status">
  <br>
  <div class="btn btn-info" id="r_sub_btn" type="submit">Добавить/Изменить</div>
  <div class="btn btn-info" id="r_del_btn" type="submit">Удалить</div>
  </form></div>
  <?php
    $sql = mysqli_query($link, "SELECT `id`, `phone`, `name`, `text`, `status` FROM `requests`");
    echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Телефон</th><th>Имя</th><th>Текст</th><th>Статус</th><tr>";
  
    while ($result = mysqli_fetch_array($sql)) {
      echo "<tr class='orange table-warning' id='change_req'><td class='wid r_id'>{$result['id']}</td><td class='td-left r_phone'>{$result['phone']}</td><td class='td-left r_name'>{$result['name']}</td><td class='td-left r_text'>{$result['text']}</td><td class='td-left r_status'>{$result['status']}</td></tr>";
     
    }
    echo '</table>';
  ?>
  
  </div>

  <div class="nomenclature hide block">
  <h2>Запросы</h2>
  <div class="result" id="#results"></div>
  <div class="form">
  
      <form class="add_form grey" id="n_form" method="POST" ">
  
      <span>id</span>
  <input type="text" name="n_id" id="n_id">
 Наименование:
  <input type="text" name="n_name" id="n_name">
 Маркировка:
  <input type="text" name="n_marking" id="n_marking">
  Размер:
  <input type="text" name="n_size" id="n_size">
  <br>Описание:
  <input type="text" name="n_desc" id="n_desc">
  Стоимость:
  <input type="text" name="n_price" id="n_price">
  <br>
  <div class="btn btn-info" id="n_sub_btn" type="submit">Добавить/Изменить</div>
  <div class="btn btn-info" id="n_del_btn" type="submit">Удалить</div>
  </form></div>
  <?php
    $sql = mysqli_query($link, "SELECT `id_nomenclature`, `nomenclature`, `marking`, `sizes`, `description`, `price` FROM `nomenclature`");
    echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Наименование</th><th>Маркировка</th><th>Размер</th><th>Описание</th><th>Стоимость</th><tr>";
  
    while ($result = mysqli_fetch_array($sql)) {
      echo "<tr class='orange table-warning' id='change_nom'><td class='wid n_id'>{$result['id_nomenclature']}</td><td class='td-left n_name'>{$result['nomenclature']}</td><td class='td-left n_marking'>{$result['marking']}</td><td class='td-left n_size'>{$result['sizes']}</td><td class='td-left n_desc'>{$result['description']}</td><td class='td-left n_price'>{$result['price']}</td></tr>";
     
    }
    echo '</table>';
  ?>
  


  </div>

<div class="delivery hide block">
<h2>Доставка</h2>
<div class="result" id="#results"></div>
<div class="form">

    <form class="add_form grey" id="d_form" method="POST" ">

    <span>id</span>
<input type="text" name="d_id" id="d_id">
Название:
<input type="text" name="name_d" id="name_d">
Телефон:
<input type="text" name="phone_d" id="phone_d">
<br>
<div class="btn btn-info" id="d_sub_btn" type="submit">Добавить/Изменить</div>
<div class="btn btn-info" id="d_del_btn" type="submit">Удалить</div>
</form></div>
<?php
  $sql = mysqli_query($link, "SELECT `id`, `name_d`,`phone_d` FROM `delivery`");
  echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Название</th><th>Телефон</th><tr>";

  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr class='orange table-warning' id='change_d'><td class='wid d_id'>{$result['id']}</td><td class='td-left name_d'>{$result['name_d']}</td><td class='td-left phone_d'>{$result['phone_d']}</td></tr>";
   
  }
  echo '</table>';
?>

</div>

<div class="clients hide block">
<h2>Клиенты</h2>
<div class="result" id="#results"></div>
<div class="form">

    <form class="add_form grey" id="c_form" method="POST" ">

    <span>id</span>
<input type="text" name="c_id" id="c_id">
Имя:
<input type="text" name="c_name" id="c_name">
Контактное лицо:
<input type="text" name="cont_name" id="cont_name">
Email:
<input type="text" name="email" id="email">
<br>Телефон:
<input type="text" name="c_phone" id="c_phone">
Дата регистрации:
<input type="text" name="c_date" id="c_date">
<br>
<div class="btn btn-info" id="c_sub_btn" type="submit">Добавить/Изменить</div>
<div class="btn btn-info" id="c_del_btn" type="submit">Удалить</div>
</form></div>
<?php
  $sql = mysqli_query($link, "SELECT * FROM `clients`");
  echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Имя</th><th>Контактное лицо</th><th>Email</th><th>Телефон</th><th>Дата регистрации</th><tr>";

  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr class='orange table-warning' id='change_c'><td class='wid c_id'>{$result['id']}</td><td class='td-left c_name'>{$result['name']}</td><td class='td-left cont_name'>{$result['contact_person']}</td><td class='td-left email'>{$result['email']}</td><td class='td-left c_phone'>{$result['phone']}</td><td class='td-left c_date'>{$result['Date_reg']}</td></tr>";
   
  }
  echo '</table>';
?>

</div>

<div class="orders hide block">
<h2>Клиенты</h2>
<div class="result" id="#results"></div>
<div class="form">

    <form class="add_form grey" id="o_form" method="POST" ">

    <span>id</span>
<input type="text" name="o_id" id="o_id">
Доставка:
<input type="text" name="del_id" id="del_id">
Склад:
<input type="text" name="war_id" id="war_id">
Клиент:
<input type="text" name="cli_id" id="cli_id">
<br>Адрес:
<input type="text" name="address" id="address">
Коментарий:
<input type="text" name="comment" id="comment">
Дата:
<input type="text" name="o_date" id="o_date">
Статус:
<input type="text" name="status" id="status">
<br>
<div class="btn btn-info" id="o_sub_btn" type="submit">Добавить/Изменить</div>
<div class="btn btn-info" id="o_del_btn" type="submit">Удалить</div>
</form></div>
<?php
  $sql = mysqli_query($link, "SELECT * FROM `orders`");
  echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Доставка</th><th>Склад</th><th>Клиент</th><th>Адрес</th><th>Коментарий</th><th>Дата</th><th>Статус</th><tr>";

  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr class='orange table-warning' id='change_o'><td class='wid o_id'>{$result['id']}</td><td class='td-left del_id'>{$result['id_delivery']}</td><td class='td-left war_id'>{$result['id_warehouse']}</td><td class='td-left cli_id'>{$result['id_client']}</td><td class='td-left address'>{$result['address']}</td><td class='td-left comment'>{$result['comment']}</td><td class='td-left o_date'>{$result['Date']}</td><td class='td-left status'>{$result['status']}</td></tr>";
   
  }
  echo '</table>';
?>

</div>

<div class="carts hide block">
<h2>Доставка</h2>
<div class="result" id="#results"></div>
<div class="form">

    <form class="add_form grey" id="ca_form" method="POST" ">

    <span>id</span>
<input type="text" name="id_ca" id="id_ca">
Услуга:
<input type="text" name="id_se" id="id_se">
Номенклатура:
<input type="text" name="id_no" id="id_no">
Ответственный:
<input type="text" name="id_st" id="id_st">
<br>
Количество:
<input type="text" name="num" id="num">
<br>
<div class="btn btn-info" id="ca_sub_btn" type="submit">Добавить/Изменить</div>
<div class="btn btn-info" id="ca_del_btn" type="submit">Удалить</div>
</form></div>
<?php
  $sql = mysqli_query($link, "SELECT * FROM `cart`");
  echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Услуга</th><th>Номенклатура</th><th>Ответственный</th><th>Количество</th><tr>";

  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr class='orange table-warning' id='change_ca'><td class='wid id_ca'>{$result['id_cart']}</td><td class='td-left id_se'>{$result['id_service']}</td><td class='td-left id_no'>{$result['id_nomenclature']}</td><td class='td-left id_st'>{$result['id_staff']}</td><td class='td-left num'>{$result['number']}</td></tr>";
   
  }
  echo '</table>';
?>

</div>


<div class="warehouse hide block">
<h2>Доставка</h2>
<div class="result" id="#results"></div>
<div class="form">

    <form class="add_form grey" id="w_form" method="POST" ">

    <span>id</span>
<input type="text" name="w_id" id="w_id">
Название:
<input type="text" name="name_w" id="name_w">
Адрес:
<input type="text" name="address_w" id="address_w">
Телефон:
<input type="text" name="phone_w" id="phone_w">
<br>
<div class="btn btn-info" id="w_sub_btn" type="submit">Добавить/Изменить</div>
<div class="btn btn-info" id="w_del_btn" type="submit">Удалить</div>
</form></div>
<?php
  $sql = mysqli_query($link, "SELECT * FROM `warehouse`");
  echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Название</th><th>Адрес</th><th>Телефон</th><tr>";

  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr class='orange table-warning' id='change_w'><td class='wid w_id'>{$result['id']}</td><td class='td-left name_w'>{$result['name_w']}</td><td class='td-left address_w'>{$result['address']}</td><td class='td-left phone_w'>{$result['phone']}</td></tr>";
   
  }
  echo '</table>';
?>

</div>

<div class="staff hide block">
<h2>Доставка</h2>
<div class="result" id="#results"></div>
<div class="form">

    <form class="add_form grey" id="st_form" method="POST" ">

    <span>id</span>
<input type="text" name="st_id" id="st_id">
ФИО:
<input type="text" name="fio" id="fio">
Отдел:
<input type="text" name="department" id="department">
Должность:
<input type="text" name="post" id="post">
Телефон:
<input type="text" name="phone_st" id="phone_st">
<br>
Email:
<input type="text" name="email_st" id="email_st">
<br>
<div class="btn btn-info" id="st_sub_btn" type="submit">Добавить/Изменить</div>
<div class="btn btn-info" id="st_del_btn" type="submit">Удалить</div>
</form></div>
<?php
  $sql = mysqli_query($link, "SELECT * FROM `staff`");
  echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>ФИО</th><th>Отдел</th><th>Должность</th><th>Телефон</th><th>Email</th><tr>";

  while ($result = mysqli_fetch_array($sql)) {
    echo "<tr class='orange table-warning' id='change_st'><td class='wid st_id'>{$result['id']}</td><td class='td-left fio'>{$result['fio']}</td><td class='td-left department'>{$result['department']}</td><td class='td-left post'>{$result['post']}</td><td class='td-left phone_st'>{$result['phone']}</td><td class='td-left email_st'>{$result['email']}</td></tr>";
   
  }
  echo '</table>';
?>

</div>




</div>
<?require 'footer.php' ?>
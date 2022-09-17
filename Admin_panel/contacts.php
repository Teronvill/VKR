
<?require 'header.php' ?>

<h1>Контакты клиентов</h1>
</div>
</div>

<div class="clients block">
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



<?require 'footer.php' ?>
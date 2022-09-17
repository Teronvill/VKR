
<?require 'header.php' ?>

<h1>Список заказов</h1>
</div>
</div>

<div class="orders block">
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



<?require 'footer.php' ?>
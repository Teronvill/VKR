
<?require 'header.php' ?>

<h1>Запросы клиентов</h1>
</div>
</div>

<div class="requests block">
  <h2>Запросы</h2>
  <div class="result" id="#results"></div>
  <div class="form">
 
      <form class="add_form grey" id="r_form" method="POST" ">
  
      <span>id</span>
  <input type="text" name="r_id" id="r_id">
  Телефон:
  <input type="text" name="r_phone" id="r_phone">
 Имя:
  <input type="text" name="r_name" id="r_name">
  Текст:
  <input type="text" name="r_text" id="r_text">
  <br>
  <div class="btn btn-info" id="r_sub_btn" type="submit">Добавить/Изменить</div>
  <div class="btn btn-info" id="r_del_btn" type="submit">Удалить</div>
  </form></div>
  <?php
    $sql = mysqli_query($link, "SELECT `id`, `phone`, `name`, `text` FROM `requests`");
    echo"<table class=' orange table table-striped table-warning'><tr><th>id</th><th>Телефон</th><th>Имя</th><th>Текст</th><tr>";
  
    while ($result = mysqli_fetch_array($sql)) {
      echo "<tr class='orange table-warning' id='change_req'><td class='wid r_id'>{$result['id']}</td><td class='td-left r_phone'>{$result['phone']}</td><td class='td-left r_name'>{$result['name']}</td><td class='td-left r_text'>{$result['text']}</td></tr>";
     
    }
    echo '</table>';
  ?>
  
  </div>


<?require 'footer.php' ?>